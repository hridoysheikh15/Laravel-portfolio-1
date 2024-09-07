@extends('layouts.frontend_layout.app')

@section('title', 'WhatIamDo?')

@section('content')

<!-- header section start -->

<div class="header_section header_bg">

    @include('frontend.nav')

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

@endsection