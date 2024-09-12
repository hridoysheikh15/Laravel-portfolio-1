<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- title -->
    <title>@yield('title', 'Portfolio || Hridoy Sheikh')</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.min.css')  }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('asset/css/responsive.css')  }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('asset/images/logo.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/jquery.mCustomScrollbar.min.css')  }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/style.css')  }}">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    {{-- <!-- font awesome css -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}
</head>

<body>

    

    @yield('content')  

    <!-- footer section start -->

    <div class="footer_section">

        <div class="container">

            <div class="location_text">

                <ul>

                    <li>
                        
                        <a href="https://maps.app.goo.gl/B39mSuaLWHQQ4NVv7" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i></a>

                    </li>

                    <li>

                        <a href="https://api.whatsapp.com/qr/J6LPKWFQTR6HH1" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i></a>

                    </li>

                    <li>

                        <a href="mailto:ridoysheikh15@gmail.com" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>

                    </li>

                </ul>
                
            </div>


        </div>

    </div>

    <!-- footer section end -->


    <!-- copyright section start -->

    <div class="copyright_section">

        <div class="container">

            <p class="copyright_text">&copy;<?php $currentYear = date('Y'); echo $currentYear; ?> All Rights Reserved. Made with a cup of &#9749; and &#128150; By <a href="https://www.linkedin.com/in/hridoy-sheikh-12ab79269/">Hridoy Sheikh</a></p>

        </div>

    </div>

    <!-- copyright section end -->


    <!-- Javascript files-->
    <script src="{{ asset('asset/js/jquery.min.js')  }}"></script>

    <script src="{{ asset('asset/js/popper.min.js')  }}"></script>

    <script src="{{ asset('asset/js/bootstrap.bundle.min.js')  }}"></script>

    <script src="{{ asset('asset/js/jquery-3.0.0.min.js')  }}"></script>

    <script src="{{ asset('asset/js/plugin.js')  }}"></script>

    <!-- sidebar -->
    <script src="{{ asset('asset/js/jquery.mCustomScrollbar.concat.min.js')  }}"></script>

    <script src="{{ asset('asset/js/custom.js')  }}"></script>

    <script>

        $('#myCarousel').carousel({

            interval: false

        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function (event) {

            var yClick = event.originalEvent.touches[0].pageY;

            $(this).one("touchmove", function (event) {

                var yMove = event.originalEvent.touches[0].pageY;

                if (Math.floor(yClick - yMove) > 1) {

                    $(".carousel").carousel('next');

                }

                else if (Math.floor(yClick - yMove) < -1) {

                    $(".carousel").carousel('prev');

                }

            });

            $(".carousel").on("touchend", function () {

                $(this).off("touchmove");

            });

        });

    </script>

    <script>

        window.addEventListener('focus', () => {

            document.title = `@yield("title", "Portfolio || Hridoy Sheikh")`;

        });


        window.addEventListener('blur', () => {

            document.title = "Come Sweety😚";

        });

    </script>
</body>

</html>