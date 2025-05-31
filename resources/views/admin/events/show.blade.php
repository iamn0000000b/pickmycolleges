@extends('layouts.admin')

@section('title') {{ __('View Event') }} @endsection

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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('View Event') }}</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.events.index') }}" class="btn btn-sm btn-primary">
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
                                    <td>{{ $event->title }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Description') }}</th>
                                    <td>{!! $event->description !!}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Image') }}</th>
                                    <td>
                                    @if(!empty($event->image))
                                        <img src="{{ $event->image_url }}" alt="" class="img-responsive">
                                    @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>{{ __('Exam Date') }}</th>
                                    <td>{{ $event->exam_date }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Application Last Date') }}</th>
                                    <td>{{ $event->application_last_date }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Exam Info') }}</th>
                                    <td>{!! $event->exam_info !!}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Exam Dates') }}</th>
                                    <td>{!! $event->exam_dates !!}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Exam Highlight') }}</th>
                                    <td>{!! $event->exam_highlight !!}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Goal') }}</th>
                                    <td>{{ $event->goal->title }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Created Date') }}</th>
                                    <td>{{ $event->created_at }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Updated Date') }}</th>
                                    <td>{{ $event->updated_at }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Action') }}</th>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="{{ route('admin.events.edit', $event->id) }}" title="{{ __('Edit') }}"><i class="fas fa-edit"></i></a>

                                        <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" style="display:inline-block;">
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
