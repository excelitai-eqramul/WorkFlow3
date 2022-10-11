@extends('main_master')

@section('content')
    <style>
        label {

            font-weight: bold;
            color: #3E0E40;
        }
    </style>



    <div>
        <h5 style="margin-left:780px; color:rgb(3, 3, 154)"><b>Each Task Details</b></h5><br><br>
        <div class="row" style="margin-left: 300px">

            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Employee Name</label>
                    <div class="col-sm-5">
                        {{ optional($each_task_view->employee)->name }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project Name</label>
                    <div class="col-sm-5">
                        {{ optional($each_task_view->project)->name }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Module</label>
                    <div class="col-sm-5">
                        {{ optional($each_task_view->module)->name }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Feature</label>
                    <div class="col-sm-5">
                        {{ optional($each_task_view->feature)->name }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Departments</label>
                    <div class="col-sm-5">
                        {{ optional($each_task_view->departmentt)->name }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">SubDepartments</label>
                    <div class="col-sm-5">
                        {{-- {{ $each_project_data_view->department->name }} --}}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Task Name</label>
                    <div class="col-sm-5">
                        {{ $each_task_view->name }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Start Date</label>
                    <div class="col-sm-5">
                        {{ $each_task_view->start_date }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label class="col-sm-4 col-form-label">Deadline</label>
                    <div class="col-sm-5">
                        {{ $each_task_view->dead_line }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">End Date</label>
                    <div class="col-sm-5">
                        {{ $each_task_view->end_date }}
                    </div>
                </div>
            </div>


            <div class="col-lg-1 col-md-1 col-sm-1">
            </div>


            <div class="col-lg-5 col-md-5 col-sm-12">


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Task Progressbar</label>
                    <div class="col-sm-2">
                        <div class="progress progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                            style="width:{{ optional($each_task_view)->progressbar }}">{{ $each_task_view->progressbar }}%
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Task Status</label>
                    <div class="col-sm-5">
                        {{ $each_task_view->status }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Task Type</label>
                    <div class="col-sm-5">
                        {{ $each_task_view->type }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Task Priority:</label>
                    <div class="col-sm-5">
                        {{ $each_task_view->priority }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Task dependency:</label>
                    <div class="col-sm-5">
                        {{ $each_task_view->task_dependency }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Task Dependency Range:</label>
                    <div class="col-sm-5">
                        {{ optional($each_task_view->tas_dependency)->name }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Work Duration:</label>
                    <div class="col-sm-5">
                        {{ $each_task_view->work_duration }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Work Time:</label>
                    <div class="col-sm-5">
                        {{ $each_task_view->working_time }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Tag:</label>
                    <div class="col-sm-5">

                        @if ($each_task_view->tag == 1)
                            <b>Ticket</b>
                        @endif
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Documents</label>
                    <div class="col-sm-5">
                        <img src="{{ asset($each_task_view->image) }}" alt="" style="height:55px; width:80px">
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
