@extends('main_master')

@section('content')
    <section id="responsive-datatable">
        <div class="container" style="margin: 30px 400px">

            <div class="row">
                <div class="col-lg-8 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h5 class="card-title" style="font-weight: bold">Employee Detail</h5>
                        </div>
                        <div class="card-datatable">
                            <table class="table employeeTable dt-responsive table dataTable dtr-column collapsed"
                                id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info">
                                <thead style="background-color: #3E0E40; color:white">
                                    <tr>
                                        <th scope="col"> Employee Name </th>
                                        <th scope="col"> Employee Email </th>
                                        <th scope="col">Employee Address</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>{{ $employee_see->name }}</td>
                                        <td>{{ $employee_see->email }}</td>
                                        <td>{{ $employee_see->address }}</td>
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
