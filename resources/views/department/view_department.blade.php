@extends('main_master')


@section('content')
    <section id="responsive-datatable">
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-6 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-header border-bottom" style="background-color: skyblue">
                            <h4 class="card-title">All Department</h4>
                        </div>
                        <div class="card-datatable">
                            <table class="table employeeTable dt-responsive table dataTable dtr-column collapsed"
                                id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info">
                                <thead style="background-color: #3E0E40; color:white">
                                    <tr>
                                        <th scope="col"> SN </th>
                                        <th scope="col"> Department Name </th>
                                        <th scope="col"> Parent ID </th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sn = 1;
                                    @endphp
                                    @foreach ($departments as $department)
                                    {{-- @php
                                        $dep_name = App\Models\Department::find($department->parent_id);
                                    @endphp --}}
                                        <tr>
                                            <td scope="row">{{ $sn++ }}</td>
                                            <td>{{ $department->name }}</td>

                                            <td>{{ optional($department->parent)->name }}</td>

                                            <td>
                                                <button type="button" class="btn btn-relief-warning"><a href="{{ route('edit.department',$department->id) }}"> <i class="fa fa-edit"></i> </a> </button>
                                                <button type="button" class="btn btn-relief-danger"><a
                                                        href="{{ route('delete.department', $department->id) }}"> <i
                                                            class="fa fa-trash"></i> </a> </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {!! $departments->links() !!}
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card" style="height: 270px; width:300px">
                        <div class="card-header">
                            <h4 class="card-title"> Add Department</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('add.department') }}" class="form form-vertical">

                                @csrf
                                <div class="row">

                                    <div class="col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="first-name-icon">Department Name</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" id="first-name-icon" class="form-control"
                                                    name="name" placeholder="Department Name">
                                            </div>
                                            @error('cat_name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="first-name-icon">Parent ID</label>
                                            <div class="input-group input-group-merge">
                                                <select class="form-select form-select" id="selectLarge"
                                                name="parent_id">
                                                <option disabled>Open this select menu</option>
                                                <option value="">Select</option>
                                                @foreach ($departments as $department)
                                                    <option value=""></option>
                                                    <option value="{{ $department->id }}">
                                                        {{ ucwords($department->name) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            </div>
                                            @error('cat_name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-primary me-1 waves-effect waves-float waves-light mt-2">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
@endsection
