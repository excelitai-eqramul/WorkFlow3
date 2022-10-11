@extends('main_master')

@section('content')
    <div class="container">

        <form method="POST" action="{{ route('update.issue', $issue_edit->id) }}" class="form form-vertical" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-4">

                    <div class="mb-1">
                        <label>Company ID</label>
                        <div class="input-group">
                            <select class="form-select form-select" id="selectLarge" name="company_id">
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



                         <select id="project_id" name="project_id" class="form-select">
                            <option value=" ">Select Project Name</option>

                            @foreach ($projects as $project)
                                @if ($project->id == $issue_edit->project_id ? 'selected' : '')
                                    <option value="{{ $project->id }}" selected>{{ $project->name }}</option>
                                @else
                                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                                @endif
                            @endforeach

                        </select>

                            {{-- <select class="form-select form-select" id="selectLarge" name="project_id">
                                <option disabled>Open this select menu</option>
                                @foreach ($projects as $project)
                                    <option value="{{ $project->id }}">
                                        {{ $project->name }}
                                    </option>
                                @endforeach
                            </select> --}}
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
                                    @if ($module->id == $issue_edit->module_id ? 'selected' : '')
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
                <div class="col-md-4 ml-auto">
                    <div class="mb-1">
                        <label for="first-name-icon">Feature Name</label>
                        <div class="input-group">



                            <select id="feature_id" name="feature_id" class="form-select">
                                <option value=" ">Select Module Name</option>


                                @foreach ($features as $feature)
                                    @if ($feature->id == $issue_edit->feature_id ? 'selected' : '')
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
                        <label for="first-name-icon">Task Name</label>
                        <div class="input-group">
                            <select id="feature_id" name="task_id" class="form-select">
                                <option value=" ">Select Task Name</option>

                                @foreach ($tasks as $task)
                                    @if ($task->id == $issue_edit->task_id ? 'selected' : '')
                                        <option value="{{ $task->id }}" selected>{{ $task->name }}</option>
                                    @else
                                        <option value="{{ $task->id }}">{{ $task->name }}</option>
                                    @endif
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
                            <input type="text" id="first-name-icon" class="form-control" name="name"
                                value="{{ $issue_edit->name }}" placeholder="Enter task Name">
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
                                @foreach ($issues as $issue)
                                    <option value="{{ $issue->id }}">
                                        {{ ucwords($issue->name) }}
                                    </option>
                                @endforeach
                            </select>


                            {{-- <select class="form-select form-select" id="selectLarge" name="parent_id">
                                <option disabled>Open this select menu</option>
                                @foreach ($issues as $issue)
                                    <option value=""></option>
                                    <option value="{{ $issue->id }}">
                                        {{ ucwords($issue->name) }}
                                    </option>
                                @endforeach
                            </select> --}}
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
                            <input type="text" id="first-name-icon" class="form-control" name="description"
                                value="{{ $issue_edit->description }}" placeholder="start_date">
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
                            <input type="file" name="image" class="form-control" placeholder="Image">
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
                            <input type="date" id="first-name-icon" class="form-control" name="start_date"
                                value="{{ $issue_edit->start_date }}" placeholder="end_date">
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
                            <input type="date" id="first-name-icon" class="form-control" name="estimate_date"
                                value="{{ $issue_edit->estimate_date }}" placeholder="end_date">
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
                            <input type="date" id="first-name-icon" class="form-control" name="estimate_date"
                                value="{{ $issue_edit->estimate_date }}" placeholder="end_date">
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
                            <input type="time" id="first-name-icon" class="form-control" name="estimate_time"
                                value="{{ $issue_edit->estimate_time }}" placeholder="end_date">
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
                            <input type="text" id="first-name-icon" class="form-control" name="created_by"
                                value="{{ $issue_edit->created_by }}" placeholder="end_date">
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
                            <input type="text" id="first-name-icon" class="form-control" name="updated_by"
                                value="{{ $issue_edit->updated_by }}" placeholder="end_date">
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
                            <input type="text" id="first-name-icon" class="form-control" name="resolved_by"
                                value="{{ $issue_edit->resolved_by }}" placeholder="end_date">
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
                            <input type="text" id="first-name-icon" class="form-control" name="identify_by"
                                value="{{ $issue_edit->identify_by }}" placeholder="end_date">
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
                <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
            </div>
        </form>
    </div>
@endsection
