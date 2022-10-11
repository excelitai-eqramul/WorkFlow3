@extends('main_master')


@section('content')

  <section id="responsive-datatable">
    <div class="container">
      <div class="row mt-4">
        <div class="col-lg-8 col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header border-bottom" style="background-color: skyblue">
              <h4 class="card-title">Edit Feature</h4>
            </div>
            <div class="card-datatable">
                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                    <thead style="background-color: #3E0E40; color:white">
                        <tr>
                            <th>Project Name</th>
                            <th>Module Name</th>
                            <th>Feature Name<br>SubFeature Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($features as $feat)
                            <tr>

                                <td>{{ optional($feat->project)->name }}</td>
                                <td>{{ optional($feat->module)->name }}</td>
                                <td>{{ optional($feat->feature_parent)->name }}<br>{{ $feat->name }}</td>

                                <td>
                                    <button type="button" class="btn btn-relief-danger"><a
                                            href="{{ route('edit.feature', $feat->id) }}">
                                            <i class="fa fa-edit"></i></a> </button>

                                            <button type="button" class="btn btn-relief-danger"><a
                                                href="{{ route('delete.feature', $feat->id) }}">
                                                <i class="fa fa-trash"></i></a> </button>
                                </td>
                            <tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
          </div>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Update Feature</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('update.feature') }}" class="form form-vertical">
                    @csrf

                    <input type="hidden" name="feature_id" value="{{ $feature_edit->id }}">


                    <div class="modal-body p-4 bg-light">
                        <div class="row">
                            <div class="my-2">
                                <label for="project_id">Project Name</label>
                                <select name="project_id" class="form-control">
                                    <option selected="">Select a category</option>
                                    @foreach ($projects as $project)
                                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                                    @endforeach
                                </select>
                                {{-- <span id="error_project_id" class="errorColor"></span> --}}
                            </div>


                            <div class="my-2">
                                <label for="module_id">Module Name</label>
                                <select name="module_id" class="form-control">
                                    <option value="" selected="" disabled="">Select Module Name </option>
                                </select>
                            </div>


                            <div class="my-2">
                                <label for="name">Feature Name</label>
                                <input type="text" name="name" value="{{ $feature_edit->name }}" id="name" class="form-control"
                                    placeholder="Feature Name">
                                {{-- <span id="error_name" class="errorColor"></span> --}}
                            </div>


                            <div class="my-2">
                                <label for="name">Parent Name</label>
                                <div class="input-group input-group-merge">
                                    <select class="form-select form-select" id="selectLarge" name="parent_id">
                                        <option disabled>Open this select menu</option>
                                        @foreach ($features as $feature)
                                            <option value=""></option>
                                            <option value="{{ $feature->id }}">
                                                {{ ucwords($feature->name) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="add_feature_btn" class="btn btn-info">Add Feature</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


@endsection







