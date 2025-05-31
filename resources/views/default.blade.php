@extends('layouts.app')

@section('title') {{ $page->title }} @endsection

@section('content')
<section class="inner_page">
    <div class="container">
        <div class="row">
            <span class="bed_text">{{ $page->title }}</span>
        </div>
    </div>
</section>
<section class="legal_box">
    <div class="container">
        <div class="col-md-12">
            <div class="B-Ed_text">
                {!! $page->content !!}
            </div>
        </div>
    </div>
</section>
@endsection
