@extends('main_master')

@section('content')
  <section id="responsive-datatable">
    <div class="container">
      <div class="row mt-4">
        <div class="col-lg-8 col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header border-bottom">
              <h4 class="card-title">All Team</h4>
            </div>
            <div class="card-datatable">
                <table class="dt-responsive employeeTable table dataTable dtr-column collapsed" id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Team Name</th>
                            <th>Number OF Members</th>
                            <th>Team Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                                $sn=1;
                            @endphp
                            @foreach ($teams as $team)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->number_of_members }}</td>
                                <td>{{ $team->description }}</td>

                           <td>
                                <button type="button" class="btn btn-relief-danger"><a href="{{ route('delete.team',$team->id) }}">
                                  <i class="fa fa-trash"></i></a> </button>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Team Add</h4>
            </div>
            <div class="card-body">
                <form  method="POST" action="{{ route('add.team') }}" class="form form-vertical">
                    @csrf
                  <div class="row">
                    <div class="col-12">
                      <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Team Name</label>
                        <div class="input-group input-group-merge">
                          <input type="text" id="first-name-icon" class="form-control" name="name" placeholder="Team Name">
                        </div>
                        @error('cat_name_en')
                              <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>


                     <div class="col-12">
                        <div class="mb-1">
                          <label class="form-label" for="first-name-icon">Number_of_Members</label>
                          <div class="input-group input-group-merge">
                            <input type="text" id="first-name-icon" class="form-control" name="number_of_members" placeholder="Number_of_Members">
                          </div>
                          @error('cat_name_bn')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="mb-1">
                          <label class="form-label" for="first-name-icon">Description</label>
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
                      <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
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






