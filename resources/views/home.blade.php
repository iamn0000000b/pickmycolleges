@extends('layouts.app')

@section('title') {{ __('Home') }} @endsection

@section('content')
<!-----------------Banner-Start-------------------------->
<section class="banner">
    <div class="container">
        <div class="row">
            <h1>Select Your Goal</h1>
            <div class="col-md-12">
                <div class="Ugc_Slider">
                    @foreach($goals as $key => $goal)
                    <div>
                        <div class="ugc_box">
                            <div class="icons_student">
                                <span><img src="{{ $goal->image_thumb_url }}" class="img-fluid"></span>
                                <span class="ugc_text">{{ $goal->title }}</span>
                                <div class="ugc_text_box">
                                    {!! $goal->description !!}
                                    <a href="{{ route('goals.show', $goal->slug) }}" class="know_more_btn">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
<!-----------------Banner-End--------------------->

<!-----------------Up-Coming-Start---------------->
<section class="upcoming">
    <div class="container">
        <h1 class="heding">Upcoming Events</h1>
        <div class="row mt-5">

            <div class="col-sm-12">
                <div class="CreativeSlider">
                    @foreach($events as $key => $event)
                    <div>
                        <div class="why_event_box">
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
        </div>
    </div>
    </div>
</section>
<!-------------Up-Coming-End-------------->
<div class="clear"></div>

<!-------------Add-Scetion-Start---------->
<section class="add_section">
    <div class="container">
        <h2 class="heding">Add Items</h2>
        <div class="row">
        </div>
    </div>
</section>
<!-------------Add-Scetion-End------------>

<!-------------News-Section-Start--------->
<section class="news">
    <div class="container">
        <h2 class="heding">Latest News & Articles</h2>
        <div class="row">
            @foreach($articles as $key => $article)
            <div class="col-md-6">
                <div class="row new_box">
                    <div class="col-lg-8 new_text">
                        <h4 class="post_header"><a href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a></h4>
                        <p class="post_desc">{{ $article->excerpt }}</p>
                        <div class="detail_box">
                            <span class="meta_category">{{ $article->author }}</span>
                            <span class="meta_date">{{ \Carbon\Carbon::parse($article->created_at)->format('M d Y') }}</span>
                        </div>                           
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ $article->image_thumb_url }}" class="img-fluid">
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-12">
                <div class="view_update">
                    <a href="{{ route('articles.index') }}">View All Updates</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------News-Section-End------------->

<section class="view_member">
    <div class="container">
        <h2 class="head_white">Upcoming Entrance Exams</h2>

        <div class="row">
            <div class="col-md-12">
                <!-- Tabs navs -->
                <div class="wrapper">

                    <div class="tab-wrapper">
                        <ul class="tabs">
                            @foreach($exam_categories as $key => $exam_category)
                                <li class="tab-link {{ $key == 0 ? 'active' : '' }}" data-tab="{{ $exam_category->id }}">{{ $exam_category->name }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="content-wrapper">
                        @foreach($exam_categories as $key => $exam_category)
                        <div id="tab-{{ $exam_category->id }}" class="tab-content {{ $key == 0 ? 'active' : '' }}">
                            <div class="items">
                                @foreach($exam_category->exams as $key2 => $exam)
                                    <a href="{{ route('exams.show', $exam->slug) }}">{{ $exam->title }}</a>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
                <!-- Tabs content -->
            </div>
        </div>
    </div>
</section>
@endsection
