@extends('layouts.main')
@section('title')
    Blog
@endsection
@section('content')
<div class="blog-area full-blog blog-standard full-blog default-padding">
    <div class="container">
        <div class="row">
            <div class="blog-items">
                <div class="blog-content col-md-10 col-md-offset-1">
                    <!-- Single Item -->
                    @foreach($posts as $post)
                    <div class="single-item item">
                        <div class="thumb">
                            <a href="/blog/{{ $post->slug }}"><img src="{{ Voyager::image( $post->image ) }}" alt="{{ $post->title }}"></a>
                            <span class="post-formats"><i class="fas fa-image"></i></span>
                        </div>
                        <div class="info">
                            <h3>
                                <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                            </h3>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> {{ $post->created_at->diffForHumans() }}</li>
                                </ul>
                                <a href="/blog/{{ $post->slug }}">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Pagination -->
                    {{--<div class="row">
                        <div class="col-md-12 pagi-area">
                            <nav aria-label="navigation">
                                <ul class="pagination">
                                    <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
