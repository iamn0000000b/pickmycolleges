@extends('layouts.app')

@section('title') {{ $article->title }} @endsection

@section('content')
<section class="inner_page">
    <div class="container">
        <div class="row">
            <span class="bed_text">{{ $article->title }}</span>
        </div>
    </div>
</section>
<section class="legal_box">
    <div class="container">
        <div class="col-md-12">
            <div class="B-Ed_text">
                {!! $article->description !!}
            </div>
        </div>
    </div>
</section>
@endsection
