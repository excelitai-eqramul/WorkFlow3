Empppp 420
@extends('main_master')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-progressbar/0.8.5/bootstrap-progressbar.js
">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-progressbar/0.8.5/bootstrap-progressbar.min.js
">







@section('content')
    <section id="responsive-datatable">
        <div class="container">

            @php
                $today = Carbon\Carbon::now();
            @endphp


            <div class="card" style="border: 1px solid black">
                <div class="card-header border-bottom">
                    <h4 class="card-title">{{ $employee->name }}'s all data</h4>
                </div>
                <div class="card-datatable">
                    <table style="border: 1px solid black; text-align:center"
                        class="dt-responsive employeeTable table dataTable dtr-column collapsed" id="DataTables_Table_3"
                        role="grid"aria-describedby="DataTables_Table_3_info">

                        <thead style="background-color: #3E0E40; color:white">
                            <tr>
                                <th>Employee Name</th>
                                <th>Project Name</th>
                                <th>Project ID</th>
                                <th>Department Name</th>
                                <th>Sub-Department Name</th>
                                <th>Task Name</th>
                                <th>Task ID</th>
                                <th>Start Date\DeadLine\End Date</th>
                                <th>Task Progressbar</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $sn = 1;
                            @endphp
                            <td rowspan="100000"
                                style="text-align: center ;border: 1px solid black; font-weight:bold; font-size:19px">
                                {{ $employee->name }}<br>#{{ $employee->id }}

                                <p></p><br>


                                @foreach ($employeeWise_task_show as $employeeWise_task_progress)
                                    @if ($employeeWise_task_progress->progressbar < 100 && $employeeWise_task_progress->end_date > $today)
                                        <div class="form-group row mt-4">
                                            <div class="col-sm-1">
                                                <p class="w3-green" style="height:34px;width:35px; border-radius:100%"></p>
                                            </div>
                                            <label for="inputPassword" class="col-sm-8 col-form-label"
                                                style="margin-left:12px">#{{ $employeeWise_task_progress->id }}</label>
                                        </div>
                                    @elseif($employeeWise_task_progress->progressbar == 100)
                                        <div class="form-group row mt-4">
                                            <div class="col-sm-1">
                                                <p class="w3-blue" style="height:34px;width:35px; border-radius:100%"></p>
                                            </div>
                                            <label for="inputPassword" class="col-sm-8 col-form-label"
                                                style="margin-left:12px">#{{ $employeeWise_task_progress->id }}</label>
                                        </div>
                                    @elseif($employeeWise_task_progress->progressbar < 100 && $employeeWise_task_progress->end_date < $today)
                                        <div class="form-group row mt-4">
                                            <div class="col-sm-1">
                                                <p class="w3-red" style="height:34px;width:35px; border-radius:100%"></p>
                                            </div>
                                            <label for="inputPassword" class="col-sm-8 col-form-label"
                                                style="margin-left:12px">#{{ $employeeWise_task_progress->id }}</label>
                                        </div>
                                    @elseif($employeeWise_task_progress->progressbar == 70)
                                        <div class="form-group row mt-4">
                                            <div class="col-sm-1">
                                                <p class="w3-red" style="height:34px;width:35px; border-radius:100%"></p>
                                            </div>
                                            <label for="inputPassword" class="col-sm-8 col-form-label"
                                                style="margin-left:12px">#{{ $employeeWise_task_progress->id }}</label>
                                        </div>
                                    @endif
                                @endforeach

                            </td>



                            @foreach ($employeeWise_task_show as $employeeWise_task)
                                <tr>

                                    <td><a
                                            href="{{ route('all.project_search', optional($employeeWise_task->project)->id) }}">{{ optional($employeeWise_task->project)->name }}</a>
                                    </td>
                                    <td><a
                                            href="{{ route('all.project_search', optional($employeeWise_task->project)->id) }}">{{ optional($employeeWise_task->project)->id }}</a>
                                    </td>
                                    <td><a
                                            href="{{ route('all.department') }}">{{ optional($employeeWise_task->departmentt)->name }}</a>
                                    </td>
                                    <td><a
                                            href="{{ route('all.department') }}">{{ optional($employeeWise_task->departmentt)->name }}</a>
                                    </td>
                                    <td><a
                                            href="{{ route('all.task_search', $employeeWise_task->id) }}">{{ $employeeWise_task->name }}</a>
                                    </td>
                                    <td><a
                                            href="{{ route('all.task_search', $employeeWise_task->id) }}">{{ $employeeWise_task->id }}</a>
                                    </td>
                                    <td>{{ $employeeWise_task->start_date }}<br>{{ $employeeWise_task->dead_line }}<br>{{ $employeeWise_task->end_date }}
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100"
                                                style="width:{{ $employeeWise_task->progressbar }}%">
                                                {{ $employeeWise_task->progressbar }}%
                                            </div>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $employeeWise_task_show->links() !!}
                    </div>
                </div>
            </div><br><br>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
@endsection
