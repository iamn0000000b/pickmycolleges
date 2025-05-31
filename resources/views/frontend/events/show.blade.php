@extends('layouts.app')

@section('title') {{ $event->title }} @endsection

@section('content')
<section class="About_inner">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="aboutus_text">
                    <div class="listed">
                        <div class="tab_container">
                            <input id="tab1" class="d-none" type="radio" name="tabs" checked>
                            <label for="tab1" class="code"><span>{{ $event->title }} Exam Info </span></label>

                            <input id="tab2" class="d-none"  type="radio" name="tabs">
                            <label for="tab2" class="code"><span>{{ $event->title }} Exam Dates </span></label>
                
                            <input id="tab3" class="d-none" type="radio" name="tabs">
                            <label for="tab3" class="code"><span>{{ $event->title }} Highlight</span></label>
                
                            <section id="content1" class="tab-content">
                                <div class="gate_text">
                                    {!! $event->exam_info !!}
                                </div>
                            </section>
                
                            <section id="content2" class="tab-content">
                                {!! $event->exam_dates !!}
                            </section>
                            <section id="content3" class="tab-content">
                                {!! $event->exam_highlight !!}
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
