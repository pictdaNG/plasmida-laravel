@extends('layouts.main')
@section('title')
    Welcome to Plasmida
@endsection

@section('content')
<div class="banner-area">
    <div id="bootcarousel" class="carousel inc-top-heading slide carousel-fade animate_text" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner text-light carousel-zoom">
            @foreach($sliders as $slider)
                <div class="item @if ($loop->first) active @endif">
                    <div class="slider-thumb bg-fixed">
                        <img src="storage\{{ $slider->image }}" alt="">
                    </div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInRight">{{ $slider->toptext }}</h3>
                                            <h2 data-animation="animated slideInLeft">{{ $slider->midtext }}</h2>
                                            <h5 data-animation="animated slideInUp" class="effect writeup">
                                                {{ $slider->lowtext }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- End Wrapper for slides -->

        <!-- Left and right controls -->
        <a class="left carousel-control shadow" href="#bootcarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control shadow" href="#bootcarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="about-area full-width inc-shadow mt default-padding bottom-less">
    <div class="container">
        <div class="row">
            <!-- Start About -->
            <div class="about-content content-left">

                <!-- Start Skill
                ============================================= -->
                <div class="skill-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 info">
                                <h4>About Us</h4>
                                <p>
                                    The commitment and determination of the Governor to move the state out of economic
                                    stagnation to a
                                    commercial hub of the nation, was demonstrated through the establishment of the
                                    Plateau State
                                    Microfinance Development Agency.
                                </p>
                                <p>
                                    The Agency is strategically positioned, to assist in the human capital development
                                    need of the
                                    existing and would be Micro, Small and Medium Enterprises (MSME’s) operators,
                                    provide linkage
                                    services in terms of access to finance, market information, quality control services
                                    to the MSME’s,
                                    source, initiate and coordinate bilateral or multilateral technical assistance or
                                    partnership
                                    programmes with local and international organizations and foundations.
                                </p>
                                <a href="#" class="btn btn-theme effect btn-md" data-animation="animated slideInUp">Read
                                    More</a>
                            </div>
                            <div class="col-md-6 tab-items">
                                <!-- Tab Nav -->
                                <ul class="nav nav-pills">
                                    <li class="active">
                                        <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                            <span>Our Mission</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                            <span>Our Vision</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                            <span>Core Values</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Tab Nav -->
                                <!-- Start Tab Content -->
                                <div class="tab-content tab-content-info">
                                    <div id="tab1" class="tab-pane fade active in">
                                        <div class="info title">
                                            <p>To develop the capacity of Micro Small and Medium Enterprises in the
                                                State towards wealth creation, and poverty reduction.</p>
                                        </div>
                                    </div>
                                    <div id="tab2" class="tab-pane fade">
                                        <div class="info title">
                                            <p>
                                                To be a world class Agency that is passionate and efficient in the
                                                promotion and development of Micro Small and Medium Enterprises.
                                            </p>
                                        </div>
                                    </div>
                                    <div id="tab3" class="tab-pane fade">
                                        <div class="info title">
                                            <ul>
                                                <li>Team work</li>
                                                <li>Resourcefulness</li>
                                                <li>Integrity</li>
                                                <li>Passion</li>
                                                <li>(T R I P)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Tab Content -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Skill -->
            </div>
            <!-- End About -->

            <!-- Start Our Features -->
            <div class="col-md-12 text-center about-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 single-item">
                        <div class="item">
                            <a href="#">
                                <i class="flaticon-fit"></i>
                                <h5>Coaching and Mentoring</h5>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 single-item">
                        <div class="item">
                            <a href="#">
                                <i class="flaticon-target"></i>
                                <h5>Training</h5>
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- End Single Item -->
                    <div class="col-md-3 col-sm-6 single-item">
                        <div class="item">
                            <a href="#">
                                <i class="flaticon-chart"></i>
                                <h5>Linkages</h5>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 single-item">
                        <div class="item">
                            <a href="#">
                                <i class="flaticon-customer-service"></i>
                                <h5>Consultancy</h5>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
            <!-- End Our Features -->
        </div>
    </div>
</div>

<div class="portfolio-area bg-gray inc-colum default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Gallery</h2>
                </div>
            </div>
        </div>
        <div class="portfolio-items-area text-center">
            <div class="row">
                <div class="col-md-12 portfolio-content">
                    <div class="mix-item-menu text-center" style="display: none">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".development">Development</button>
                        <button data-filter=".consulting">Consulting</button>
                        <button data-filter=".finance">Finance</button>
                        <button data-filter=".branding">Branding</button>
                        <button data-filter=".capital">Capital</button>
                    </div>
                    <!-- End Mixitup Nav-->

                    <div class="row magnific-mix-gallery text-center masonary">
                        <div id="portfolio-grid" class="portfolio-items col-3">
                            <!-- Single Item -->
                            <div class="pf-item development capital">
                                <div class="effect-left-swipe">
                                    <img src="img/page1.jpg" alt="thumb">
                                    <a href="img/page1.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                    <div class="icons">
                                        <h4><a href="#">Startup Funding</a></h4>
                                        <div class="cat">
                                            <span>Finance</span>
                                            <span>Assets</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="pf-item consulting branding">
                                <div class="effect-left-swipe">
                                    <img src="img/page2.jpg" alt="thumb">
                                    <a href="img/page2.jpg" class="item popup-link"><i
                                            class="fa fa-plus"></i></a>
                                    <div class="icons">
                                        <h4><a href="#">Accounting Advisory</a></h4>
                                        <div class="cat">
                                            <span>Creative</span>
                                            <span>Minimal</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="pf-item consulting finance">
                                <div class="effect-left-swipe">
                                    <img src="img/page3.jpg" alt="thumb">
                                    <a href="img/page3.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                    <div class="icons">
                                        <h4><a href="#">Merger & Acquisition</a></h4>
                                        <div class="cat">
                                            <span>Benefits</span>
                                            <span>Business</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="pf-item finance">
                                <div class="effect-left-swipe">
                                    <img src="img/page4.jpg" alt="thumb">
                                    <a href="img/page4.jpg" class="item popup-link"><i
                                            class="fa fa-plus"></i></a>
                                    <div class="icons">
                                        <h4><a href="#">Assets For Technology</a></h4>
                                        <div class="cat">
                                            <span>Invest</span>
                                            <span>Earning</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="pf-item capital development">
                                <div class="effect-left-swipe">
                                    <img src="img/page5.jpg" alt="thumb">
                                    <a href="img/page5.jpg" class="item popup-link"><i
                                            class="fa fa-plus"></i></a>
                                    <div class="icons">
                                        <h4><a href="#">Business Matching</a></h4>
                                        <div class="cat">
                                            <span>Finance</span>
                                            <span>Assets</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="pf-item consulting branding">
                                <div class="effect-left-swipe">
                                    <img src="img/page6.jpg" alt="thumb">
                                    <a href="img/page6.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                    <div class="icons">
                                        <h4><a href="#">Startup Funding</a></h4>
                                        <div class="cat">
                                            <span>Source</span>
                                            <span>Business</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="team-area carousel-shadow default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Our Departments and Leaders</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="team-items team-carousel owl-carousel owl-theme text-center team-standard">
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="img/head1.jpg" alt="Thumb">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Haggai Haruna Gutap</h4>
                            <span>Director General</span>
                            <p>
                                Mennings dashwood to insisted year of trifling quitting marriage bachelor in. On as
                                conviction appearance
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="img/head2.jpg" alt="Thumb">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Bomkam Ali Wuyep</h4>
                            <span>Director Administration & Finance</span>
                            <p>
                                Mennings dashwood to insisted year of trifling quitting marriage bachelor in. On as
                                conviction appearance
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="img/head3.jpg" alt="Thumb">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Kackse Le'an</h4>
                            <span>Ag. Director Micro Small & Medium Enterprises</span>
                            <p>
                                Mennings dashwood to insisted year of trifling quitting marriage bachelor in. On as
                                conviction appearance
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="img/head4.jpg" alt="Thumb">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Nansel Anthony Danboyi</h4>
                            <span>Head ICT & Communications</span>
                            <p>
                                Jennings dashwood to insisted year of trifling quitting marriage bachelor in. On as
                                conviction appearance
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="img/head5.jpg" alt="Thumb">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Victor Diyal </h4>
                            <span>Director Research & Training</span>
                            <p>
                                Aennings dashwood to insisted year of trifling quitting marriage bachelor in. On as
                                conviction appearance
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumb">
                            <img src="img/head6.jpg" alt="Thumb">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Paul Datugun </h4>
                            <span>Director Finance & Supplies</span>
                            <p>
                                Aennings dashwood to insisted year of trifling quitting marriage bachelor in. On as
                                conviction appearance
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumb">
                            <img src="img/head7.jpg" alt="Thumb">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Philip Samme </h4>
                            <span>Director Monitoring & Evaluation</span>
                            <p>
                                Aennings dashwood to insisted year of trifling quitting marriage bachelor in. On as
                                conviction appearance
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumb">
                            <img src="img/head8.jpg" alt="Thumb">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Samson Karami </h4>
                            <span>Director Partnership and Linkages</span>
                            <p>
                                Aennings dashwood to insisted year of trifling quitting marriage bachelor in. On as
                                conviction appearance
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumb">
                            <img src="img/head9.jpg" alt="Thumb">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Kenneth Yilshuut </h4>
                            <span>Secretary of Board & Agency</span>
                            <p>
                                Aennings dashwood to insisted year of trifling quitting marriage bachelor in. On as
                                conviction appearance
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-area bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 mb-4">
                <div class="site-heading text-center">
                    <h2>Latest Blog Posts</h2>
                </div>
            </div>
        </div>
        <div class="row">
        @foreach ($posts as $post)
            @if($loop->iteration == 1)
            <!-- Single Item -->
            <div class="col-md-4 single-item">
                <div class="item">
                    <div class="thumb">
                        <a href="/blog/{{ $post->slug }}"><img src="{{ Voyager::image( $post->image ) }}" alt="{{ $post->title }}"></a>
                        <span class="post-formats"><i class="fas fa-image"></i></span>
                    </div>
                    <div class="info">
                        <h4>
                            <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                        </h4>
                        <div class="meta">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i> {{ $post->created_at->diffForHumans() }}</li>
                            </ul>
                            <a href="/blog/{{ $post->slug }}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            @endif
            @if($loop->iteration == 2)
            <!-- Single Item -->
            <div class="col-md-4 single-item">
                <div class="item">
                    <div class="thumb">
                        <a href="/blog/{{ $post->slug }}"><img src="{{ Voyager::image( $post->image ) }}" alt="{{ $post->title }}"></a>
                        <span class="post-formats"><i class="fas fa-image"></i></span>
                    </div>
                    <div class="info">
                        <h4>
                            <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                        </h4>
                        <div class="meta">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i> {{ $post->created_at->diffForHumans() }}</li>
                            </ul>
                            <a href="/blog/{{ $post->slug }}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            @endif
            @if($loop->iteration == 3)
            <!-- Single Item -->
            <div class="col-md-4 single-item">
                <div class="item">
                    <div class="thumb">
                        <a href="/blog/{{ $post->slug }}"><img src="{{ Voyager::image( $post->image ) }}" alt="{{ $post->title }}"></a>
                        <span class="post-formats"><i class="fas fa-images"></i></span>
                    </div>
                    <div class="info">
                        <h4>
                            <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                        </h4>
                        <div class="meta">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i> {{ $post->created_at->diffForHumans() }}</li>
                            </ul>
                            <a href="/blog/{{ $post->slug }}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            @endif
            @endforeach
        </div>
    </div>
</div>{{--

<div class="clients-area bg-dark default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5 left-info text-light">
                <h4>Our Partners</h4>
                <p>
                    Forming two comfort invited. Yet she income effect edward. Entire desire way design few. Mrs
                    sentiments led solicitude estimating friendship fat. Meant those event
                </p>
            </div>
            <div class="col-md-7 clients-box">
                <div class="clients-items owl-carousel owl-theme text-center">
                    <div class="single-item">
                        <a href="#"><img src="\img\clients\01.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="\img\clients\02.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="\img\clients\03.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="\img\clients\04.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="\img\clients\05.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="\img\clients\06.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="\img\clients\07.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="\img\clients\08.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="\img\clients\01.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="\img\clients\04.png" alt="Clients"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection
