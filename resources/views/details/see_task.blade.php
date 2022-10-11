@extends('main_master')

@section('content')
    <section id="responsive-datatable">
        <div class="container" style="margin: 30px 400px">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h5 class="card-title" style="font-weight: bold">Task Detail</h5>
                        </div>
                        <div class="card-datatable">
                            <table class="table employeeTable dt-responsive table dataTable dtr-column collapsed"
                                id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info" style="text-align: center">
                                <thead style="background-color: #3E0E40; color:white">
                                    <tr>
                                        <th scope="col"> Task Name </th>
                                        <th scope="col"> Start Date </th>
                                        <th scope="col">Deadline</th>
                                        <th scope="col"> End Date </th>
                                        <th scope="col"> Progressbar </th>
                                        <th scope="col">Status</th>
                                        <th scope="col"> Type </th>
                                        <th scope="col"> Priority </th>
                                        <th scope="col">Work Duration</th>
                                        <th scope="col">Working Time</th>
                                        <th scope="col">Tag</th>
                                        <th scope="col">Image</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>{{ $task_see->name }}</td>
                                        <td>{{ $task_see->start_date }}</td>
                                        <td>{{ $task_see->dead_line }}</td>
                                        <td>{{ $task_see->end_date }}</td>
                                        <td>{{ $task_see->progressbar }}</td>
                                        <td>{{ $task_see->status }}</td>
                                        <td>{{ $task_see->type }}</td>
                                        <td>{{ $task_see->priority }}</td>
                                        <td>{{ $task_see->work_duration }}</td>
                                        <td>{{ $task_see->working_time }}</td>
                                        <td>{{ $task_see->tag }}</td>
                                        <td><img src="{{ asset($task_see->image) }}" alt=""
                                            style="height:55px; width:80px"></td>

                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <br><br>







                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
@endsection
