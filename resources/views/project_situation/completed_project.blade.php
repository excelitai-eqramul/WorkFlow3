@extends('main_master')


@section('content')
    <div class="row row-cols-1 row-cols-md-3" style="margin-left: 240px">


        @foreach ($projects as $all_projects)
            @php

                $today_check_in = Carbon\Carbon::parse($all_projects->start_date);
                $check_out = Carbon\Carbon::parse($all_projects->deadline);
                $duration = $today_check_in->diff($check_out);
                // dd($duration);


                $percentage = (optional($all_projects)->progressbar_sum_percentage) / optional($all_projects)->pcount;

                @endphp





@if ($percentage==100)



<div class="col mb-4">
    <div class="card h-500">
        <div class="card-body">
            <h5 style="text-align: center; font-weight:bold; margin-bottom:20px">{{ $all_projects->name }}</h5>

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col" style="font-weight: bold">Category:</div>
                        <div class="col">{{ $all_projects->category }}</div>
                    </div><br>

                    <div class="row">
                        <div class="col" style="font-weight: bold">Time:</div>

                    </div><br>



                    @foreach ($all_projects->estimate_date as $e_date)
                        <div class="row">
                            <div class="col">Project's Time:</div>
                            <div class="col">
                                <div class="row">{{ optional($e_date)->start_date }}</div>
                                <div class="row">{{ optional($e_date)->deadline }}</div>


                            </div>
                        </div><br>
                    @endforeach

                    <div class="row">
                        <div class="col" style="font-weight: bold">Project Budget:</div>
                        <div class="col">{{ $all_projects->budget }}</div>
                    </div><br>

                    <div class="row">
                        <div class="col">Re Budget:</div>
                        <div class="col">d</div>
                    </div><br>


                    <div class="row">
                        <div class="col">Re Budget:</div>
                        <div class="col">d</div>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col" style="font-weight: bold">Task:</div>
                        <div class="col">

                            <div class="row">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100"
                                        style="width:{{$percentage}}%">{{round($percentage)}}%
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
                                        $belowShow_spend_date_with_percentage = $spend_date_with_percentage;
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
                                            style="width:{{ $spend_date_with_percentage }}%">
                                            {{ $spend_date_with_percentage }}%
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                    <p>{{ $belowShow_spend_date_with_percentage }}</p>
                                </div><br>
                            @endforeach
                        </div>
                    </div><br>


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


@endif

        @endforeach


    </div>
@endsection
