@extends('layouts.app')

@section('title') {{ $exam->title }} @endsection

@section('content')
<section class="inner_page">
    <div class="container">
        <div class="row">
            <span class="bed_text">{{ $exam->title }} <a href="/" class="home_text">Home</a></span>
        </div>
    </div>
</section>
<section class="legal_box">
    <div class="container">
        <div class="col-md-12">
            <div class="B-Ed_text">
                {!! $exam->description !!}
            </div>
        </div>
    </div>
</section>
@endsection
