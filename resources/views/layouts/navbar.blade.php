<div class="top-bar-area bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 address-info text-left">
                <div class="info box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info">
                                <span>Address</span>Plot 780, Liberty Boulevard
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope-open"></i>
                            </div>
                            <div class="info">
                                <span>email: </span> plasmida.plagov@gmail.com
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="info">
                                <span>Phone</span> +2349025800090
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 social text-right">
                <ul>
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header id="home">
    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="container">
            <div class="row">
                <div class="top-search">
                    <div class="input-group">
                        <form action="#">
                            <input type="text" name="text" class="form-control" placeholder="Search">
                            <button type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="{{ Voyager::image( setting('site.logo')) }}" class="logo" alt="Logo">
                    <span class="bold text-uppercase">Plasmida</span>
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    {!! menu('main', 'main_menu') !!};
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->

</header>
