@extends('layouts.app')

@section('title') {{ $goal->title }} @endsection

@section('content')
<section class="inner_page">
    <div class="container">
        <div class="row">
            {{-- <span class="bed_text">{{ $goal->title }} <a href="/" class="home_text">Home</a></span> --}}
        </div>
    </div>

</section>
<section class="About_inners">
    <div class="container">
        <h1 class="textHedding">{{ $goal->title }}</h1>
        <div class="row mt-3">
            @foreach($goal->events as $key => $event)
            <div class="col-md-4 {{ $key > 2 ? 'mt-4' : '' }}">
                <div class="why_event_box my-0 mx-0">
                    <div class="icon_1">
                        <img src="{{ $event->image_thumb_url }}" class="img-fluid">
                    </div>
                    <h4>{{ $event->title }}</h4>
                    <p class="desc">{{ $event->excerpt }}</p>
                    <div class="smalls">
                        <small>Exam Date <br>{{ \Carbon\Carbon::parse($event->exam_date)->format('M d Y') }}</small>
                        <small>Application Last Date <br>{{ \Carbon\Carbon::parse($event->application_last_date)->format('M d Y') }}</small>
                    </div>
                    <div class="moress_info">
                        <a href="javascript:void(0)" class="rsv_btn">Application Process</a>
                        <a href="{{ route('events.show', $event->slug) }}" class="rsv_btn">More Info</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
