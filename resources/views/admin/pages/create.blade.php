@extends('layouts.admin')

@section('title') {{ __('Add Page') }} @endsection

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">{{ __('Pages') }}</h1>
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
                        <h3 class="card-title">{{ __('Add Page') }}</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.pages.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-angle-double-left"></i>
                            {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <form action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ __('Title') }} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                                    </div>

                                    <div class="form-group">
                                      <label>{{ __('Content') }} <span class="text-danger">*</span></label>
                                      <textarea name="content" id="summernote">{{ old('content') }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('Meta Description') }}</label>
                                        <textarea class="form-control" name="meta_description" id="meta_description" rows="2">{{ old('meta_description') }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('Meta Keywords') }}</label>
                                        <textarea class="form-control" name="meta_keywords" id="meta_keywords" rows="2">{{ old('meta_keywords') }}</textarea>
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
<!-- bs-custom-file-input -->
<script src="{{ asset('backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
  $(function () {
    bsCustomFileInput.init();
  });
</script>
@endsection
