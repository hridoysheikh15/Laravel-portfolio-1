@extends('layouts.frontend_layout.app')

@section('title', 'MyLife')

@section('content')

<!-- header section start -->

<div class="header_section header_bg">

    @include('frontend.nav')

</div>

<!-- header section end -->

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
    <div class="blog_section_2 pt-4">
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

@endsection