@extends('main_master')



@section('content')

<section id="responsive-datatable">
    <div class="container">
      <div class="row mt-4">
        <div class="col-lg-8 col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header border-bottom" style="background-color: skyblue">
              <h4 class="card-title">All Dependency Range</h4>
            </div>
            <div class="card-datatable">
              <table class="table employeeTable dt-responsive table dataTable dtr-column collapsed" id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info" style="text-align: center" >
                <thead style="background-color: #3E0E40; color:white">
                  <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Name</th>
                    <th scope="col">Dependency Range</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
              @php
                  $sn=1;
              @endphp
              @foreach ($dependency_range_data as $dependency_range)
              <tr>
                    <td scope="row" >{{ $sn++ }}</td>
                    <td>{{ $dependency_range->name }}</td>
                    <td>{{ $dependency_range->range }}</td>
                    <td>{{ $dependency_range->description }}</td>
                    <td>
            {{-- <button type="button" class="btn btn-relief-warning"><a href="{{ route('edit.client',$client->id) }}"> <i class="fa fa-edit"></i></a></button> --}}
                        <button type="button" class="btn btn-relief-danger"><a href="{{ route('delete.dependency_range',$dependency_range->id) }}"> <i class="fa fa-trash"></i> </a> </button>
                    </td>
              </tr>
              @endforeach
                </tbody>
              </table>
              <div class="d-flex justify-content-center">
                {!! $dependency_range_data->links() !!}
            </div>
            </div>
          </div>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Dependency Range Add</h4>
            </div>
            <div class="card-body">
              <form  method="POST" action="{{ route('add.dependency_range') }}" class="form form-vertical">
                  @csrf
                <div class="row">

                  <div class="col-12">
                    <div class="mb-1">
                      <label class="form-label" for="first-name-icon">Name</label>
                      <div class="input-group input-group-merge">
                        <input type="text" id="first-name-icon" class="form-control" name="name" placeholder="Dependency Name">
                      </div>
                      @error('cat_name_en')
                            <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>


                  <div class="col-12">
                      <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Range</label>
                        <div class="input-group input-group-merge">
                          <input type="text" id="first-name-icon" class="form-control" name="range" placeholder="Dependency Range">
                        </div>
                        @error('cat_name_bn')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Descriptiuon</label>
                        <div class="input-group input-group-merge">
                          <input type="text" id="first-name-icon" class="form-control" name="description" placeholder="Description">
                        </div>
                        @error('cat_name_bn')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>


                  <div class="col-12">
                    <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


@endsection







