@extends('layouts.frontend_layout.app')

@section('title', 'MyQuickInfo')

@section('content')

<div class="header_section">
    @include('frontend.nav')
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <section class="slide-wrapper">
            <div class="container-fluid">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="banner_taital_main">
                                            <h3 class="banner_text">Hello Am <br>Hridoy</h3>
                                            <h1 class="banner_taital">Full Stack Developer</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="social_icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/mahmudasad.ridoy"
                                                        target="_blank"><i class="fa fa-facebook"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://github.com/hridoysheikh15" target="_blank"><i
                                                            class="fa fa-github" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.linkedin.com/in/hridoy-sheikh-12ab79269/"
                                                        target="_blank"><i class="fa fa-linkedin"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="banner_taital_main">
                                            <h3 class="banner_text">Hello Am <br>Hridoy</h3>
                                            <h1 class="banner_taital">Full Stack Developer</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="social_icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/mahmudasad.ridoy"
                                                        target="_blank"><i class="fa fa-facebook"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://github.com/hridoysheikh15" target="_blank"><i
                                                            class="fa fa-github" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.linkedin.com/in/hridoy-sheikh-12ab79269/"
                                                        target="_blank"><i class="fa fa-linkedin"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="banner_taital_main">
                                            <h3 class="banner_text">Hello Am <br>Hridoy</h3>
                                            <h1 class="banner_taital">Full Stack Developer</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="social_icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/mahmudasad.ridoy"
                                                        target="_blank"><i class="fa fa-facebook"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://github.com/hridoysheikh15" target="_blank"><i
                                                            class="fa fa-github" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.linkedin.com/in/hridoy-sheikh-12ab79269/"
                                                        target="_blank"><i class="fa fa-linkedin"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="banner_taital_main">
                                            <h3 class="banner_text">Hello Am <br>Hridoy</h3>
                                            <h1 class="banner_taital">Full Stack Developer</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="social_icon">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="video_bt">
                <div class="play_icon"><img src="{{ asset('asset/images/falling.gif') }}" loading="lazy"></div>
            </div>
        </div>
    </div>
    <!-- banner section end -->
</div>
<!-- header section end -->

<!-- services section start -->
<div class="services_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="services_taital">My <span class="portfolio_taital_1">Services</span></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="services_section_2">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="box_main ">
                        <div class="app_icon"><img src="{{ asset('asset/images/icon-2.png') }}" loading="lazy"></div>
                        <div class="app_icon_1"><img src="{{ asset('asset/images/icon-6.png') }}" loading="lazy"></div>
                        <h4 class="services_text">Web & App Design</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box_main ">
                        <div class="app_icon"><img src="{{ asset('asset/images/icon-3.png') }}" loading="lazy"></div>
                        <div class="app_icon_1"><img src="{{ asset('asset/images/icon-7.png') }}" loading="lazy"></div>
                        <h4 class="services_text">FrontEnd Development</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box_main ">
                        <div class="app_icon"><img src="{{ asset('asset/images/icon-1.png') }}" loading="lazy"></div>
                        <div class="app_icon_1"><img src="{{ asset('asset/images/icon-1.png') }}" loading="lazy"></div>
                        <h4 class="services_text">Technical Support</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box_main ">
                        <div class="app_icon"><img src="{{ asset('asset/images/icon-4.png') }}" loading="lazy"></div>
                        <div class="app_icon_1"><img src="{{ asset('asset/images/icon-8.png') }}" loading="lazy"></div>
                        <h4 class="services_text">Laravel Development</h4>
                    </div>
                </div>
            </div>
            <div class="readmore_bt"><a href="#">Read More</a></div>
        </div>
    </div>
</div>
<!-- services section end -->

<!-- portfolio section start -->
<div class="portfolio_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="portfolio_taital">My <span class="portfolio_taital_1">Portfolio</span></h1>
            </div>
        </div>
        <div class="portfolio_section">
            <div class="portfolio_section_2">
                <div class="row">
                    <div class="col-md-8">
                        <div class="container_main">
                            <img src="{{ asset('asset/images/img-1.png') }}" alt="" class="image" loading="lazy">
                            <div class="overlay">
                                <div class="text">
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">See More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="container_main">
                            <img src="{{ asset('asset/images/img-2.png') }}" alt="" class="image" loading="lazy">
                            <div class="overlay">
                                <div class="text">
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">See More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio_section_2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="container_main">
                            <img src="{{ asset('asset/images/img-3.png') }}" alt="" class="image" loading="lazy">
                            <div class="overlay">
                                <div class="text">
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">See More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="container_main">
                            <img src="{{ asset('asset/images/img-4.png') }}" alt="" class="image" loading="lazy">
                            <div class="overlay">
                                <div class="text">
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">See More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="container_main">
                            <img src="{{ asset('asset/images/img-5.png') }}" alt="" class="image" loading="lazy">
                            <div class="overlay">
                                <div class="text">
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">See More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="seemore_bt"><a href="#">See More</a></div>
    </div>
</div>
<!-- portfolio section end -->

<!-- blog section start -->
<div class="blog_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="blog_taital">My <span class="blog_taital_1">Blog</span></h1>
                <p class="blog_text">upidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                    laborum."</p>
            </div>
        </div>
    </div>
    <div class="blog_section_2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="blog_box">
                        <a href="#" class="blog_box_3">
                            <div class="blog_img_3">
                                <h4 class="date_text">Jun 05</h4>
                                <h4 class="prep_text">Veniam, quis nostrud </h4>
                            </div>
                            <p class="lorem_text">elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <a href="#" class="blog_box_3">
                            <div class="blog_img_2">
                                <h4 class="date_text">Jun 05</h4>
                                <h4 class="prep_text">Veniam, quis nostrud </h4>
                            </div>
                            <p class="lorem_text">elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <a href="#" class="blog_box_3">
                            <div class="blog_img">
                                <h4 class="date_text">Jun 05</h4>
                                <h4 class="prep_text">Veniam, quis nostrud </h4>
                            </div>
                            <p class="lorem_text">elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="readmore_bt_1"><a href="#">Read More</a></div>
        </div>
    </div>
</div>
<!-- blog section end -->

<!-- contact section start -->
<div class="contact_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="contact_taital">My <span class="contact_taital_1">Contact</span></h1>
            </div>
        </div>
        <div class="contact_section_2">
            <div class="row">
                <div class="col-md-12">
                    <div class="mail_section_1">
                        <input type="text" class="mail_text" placeholder="Your Name" name="Your Name" required>
                        <input type="text" class="mail_text" placeholder="Your Email" name="Your Email" required>
                        <input type="text" class="mail_text" placeholder="Your Phone" name="Your Phone">
                        <textarea class="massage-bt" placeholder="Your Massage" rows="5" id="comment"
                            name="Your Massage"></textarea>
                        <div class="send_bt"><a href="#">Send Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact section end -->

<!-- project box section start -->
<div class="project_box">
    <div class="container">
        <div class="project_main">
            <h1 class="hire_text">Hire me for your projects</h1>
            <div class="callnow_bt"><a href="https://www.freelancer.com/u/ridoysheikh15?sb=t">Hit Now</a></div>
        </div>
    </div>
</div>
<!-- project box section end -->

@endsection