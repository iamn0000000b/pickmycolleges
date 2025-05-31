@extends('layouts.admin')

@section('title') {{ __('Edit Article') }} @endsection

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">{{ __('Articles') }}</h1>
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
                        <h3 class="card-title">{{ __('Edit Article') }}</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.articles.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-angle-double-left"></i>
                            {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ __('Title') }} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $article->title) }}">
                                    </div>

                                    <div class="form-group">
                                      <label>{{ __('Description') }} <span class="text-danger">*</span></label>
                                      <textarea name="description" id="summernote">{{ old('description', $article->description) }}</textarea>
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
                                      @if(!empty($article->image))
                                        <p><img src="{{ $article->image_url }}" alt="" class="img-responsive mt-1"></p>
                                      @endif
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>{{ __('Author') }} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="author" id="author" value="{{ old('author', $article->author) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
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
