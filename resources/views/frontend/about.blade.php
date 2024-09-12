@extends('layouts.frontend_layout.app')

@section('title', "Let'sExploreSomething")

@section('content')

<link rel="stylesheet" href="{{ asset('asset/css/about-page.css') }}">

<div class="header_section header_bg">

    @include('frontend.nav')

</div>
<!-- main content section  -->
<main>
    <div class="about-header" style="background-image: url({{ asset('asset/images/pxfuel.jpg') }});">
        <div class="container center-align">
            <div class="fs-1">Hridoy Sheikh</div>
            <div class="h1">I’m a Creative Designer</div>
            <div class="fs-6">
                I possess a wide range of abilities that combine innovative art & design principles. Furthermore, my
                expert
                knowledge of <strong> HTML, CSS, JavaScript, React-JS, PHP, Jquery, Laravel and MySQL </strong> will
                allow me to play a crucial role in Web
                Design.
            </div>
            <a class="btn btn-cv" href="#">
                Download CV
            </a>
        </div>
    </div>
    <!-- About Section/personal information -->
    <section class="my-info py-2 py-md-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('asset/images/myPic.jpeg') }}" alt="My Pic" loading="lazy">
                </div>
                <div class="col-md-6">
                    <div class="my-basic-info">
                        <p class="about-color h1 m-0">
                            About Us
                        </p>
                        <p class="fs-4 mx-0">
                            I'm Hridoy Sheikh and Freelancer
                        </p>
                        <p class="font-lato m-0">
                            In This internship i learn basics of Laravel and complete some small projects. With the help
                            of this
                            internship my knowledge about software development increses.
                        </p>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-6">
                                <p class="mx-0">
                                    <span class="info-bold">Birthday: </span>31 May, 2003
                                </p>
                                <p class="mx-0">
                                    <span class="info-bold">City: </span>Khulna
                                </p>
                                <p class="mx-0">
                                    <span class="info-bold">Study: </span>Gopalgonj Polytechnic Institute
                                </p>
                                <p class="mx-0">
                                    <span class="info-bold">Email: </span><span class="text-lowercase">ridoysheikh15@gmail.com</span>
                                </p>
                                <p class="mx-0">
                                    <span class="info-bold">Phone: </span>01797-459533
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6">
                                <p class="mx-0">
                                    <span class="info-bold">Age: </span><span id="my_age">21</span>
                                </p>
                                <p class="mx-0">
                                    <span class="info-bold">hobby: </span>Khulna
                                </p>
                                <p class="mx-0">
                                    <span class="info-bold">degree: </span>Gopalgonj Polytechnic Institute
                                </p>
                                <p class="mx-0">
                                    <span class="info-bold">website: </span>rido.ezyro.com (Dead)
                                </p>
                            </div>
                            <div class="col-12">
                                <a class="btn btn-cv" href="https://www.freelancer.com/u/ridoysheikh15">
                                    Hire me
                                </a>
                                <a class="btn btn-cv" href="#" download>
                                    Download cv
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-info row">
                <div class="more-edu-info col-md-4">
                    <div class="education-info">
                        <p class="about-color h2 mx-0">
                            education
                        </p>
                        <p class="font-lato mx-0"><span class="info-bold d-block">TBA</span>B.Sc in CSE</p>
                        <p class="font-lato mx-0"><span class="info-bold d-block">Gopalgonj Polytechnic Institute</span>diploma in CSE</p>
                        <p class="font-lato mx-0"><span class="info-bold d-block">KDA Collage</span>S.S.C</p>
                    </div>
                    <div class="experience-info">
                        <p class="about-color h2 mx-0">
                            experience
                        </p>
                        <p class="font-lato mx-0"><span class="info-bold d-block">Freelance</span>Laravel</p>
                        <p class="font-lato mx-0"><span class="info-bold d-block">USSBD</span>Front-End Devoloper</p>
                        <p class="font-lato mx-0"><span class="info-bold d-block">USSBD</span>UI/UX</p>
                    </div>
                </div>
                <div class="skill-info col-md-8">
                    <p class="about-color h2 mx-0">
                        My skill
                    </p>
                    <div class="skill-item">
                        <div class="languese-skill">
                            <div class="skills">
                                <p class="info-bold">html</p>
                                <p>95%</p>
                            </div>
                            <div class="skillbar">
                                <div class="skill-number html-number">

                                </div>
                            </div>
                        </div>
                        <div class="languese-skill">
                            <div class="skills">
                                <p class="info-bold">css</p>
                                <p>90%</p>
                            </div>
                            <div class="skillbar">
                                <div class="skill-number css-number">

                                </div>
                            </div>
                        </div>
                        <div class="languese-skill">
                            <div class="skills">
                                <p class="info-bold">JavaScript</p>
                                <p>80%</p>
                            </div>
                            <div class="skillbar">
                                <div class="skill-number js-number">

                                </div>
                            </div>
                        </div>
                        <div class="languese-skill">
                            <div class="skills">
                                <p class="info-bold">ReactJS</p>
                                <p>25%</p>
                            </div>
                            <div class="skillbar">
                                <div class="skill-number react-number">

                                </div>
                            </div>
                        </div>
                        <div class="languese-skill">
                            <div class="skills">
                                <p class="info-bold">Jquery</p>
                                <p>70%</p>
                            </div>
                            <div class="skillbar">
                                <div class="skill-number jquery-number">

                                </div>
                            </div>
                        </div>
                        <div class="languese-skill">
                            <div class="skills">
                                <p class="info-bold">PHP</p>
                                <p>50%</p>
                            </div>
                            <div class="skillbar">
                                <div class="skill-number php-number">

                                </div>
                            </div>
                        </div>
                        <div class="languese-skill">
                            <div class="skills">
                                <p class="info-bold">Laravel</p>
                                <p>45%</p>
                            </div>
                            <div class="skillbar">
                                <div class="skill-number laravel-number">

                                </div>
                            </div>
                        </div>
                        <div class="languese-skill">
                            <div class="skills">
                                <p class="info-bold">MySQL</p>
                                <p>85%</p>
                            </div>
                            <div class="skillbar">
                                <div class="skill-number mysql-number">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hire section  -->
    <section class="drop-cv">
        <div class="hire-section">
            <p class="h1">
                I Am Available For Freelancing.
            </p>
            <p>
                We provide high standar clean website for your business solutions
            </p>
            <a class="btn btn-cv bg-hover" href="https://www.freelancer.com/u/ridoysheikh15">
                Hire me
            </a>
        </div>
    </section>
    <!-- service section  -->
    {{-- <section class="service" id="service">
        <div class="container">
            <p class="about-color h2">
                our service
            </p>
            <p class="font-lato">
                We provide high standar clean website for your business solution.
            </p>
            <div class="service-item">
                <div class="item-line-1">
                    <div class="item-graphic my-service-item">
                        <p><i class="bi bi-brush-fill display-6"></i></p>
                        <p>Graphic Design</p>
                        <p class="font-lato">There are many variations of passages of but the majority have suffered
                            alteration in
                            some form.</p>
                    </div>
                    <div class="item-web-dev my-service-item">
                        <p><i class="bi bi-code-slash display-6"></i></p>
                        <p>Web development</p>
                        <p class="font-lato">There are many variations of passages of but the majority have suffered
                            alteration in
                            some form.</p>
                    </div>
                    <div class="item-media my-service-item">
                        <p><i class="bi bi-volume-up-fill display-6"></i></p>
                        <p>media Marketing</p>
                        <p class="font-lato">There are many variations of passages of but the majority have suffered
                            alteration in
                            some form.</p>
                    </div>
                </div>
                <div class="item-line-2">
                    <div class="item-web-deg my-service-item">
                        <p><i class="bi bi-display display-6"></i></p>
                        <p>Web Design</p>
                        <p class="font-lato">There are many variations of passages of but the majority have suffered
                            alteration in
                            some form.</p>
                    </div>
                    <div class="item-motion my-service-item">
                        <p><i class="bi bi-film display-6"></i></p>
                        <p>Motion Graphic</p>
                        <p class="font-lato">There are many variations of passages of but the majority have suffered
                            alteration in
                            some form.</p>
                    </div>
                    <div class="item-apps my-service-item">
                        <p><i class="bi bi-phone display-6"></i></p>
                        <p>Mobile App</p>
                        <p class="font-lato">There are many variations of passages of but the majority have suffered
                            alteration in
                            some form.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- clint review's  -->
    {{-- <section class="clint-review" id="blog">
        <div class="container">
            <div class="clint-1 clint-comment">
                <p><i class="bi bi-quote display-6"></i></p>
                <p>
                    <q>
                        Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad
                        minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </q>
                </p>
                <div class="clint-details">
                    <div class="clint-img">
                        <img src="./image/myPic.jpeg" alt="jone doel">
                    </div>
                    <div class="clint-info text-capitalize">
                        <p>jone doel</p>
                        <p>ABC company</p>
                    </div>
                </div>
            </div>
            <div class="clint-2 clint-comment">
                <p><i class="bi bi-quote display-6"></i></p>
                <p>
                    <q>
                        Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad
                        minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </q>
                </p>
                <div class="clint-details">
                    <div class="clint-img">
                        <img src="./image/myPic.jpeg" alt="jone doel">
                    </div>
                    <div class="clint-info text-capitalize">
                        <p>Cristofer Rolan</p>
                        <p>stact overflow</p>
                    </div>
                </div>
            </div>
            <!-- <div class="clint-3 clint-comment">
          <p><i class="bi bi-quote display-6"></i></p>
          <p>
            <q>
              Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </q>
          </p>
          <div class="clint-details">
            <div class="clint-img">
              <img src="./image/myPic.jpeg" alt="jone doel">
            </div>
            <div class="clint-info text-capitalize">
              <p>jone doel</p>
              <p>ABC company</p>
            </div>
          </div>
        </div> -->
        </div>
    </section> --}}
    <!-- work details -->
    {{-- <section class="work-details" id="portfolio">
        <div class="container">
            <p class="about-color h2">
                Our Works
            </p>
            <p class="font-lato">
                We provide high standar clean website for your business solution.
            </p>
            <div class="work-list">
                <div class="work-demo work-demo-1">
                    <div class="demo-img">
                        <img src="./image/ui.jpg" alt="ui" />
                        <div class="img-details ">
                            <div class="img-details-info">
                                <div>
                                    <p class="about-color h2 fw-bolder">UI/UX</p>
                                    <p>Best Portfolio Ui for clint</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work-demo work-demo-2">
                    <div class="demo-img">
                        <img src="./image/first-portfolio.png" alt="fp">
                        <div class="img-details ">
                            <div class="img-details-info">
                                <div>
                                    <p class="about-color h2 fw-bolder">front-end</p>
                                    <p>for practice, cause practice build success.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work-demo work-demo-3">
                    <div class="demo-img">
                        <img src="./image/hr.png" alt="hms">
                        <div class="img-details ">
                            <div class="img-details-info">
                                <div>
                                    <p class="about-color h2 fw-bolder">full stack</p>
                                    <p>complete web for boking your hotel and shared info.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work-demo work-demo-4">
                    <div class="demo-img">
                        <img src="./image/portfolio.jpg" alt="portfolio ui">
                        <div class="img-details ">
                            <div class="img-details-info">
                                <div>
                                    <p class="about-color h2 fw-bolder">full stack</p>
                                    <p>The result is already in front of you.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work-demo work-demo-5">
                    <div class="demo-img">
                        <img src="./image/mms.png" alt="mms">
                        <div class="img-details ">
                            <div class="img-details-info">
                                <div>
                                    <p class="about-color h2 fw-bolder">full satck</p>
                                    <p>manage your hostel with fun.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work-demo work-demo-6">
                    <div class="demo-img">
                        <img src="./image/ems.png" alt="ems">
                        <div class="img-details ">
                            <div class="img-details-info">
                                <div>
                                    <p class="about-color h2 fw-bolder">front-end</p>
                                    <p>manage student exam details with user friendly interface.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work-demo work-demo-7">
                    <div class="demo-img">
                        <img src="./image/bk.png" alt="bk">
                        <div class="img-details ">
                            <div class="img-details-info">
                                <div>
                                    <p class="about-color h2 fw-bolder">full-stack</p>
                                    <p>
                                        most tasty place.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work-demo work-demo-8">
                    <div class="demo-img">
                        <img src="./image/pc.png" alt="pc">
                        <div class="img-details ">
                            <div class="img-details-info">
                                <div>
                                    <p class="about-color h2 fw-bolder">front-end</p>
                                    <p>a pet care center who's take care of your pet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work-demo work-demo-9">
                    <div class="demo-img">
                        <img src="./image/ussbd.png" alt="rc">
                        <div class="img-details ">
                            <div class="img-details-info">
                                <div>
                                    <p class="about-color h2 fw-bolder">full stack</p>
                                    <p>one of top software industry in bangladesh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work-demo work-demo-10">
                    <div class="demo-img">
                        <img src="./image/rc.png" alt="rc">
                        <div class="img-details ">
                            <div class="img-details-info">
                                <div>
                                    <p class="about-color h2 fw-bolder">Front-End</p>
                                    <p>Redoy creation was multinational famouse company.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="short-cv-btn text-center">
                <button class="btn-cv btn-hover-effect"><a href="https://www.freelancer.com/u/ridoysheikh15">Hire
                        me</a></button>
                <button class="btn-cv btn-hover-effect"><a href="#">see more</a></button>
            </div>
        </div>
    </section> --}}
    <!-- contact us  -->
    <section class="contact-us" id="contact">
        <div class="container py-2 py-md-4">
            <p class="h1 mx-0">Contact Us</p>
            <p class="font-lato mx-0">We provide high standar clean website for your business solutions</p>
            <div class="short-contact-info">
                <div class="short-contact-info-phone d-flex">
                    <div class="phone-icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="phone-info">
                        <p class="about-color my-0">call us on:</p>
                        <p class="my-2"><a href="tel:+8801855922602" class="text-light btn-hover-effect">+880 1855 922 602</a></p>
                    </div>
                </div>
                <div class="short-contact-info-phone d-flex">
                    <div class="phone-icon">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="phone-info">
                        <p class="about-color my-0">email us at:</p>
                        <p class="my-2"><a class="text-break text-light" href="mailto:ridoysheikh15@gmail.com"
                                class="text-light btn-hover-effect">ridoysheikh15@gmail.com</a></p>
                    </div>
                </div>
                <div class="short-contact-info-phone d-flex">
                    <div class="phone-icon">
                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                    </div>
                    <div class="phone-info">
                        <p class="about-color my-0">visit office:</p>
                        <p class="my-2"><a href="https://www.google.com/maps/place/22%C2%B049'02.3%22N+89%C2%B032'44.9%22E/@22.8173323,89.5453908,19.46z/data=!4m4!3m3!8m2!3d22.817297!4d89.545813?entry=ttu"
                                class="text-light btn-hover-effect">GMCH sonadanga, khulna, bangladesh</a></p>
                    </div>
                </div>
            </div>
            <div class="massage-box-section">
                <form method="post">
                    <div class="comment-box">
                        <div class="comment-source-info">
                            <input type="text" name="name" id="name" placeholder="Your Name">
                            <input type="text" name="mail" id="mail" placeholder="Your Mail">
                        </div>
                        <input type="text" name="subject" id="subject" placeholder="Your Subject">
                        <textarea name="comment" placeholder="Your Comment" id="comment" rows="7"></textarea>
                    </div>
                    <div class="btn-submit text-center pt-4">
                        <button type="submit" class="btn btn-cv bg-hover">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>


@endsection