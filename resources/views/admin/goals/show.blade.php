@extends('layouts.admin')

@section('title') {{ __('View Goal') }} @endsection

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">{{ __('Goals') }}</h1>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('View Goal') }}</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.goals.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-angle-double-left"></i>
                            {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>{{ __('Title') }}</th>
                                    <td>{{ $goal->title }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Description') }}</th>
                                    <td>{!! $goal->description !!}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Image') }}</th>
                                    <td>
                                    @if(!empty($goal->image))
                                        <img src="{{ $goal->image_url }}" alt="" class="img-responsive">
                                    @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>{{ __('Created Date') }}</th>
                                    <td>{{ $goal->created_at }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Updated Date') }}</th>
                                    <td>{{ $goal->updated_at }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Action') }}</th>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="{{ route('admin.goals.edit', $goal->id) }}" title="{{ __('Edit') }}"><i class="fas fa-edit"></i></a>

                                        <form action="{{ route('admin.goals.destroy', $goal->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger delete-confirmation" title="{{ __('Delete') }}"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
