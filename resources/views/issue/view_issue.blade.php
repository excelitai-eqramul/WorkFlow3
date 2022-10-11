@extends('main_master')

@section('content')
    <style>
        .btn-sm {
            font-size: 13px;
        }
    </style>


    <button style="height: 50px; width:150px; margin-left:1740px" type="button" class="btn btn-primary mb-3"
        data-bs-toggle="modal" data-bs-target="#myModal">
        Add Issue
    </button>


    <section id="responsive-datatable">
        <div class="container">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card" style="width: 99rem;">

                    <div class="card-header border-bottom" style="background-color: skyblue">
                        <h4 class="card-title">All Issue</h4>
                    </div>
                    <div class="card-datatable">
                        <table style="text-align:center"
                            class="align-middle table employeeTable dt-responsive table dataTable dtr-column collapsed"
                            id="DataTables_Table_3" role="grid" aria-describedby="DataTables_Table_3_info">
                            <thead style="background-color: #3E0E40; color:white">
                                <tr>
                                    <th>Company ID</th>
                                    <th>Project ID</th>
                                    <th>Module ID</th>
                                    <th>Feature ID</th>
                                    <th>Task ID</th>
                                    <th>Name/<br>Sub-issue Name</th>
                                    {{-- <th>Parent ID</th> --}}
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Estimate Date</th>
                                    <th>Estimate Time</th>
                                    <th>Created By</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($issues as $issue)
                                    <tr style="text-align:center">
                                        <td>{{ $issue->company_id }}</td>
                                        <td>{{ optional($issue->project)->name }}</td>
                                        <td>{{ optional($issue->module)->name }}</td>
                                        <td>{{ optional($issue->feature)->name }}</td>
                                        <td>{{ optional($issue->tasked)->name }}</td>
                                        <td>{{ optional($issue->issue_parent)->name }}<br>{{ $issue->name }}</td>
                                        <td>{{ $issue->description }}</td>

                                        <td><img src="{{ asset($issue->image) }}" alt=""
                                                style="height:55px; width:80px"></td>
                                        <td>{{ $issue->start_date }}</td>
                                        <td>{{ $issue->end_date }}</td>
                                        <td>{{ $issue->estimate_date }}</td>
                                        <td>{{ $issue->estimate_time }}</td>
                                        <td>{{ $issue->created_by }}</td>

                                        <td>
                                            <button type="button" class="btn btn-relief-danger"><a
                                                    href="{{ route('delete.issue', $issue->id) }}">
                                                    <i class="fa fa-trash"></i></a> </button>

                                                    <button type="button" class="btn btn-relief-danger"><a
                                                        href="{{ route('edit.issue', $issue->id) }}">
                                                        <i class="fa fa-edit"></i></a> </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {!! $issues->links() !!}
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-2 col-md-2 col-sm-2">
                <!-- The Modal Start-->
                <div class="modal" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h3 class="modal-title" style="font-weight:bold; color:blue">Add Issue</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">

                                <div class="container-fluid">

                                    <form method="POST" action="{{ route('add.issue') }}" class="form form-vertical"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-4">

                                                <div class="mb-1">
                                                    <label>Company ID</label>
                                                    <div class="input-group">
                                                        <select class="form-select form-select" id="selectLarge"
                                                            name="company_id">
                                                            <option disabled>Open this select menu</option>
                                                            @foreach ($companies as $company)
                                                                <option value="{{ $company->id }}">
                                                                    {{ ucwords($company->name) }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 ml-auto">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">Project Name</label>
                                                    <div class="input-group">
                                                        <select class="form-select form-select" id="selectLarge"
                                                            name="project_id">
                                                            <option disabled>Open this select menu</option>
                                                            @foreach ($projects as $project)
                                                                <option value="{{ $project->id }}">
                                                                    {{ $project->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label>Module Name</label>
                                                    <div class="input-group">
                                                        <select class="form-select form-select" id="selectLarge"
                                                            name="module_id">
                                                            <option disabled>Open this select menu</option>
                                                            @foreach ($modules as $module)
                                                                <option value="{{ $module->id }}">
                                                                    {{ ucwords($module->name) }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 ml-auto">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">Feature Name</label>
                                                    <div class="input-group">
                                                        <select class="form-select form-select" id="selectLarge"
                                                            name="feature_id">
                                                            <option disabled>Open this select menu</option>
                                                            @foreach ($features as $feature)
                                                                <option value="{{ $feature->id }}">
                                                                    {{ $feature->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">Task Name</label>
                                                    <div class="input-group">
                                                        <select class="form-select form-select" id="selectLarge"
                                                            name="task_id">
                                                            <option disabled>Open this select menu</option>
                                                            @foreach ($tasks as $task)
                                                                <option value="{{ $task->id }}">
                                                                    {{ ucwords($task->name) }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 ml-auto">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">
                                                        Name</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="first-name-icon" class="form-control"
                                                            name="name" placeholder="Enter task Name">
                                                    </div>
                                                    @error('cat_name_en')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-4 ml-auto">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon">Parent ID</label>
                                                    <div class="input-group input-group-merge">
                                                        <select class="form-select form-select" id="selectLarge"
                                                            name="parent_id">
                                                            <option disabled>Open this select menu</option>
                                                            @foreach ($issues as $issue)
                                                                <option value=""></option>
                                                                <option value="{{ $issue->id }}">
                                                                    {{ ucwords($issue->name) }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @error('cat_name_en')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">Description</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="first-name-icon" class="form-control"
                                                            name="description" placeholder="start_date">
                                                    </div>
                                                    @error('cat_name_bn')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label for="">**Issue Image:</label>
                                                        <input type="file" name="image" class="form-control"
                                                            placeholder="Image">
                                                        @error('image')
                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-4 ml-auto">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">start_date</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="date" id="first-name-icon" class="form-control"
                                                            name="start_date" placeholder="end_date">
                                                    </div>
                                                    @error('cat_name_bn')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="col-md-4 ml-auto">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">end_date</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="date" id="first-name-icon" class="form-control"
                                                            name="end_date" placeholder="end_date">
                                                    </div>
                                                    @error('cat_name_bn')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="col-md-4 ml-auto">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">estimate_date</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="date" id="first-name-icon" class="form-control"
                                                            name="estimate_date" placeholder="end_date">
                                                    </div>
                                                    @error('cat_name_bn')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 ml-auto">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">estimate_time</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="time" id="first-name-icon" class="form-control"
                                                            name="estimate_time" placeholder="end_date">
                                                    </div>
                                                    @error('cat_name_bn')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="col-md-4 ml-auto">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">Created By</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="first-name-icon" class="form-control"
                                                            name="created_by" placeholder="end_date">
                                                    </div>
                                                    @error('cat_name_bn')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 ml-auto">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">Updated By</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="first-name-icon" class="form-control"
                                                            name="updated_by" placeholder="end_date">
                                                    </div>
                                                    @error('cat_name_bn')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-4 ml-auto">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">Resolved By</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="first-name-icon" class="form-control"
                                                            name="resolved_by" placeholder="end_date">
                                                    </div>
                                                    @error('cat_name_bn')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 ml-auto">
                                                <div class="mb-1">
                                                    <label for="first-name-icon">Identify By</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="first-name-icon" class="form-control"
                                                            name="identify_by" placeholder="end_date">
                                                    </div>
                                                    @error('cat_name_bn')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 ml-auto">
                                            </div>


                                        </div>

                                        <div class="col-12 mt-3">
                                            <button type="submit"
                                                class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Modal End --}}
            </div>
        </div><br><br><br>
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
@endsection
