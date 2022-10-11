@extends('main_master')

@section('content')
    <style>
        .btn-sm {
            font-size: 13px;
        }

        label {
            font-weight: bold;
        }
    </style>



    <section id="responsive-datatable">
        <div class="container">
            <div class="card" style="padding: 12px">
                <form method="POST" action="{{ route('update.task', $task_edit->id) }}" class="form form-vertical"
                    enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="old_img" value="{{ $task_edit->image }}">

                    <div class="row">

                        <div class="col-md-4">
                            <div class="mb-1">
                                <label>Employer ID</label>
                                <div class="input-group">
                                    <select id="employee_id" name="employee_id" class="form-select">
                                        <option value=" ">Select Department Name</option>
                                        @foreach ($employees as $emp)
                                            @if ($emp->id == $task_edit->employee_id ? 'selected' : '')
                                                <option value="{{ $emp->id }}" selected>{{ $emp->name }}</option>
                                            @else
                                                <option value="{{ $emp->id }}">{{ $emp->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-4">
                            <div class="mb-1">
                                <label>Project Name</label>
                                <div class="input-group">
                                    <select id="project_id" name="project_id" class="form-select">
                                        <option value=" ">Select Project Name</option>

                                        @foreach ($projects as $project)
                                            @if ($project->id == $task_edit->project_id ? 'selected' : '')
                                                <option value="{{ $project->id }}" selected>{{ $project->name }}</option>
                                            @else
                                                <option value="{{ $project->id }}">{{ $project->name }}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>





                        <div class="col-md-4">
                            <div class="mb-1">
                                <label>Module Name</label>
                                <div class="input-group">
                                    <select id="module_id" name="module_id" class="form-select">
                                        <option value=" ">Select Module Name</option>


                                        @foreach ($modules as $module)
                                            @if ($module->id == $task_edit->module_id ? 'selected' : '')
                                                <option value="{{ $module->id }}" selected>{{ $module->name }}</option>
                                            @else
                                                <option value="{{ $module->id }}">{{ $module->name }}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="row">



                        <div class="col-md-4">
                            <div class="mb-1">
                                <label>Feature Name</label>
                                <div class="input-group">
                                    <select id="feature_id" name="feature_id" class="form-select">
                                        <option value=" ">Select Module Name</option>


                                        @foreach ($features as $feature)
                                            @if ($feature->id == $task_edit->feature_id ? 'selected' : '')
                                                <option value="{{ $feature->id }}" selected>{{ $feature->name }}</option>
                                            @else
                                                <option value="{{ $feature->id }}">{{ $feature->name }}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-4">
                            <div class="mb-1">
                                <label>Department</label>
                                <div class="input-group">
                                    <select id="department_id" name="department_id" class="form-select">
                                        <option value=" ">Select Module Name</option>


                                        @foreach ($departments as $department)
                                            @if ($department->id == $task_edit->department_id ? 'selected' : '')
                                                <option value="{{ $department->id }}" selected>{{ $department->name }}
                                                </option>
                                            @else
                                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-4 ml-auto">
                            <div class="mb-1">
                                <label for="first-name-icon">Task
                                    Name</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" class="form-control" value="{{ $task_edit->name }}"
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
                                    <select class="form-select form-select" id="selectLarge" name="parent_id">
                                        <option disabled>Open this select menu</option>
                                        <option value=""></option>
                                        @foreach ($tasks as $task)
                                            <option value="{{ $task->id }}" selected>
                                                {{ ucwords($task->name) }}
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
                                <label for="first-name-icon">start_date</label>
                                <div class="input-group input-group-merge">
                                    <input type="date" id="first-name-icon" class="form-control"
                                        value="{{ $task_edit->start_date }}" name="start_date" placeholder="start_date">
                                </div>
                                @error('cat_name_bn')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4 ml-auto">
                            <div class="mb-1">
                                <label for="first-name-icon">dead_line</label>
                                <div class="input-group input-group-merge">
                                    <input type="date" id="first-name-icon" class="form-control"
                                        value="{{ $task_edit->dead_line }}" name="dead_line" placeholder="dead_line">
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
                                <label for="first-name-icon">end_date</label>
                                <div class="input-group input-group-merge">
                                    <input type="date" id="first-name-icon" class="form-control"
                                        value="{{ $task_edit->end_date }}" name="end_date" placeholder="end_date">
                                </div>
                                @error('cat_name_bn')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>




                        <div class="col-md-4">
                            <div class="mb-1">
                                <label>progressbar</label>
                                <div class="input-group">
                                    <select id="progressbar" value="{{ $task_edit->progressbar }}" name="progressbar"
                                        class="form-select">
                                        <option>{{ $task_edit->progressbar }}</option>
                                        <option value="30">30% done</option>
                                        <option value="50">50% done</option>
                                        <option value="70">70% done</option>
                                        <option value="100">100% done</option>

                                    </select>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-4">
                            <div class="mb-1">
                                <label>Task Status</label>
                                <div class="input-group">
                                    <select id="status" value="{{ $task_edit->status }}" name="status"
                                        class="form-select">
                                        <option>{{ $task_edit->status }}</option>
                                        <option value="In Progress">In Progress</option>
                                        <option value="Completed">Completed</option>
                                        <option value="Deadline Over">Deadline Over</option>
                                        <option value="Closed">Closed</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">



                        <div class="col-md-4">
                            <div class="mb-1">
                                <label>Task Type</label>
                                <div class="input-group">
                                    <select id="type" value="{{ $task_edit->type }}" name="type"
                                        class="form-select">
                                        <option>{{ $task_edit->type }}</option>
                                        <option value="Complex">Complex</option>
                                        <option value="Simple">Simple</option>
                                        <option value="Compound">Compound</option>
                                    </select>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-4">
                            <div class="mb-1">
                                <label>Task Priority</label>
                                <div class="input-group">
                                    <select id="priority" value="{{ $task_edit->priority }}" name="priority"
                                        class="form-select">
                                        <option>{{ $task_edit->priority }}</option>
                                        <option value="Complex">Complex</option>
                                        <option value="Simple">Simple</option>
                                        <option value="Compound">Compound</option>
                                    </select>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-4">
                            <div class="mb-1">
                                <label>Task Dependency</label>
                                <div class="input-group">
                                    <select class="form-select form-select" id="selectLarge" name="task_dependency">
                                        <option disabled>Open this select menu</option>

                                        @foreach ($tasks as $task)
                                            <option value="{{ $task->id }}">
                                                {{ $task->task_dependency }}</option>
                                            <option value="{{ $task->id }}">
                                                {{ ucwords($task->name) }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label>Dependency Range</label>
                                <div class="input-group">
                                    <select class="form-select form-select" id="selectLarge" name="dependencyRange_id">
                                        <option disabled>Open this select menu</option>


                                        @foreach ($dependency_range as $dependency_ranges)
                                            @if ($dependency_ranges->id == $task_edit->dependencyRange_id ? 'selected' : '')
                                                <option value="{{ $dependency_ranges->id }}" selected>
                                                    {{ $dependency_ranges->range }}</option>
                                            @else
                                                <option value="{{ $dependency_ranges->id }}">
                                                    {{ $dependency_ranges->range }}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-4 ml-auto">
                            <div class="mb-1">
                                <label for="first-name-icon">Work
                                    Duration</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="first-name-icon" class="form-control"
                                        value="{{ $task_edit->work_duration }}" name="work_duration"
                                        placeholder="Enter work duration">
                                </div>
                                @error('cat_name_bn')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>



                        <div class="col-md-4 ml-auto">
                            <div class="mb-1">
                                <label for="first-name-icon">Working
                                    Time</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="first-name-icon" class="form-control"
                                        value="{{ $task_edit->working_time }}" name="working_time"
                                        placeholder="Enter work time">
                                </div>
                                @error('cat_name_bn')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <strong>Image:</strong>
                                <input type="file" name="image" class="form-control" placeholder="image">
                                <img src="uploads/task/{{ $task_edit->image }}" width="300px">
                            </div>
                        </div>


                        <div class="col-md-4 mt-20">
                            <div class="mb-1">
                                <div class="form-check" style="margin-top: 30px">
                                    <input class="form-check-input" value="{{ $task_edit->tag }}" type="checkbox"
                                        value="Ticket" name="tag" id="flexCheckDefault">
                                    <strong>Ticket</strong>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 mt-3">
                        <button type="submit"
                            class="btn btn-primary me-1 waves-effect waves-float waves-light">Update</button>
                    </div>
                </form>
            </div>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
@endsection
