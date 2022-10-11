@extends('main_master')


@section('content')
    <div class="container" style="margin:10px 700px">


        <div class="btn-group">
            <a href="{{ route('all_project_dashboard') }}" class="btn btn-primary active" aria-current="page">All</a>
            <a href="{{ route('running_project') }}" class="btn btn-outline-primary">Running</a>
            <a href="{{ route('completed_project') }}" class="btn btn-outline-primary">Completed</a>
            <a href="{{ route('delivered_project') }}" class="btn btn-outline-primary">Delivered</a>
            <a href="{{ route('incomplete_project') }}" class="btn btn-outline-primary">Incomplete</a>
            <a href="{{ route('upcoming_project') }}" class="btn btn-outline-primary">Upcoming</a>
            <a href="" class="btn btn-outline-primary">Updated</a>
        </div>

    </div>




    <div class="row row-cols-1 row-cols-md-3" style="margin-left: 240px">

        @foreach ($projects as $all_projects)
            @php

                $today_check_in = Carbon\Carbon::parse($all_projects->start_date);
                $check_out = Carbon\Carbon::parse($all_projects->deadline);
                $duration = $today_check_in->diff($check_out);
                // dd($duration);

                $percentage = optional($all_projects)->progressbar_sum_percentage / optional($all_projects)->pcount;

            @endphp


            <div class="col mb-4">
                <div class="card h-500">
                    <div class="card-body">
                        {{-- <h5 style="text-align: center; font-weight:bold; margin-bottom:20px">{{ $all_projects->name }}</h5> --}}

                        <div class="row">
                            <div class="col-sm-3">

                            </div>

                            <div class="col-sm-5">
                                <h5 style="text-align: center; font-weight:bold; margin-bottom:20px">
                                    {{ $all_projects->name }}</h5>
                            </div>

                            {{-- <div class="col-sm-3">

                            </div> --}}



                            <div class="col-sm-4" style="margin-bottom: 10px">
                                <button type="button" class="btn btn-relief-warning"><a
                                        href="{{ route('dashboard_each.project_data_edit', $all_projects->id) }}"> <i
                                            class="fa fa-edit"></i> </a> </button>


                                <button type="button" class="btn btn-relief-danger"><a
                                        href="{{ route('dashboard_each.project_data_view', $all_projects->id) }}"> <i
                                            class="fa fa-eye"></i> </a> </button>
                            </div>
                        </div><br>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col" style="font-weight: bold">Category:</div>
                                    <div class="col">{{ $all_projects->category }}</div>
                                </div><br>

                                <div class="row">
                                    <div class="col" style="font-weight: bold">Time:</div>
                                </div>
 

                                @foreach ($all_projects->estimate_date as $e_date)
                                    <div class="row">
                                        <div class="col">Project's Time:</div>
                                        <div class="col">
                                            <div class="row">{{ optional($e_date)->start_date }}</div>
                                            <div class="row">{{ optional($e_date)->deadline }}</div>


                                        </div>
                                    </div><br>
                                @endforeach

                                @foreach ($all_projects->budget_history as $budgets)
                                    <div class="row">
                                        <div class="col" style="font-weight: bold">Project Budget:</div>
                                        <div class="col">{{ optional($budgets)->budget }} BDT</div>
                                    </div><br>
                                @endforeach



                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col" style="font-weight: bold">Task:</div>
                                    <div class="col">



                                        <div class="row">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"?.,mnbv
                                                    aria-valuemin="0"
                                                    aria-valuemax="][poiuytrewqoiytazXCVBNM/.,MNBVCXZzXCVBNM,.,M NV00"
                                                    style="width: {{ $percentage }}%">{{ round($percentage) }}%
                                                    <span class="sr-only">Complete</span>
                                                </div>
                                            </div>
                                            <p>pp</p>
                                        </div><br>
                                    </div>
                                </div><br>



                                <div class="row">
                                    <div class="col" style="font-weight: bold">Time Bar:</div>
                                    <div class="col">

                                        @foreach ($all_projects->estimate_date as $e_date)
                                            @php
                                                // $AddOne = 1;
                                                $today_check_in = Carbon\Carbon::parse($e_date->start_date);
                                                $check_out = Carbon\Carbon::parse($e_date->deadline);
                                                $duration = $today_check_in->diff($check_out);
                                                //dd($duration);

                                                $checkss_out = Carbon\Carbon::parse($e_date->start_date);
                                                $thatday_check_in = Carbon\Carbon::now();
                                                $duration_of_spend_days = $checkss_out->diff($thatday_check_in);

                                                if ($duration_of_spend_days->days <= $duration->days) {
                                                    $spend_date_with_percentage = (($duration_of_spend_days->days + 1) / $duration->days) * 100;

                                                    $belowShow_spend_date_with_percentage = round($spend_date_with_percentage);
                                                } else {
                                                    $spend_date_with_percentage = 100;
                                                    $belowShow_spend_date_with_percentage = 'Time over';
                                                }

                                            @endphp

                                            <div class="row">
                                                <div class="progress">

                                                    <div class="
                                                        @if ($spend_date_with_percentage >= 100) progress-bar bg-danger
                                                        @else
                                                        progress-bar @endif
                                                    "
                                                        role="progressbar" aria-valuenow="70" aria-valuemax="100"
                                                        style="width:{{ round($spend_date_with_percentage) }}%">
                                                        {{ round($spend_date_with_percentage) }}%
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                                <p>{{ $belowShow_spend_date_with_percentage }}</p>
                                            </div><br>
                                        @endforeach
                                    </div>
                                </div><br>
                                {{-- {{ round($percentage) }} --}}

                                <div class="row">
                                    <div class="col" style="font-weight: bold">Expense Vs Budget:</div>
                                    <div class="col">
                                        <div class="row">A</div>
                                        <div class="row">B</div>
                                        <div class="row">C</div>
                                    </div>
                                </div><br>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach





    </div>
@endsection
