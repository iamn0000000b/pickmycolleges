@extends('layouts.admin')

@section('title') {{ __('Add Event') }} @endsection

@section('styles')
<!-- select2 -->
<link rel="stylesheet" href="{{ asset('backend/plugins/select2/select2.min.css') }}">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
@endsection

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">{{ __('Events') }}</h1>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Add Event') }}</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.events.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-angle-double-left"></i>
                            {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> {{ __('Goal') }} <span class="text-danger">*</span></label>
                                        <select name="goal_id" id="goal_id" class="form-control select2" style="width:100%;">
                                            <option value="">{{ __('--Select--') }}</option>
                                            @foreach($goals as $id => $goal)
                                                <option value="{{ $id }}" {{ ($id == old('goal_id')) ? 'selected' : '' }}>
                                                    {{ $goal }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('Title') }} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                                    </div>

                                    <div class="form-group">
                                      <label>{{ __('Description') }} <span class="text-danger">*</span></label>
                                      <textarea name="description" id="summernote">{{ old('description') }}</textarea>
                                    </div>

                                    <div class="form-group">
                                      <label>{{ __('Image') }} <span class="text-danger">*</span></label>
                                      <div class="input-group">
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" name="image" id="image">
                                          <label class="custom-file-label" for="image">{{ __('Choose Image') }}</label>
                                        </div>
                                      </div>
                                      <span>(Only jpg, jpeg, gif and png are allowed)</span>
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('Exam Date') }} <span class="text-danger">*</span></label>
                                        <div class="input-group date">
                                            <input type="text" name="exam_date" class="form-control pull-right" id="datepicker" value="{{ old('exam_date') }}" autocomplete="off">
                                            <div class="input-group-text input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('Application Last Date') }} <span class="text-danger">*</span></label>
                                        <div class="input-group date">
                                            <input type="text" name="application_last_date" class="form-control pull-right" id="datepicker2" value="{{ old('application_last_date') }}" autocomplete="off">
                                            <div class="input-group-text input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <ul class="nav nav-pills" style="background-color: #f1f1f1;">
                                            <li class="nav-item"><a class="nav-link active" href="#info" data-toggle="tab">Exam Info</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#dates" data-toggle="tab">Exam Dates</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#highlight" data-toggle="tab">Exam Highlight</a></li>
                                        </ul>
                                        <div class="tab-content mt-1">
                                            <div class="active tab-pane" id="info">
                                                <textarea name="exam_info" id="summernote1">{{ old('exam_info') }}</textarea>
                                            </div>
                                            
                                            <div class="tab-pane" id="dates">
                                                <textarea name="exam_dates" id="summernote2">{{ old('exam_dates') }}</textarea>
                                            </div>

                                            <div class="tab-pane" id="highlight">
                                                <textarea name="exam_highlight" id="summernote3">{{ old('exam_highlight') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection

@section('scripts')
<!-- select2 -->
<script src="{{ asset('backend/plugins/select2/select2.full.min.js') }}"></script>
<!-- bs-custom-file-input -->
<script src="{{ asset('backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('backend/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script>
  $(function () {
    $('.select2').select2();
    
    bsCustomFileInput.init();

    //Date picker
    $('#datepicker, #datepicker2').datepicker({
        autoclose: true,
        todayHighlight: true,
        format:'yyyy-mm-dd'
    });
  });
</script>
@endsection
