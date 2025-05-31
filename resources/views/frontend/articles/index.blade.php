@extends('layouts.app')

@section('title') {{ __('Articles') }} @endsection

@section('content')
<section class="News_inner">
    <div class="container">
        <h1 class="textHedding">What we do</h1>
        <div class="row">
            @foreach($articles as $key => $article)
            <div class="col-md-6 {{ $key > 1 ? 'mt-4' : '' }}">
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
        </div>

        <div class="row mt-4">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                {{ $articles->links() }}
            </div>
        </div>
    </div>
</section>
@endsection
