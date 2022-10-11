AAAAAAAA

@extends('main_master')

@section('content')
    <style>
        label {

            font-weight: bold;
            color: #3E0E40;
        }
    </style>



    <div>
        <div class="row" style="margin-left: 300px">

            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project ID</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view_forDashboard->project_id }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project Name</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view_forDashboard->name }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project Description</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view_forDashboard->description }}
                    </div>
                </div>



                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project Category</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view_forDashboard->category }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Departments</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view_forDashboard->department->name }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">SubDepartments</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view_forDashboard->department->name }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project Start Date</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view_forDashboard->start_date }}
                    </div>
                </div>



                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project Deadline</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view_forDashboard->deadline }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label class="col-sm-4 col-form-label">Project Assign Person</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view_forDashboard->employeee->name }}
                    </div>
                </div>
            </div>



            <div class="col-lg-1 col-md-1 col-sm-1">
            </div>



            <div class="col-lg-5 col-md-5 col-sm-12">

                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Documents</label>
                    <div class="col-sm-5">
                        <img src="{{ asset('images/' . $each_project_data_view_forDashboard->upload_document) }}" alt=""
                                style="height:55px; width:80px">
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project Priority</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view_forDashboard->priority }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project Status</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view_forDashboard->status }}
                    </div>
                </div>



                @foreach ($each_project_data_view_forDashboard->budget_history as $item)
                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Project Budget</label>
                    <div class="col-sm-5">
                        {{ $item->budget }}
                    </div>
                </div>
                @endforeach


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Client</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view_forDashboard->employeee->name }}
                    </div>
                </div>


                <div class="form-group row mt-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Notifications To:</label>
                    <div class="col-sm-5">
                        {{ $each_project_data_view_forDashboard->notification }}
                    </div>
                </div>


            </div>
        </div>

    </div>




    {{-- Prgrssbar for Each Project --}}

    <div class="col-md-12" id="buldingFlatContainer" style="margin-left: 300px">
        <div class="singleitems">


            <h6 style="margin-top: 90px; margin-bottom: 30px; font-weight:bold">Task Progressbar</h6>

            @foreach ($each_project_data_view_forDashboard->progressbar as $item)

            @if ($item->percentage>=1)


            <div class="row" style="margin-left: 200px">
                <div class="col-sm-2">
                    <p> {{ optional($item)->progressbar_name }}:</p>
                </div>

                <div class="col-sm-1">
                    <p>{{ optional($item)->percentage }}%</p>
                </div>

                <div class="col-sm-1" style="margin-left: 40px">
                    <div class="progress progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                        style="width:{{ optional($item)->percentage }}">
                        <span class="sr-only">70% Complete</span>
                    </div>
                </div>
            </div>

            @endif

            @endforeach
        </div>
    </div>
    {{-- Prgrssbar for Each Project End --}}



    </div>
@endsection
