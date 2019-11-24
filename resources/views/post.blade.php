@extends('layouts.main')
@section('title')
    {{ $post->title }}
@endsection

@section('content')
<div class="blog-area single full-blog full-blog default-padding">
    <div class="container">
        <div class="row">
            <div class="blog-items">
                <div class="blog-content col-md-10 col-md-offset-1">
                    <div class="item">

                        <!-- Start Post Thumb -->
                        <div class="thumb">
                            <img src="{{ Voyager::image( $post->image ) }}" alt="{{ $post->title }}">
                            <span class="post-formats"><i class="fas fa-image"></i></span>
                        </div>
                        <!-- Start Post Thumb -->

                        <div class="info content-box">
                            <div class="meta">
                                <div class="date">
                                    <i class="fas fa-calendar-alt"></i> {{ $post->created_at->diffForHumans() }}
                                </div>
                            </div>

                            <h3>{{ $post->title }}  </h3>
                            {!! $post->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
