<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WeCan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Your page description here" />
    <meta name="author" content="" />

    <!-- css -->
    <link href="{{asset('vendors/homepage/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('vendors/homepage/css/bootstrap-responsive.css')}}" rel="stylesheet" />
    <link href="{{asset('vendors/homepage/css/prettyPhoto.css')}}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="{{asset('vendors/homepage/css/style.css')}}" rel="stylesheet">

    <!-- Theme skin -->
    <link id="t-colors" href="{{asset('vendors/homepage/color/default.css')}}" rel="stylesheet" />

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{asset('vendors/homepage/ico/apple-touch-icon-144-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{asset('vendors/homepage/ico/apple-touch-icon-114-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{asset('vendors/homepage/ico/apple-touch-icon-72-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed"
        href="{{asset('vendors/homepage/ico/apple-touch-icon-57-precomposed.png')}}" />
    <link rel="shortcut icon" href="{{asset('/images/logo.jpg')}}" />

    <!-- =======================================================
    Theme Name: Remember
    Theme URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
    <div id="wrapper">
        <!-- start header -->
        <header>
            <div class="top">
                <div class="container">
                    <div class="row">
                    </div>
                </div>
            </div>
            <div class="container">


                <div class="row nomargin">
                    <div class="span4">
                        <div class="logo">
                            <h1><a href="{{asset('home')}}"><img src="{{asset('/images/home.png')}}" width="48px"
                                        height="48px" alt=""> WeCan</a></h1>
                        </div>
                    </div>
                    <div class="span8">
                        <div class="navbar navbar-static-top">
                            <div class="navigation">
                                <nav>
                                    <ul class="nav topnav">
                                        <li class="{{ request()->is('home*') ? 'active' : '' }}">
                                            <a href="{{asset('home')}}">Home</a>
                                        </li>
                                        <li class="{{ request()->is('courses*') ? 'active' : '' }}">
                                            <a href="{{asset('courses')}}">Courses</a>
                                        </li>
                                        <li class="{{ request()->is('article*') ? 'active' : '' }}">
                                            <a href="{{asset('article')}}">Article</a>
                                        </li>
                                        <li class="{{ request()->is('about') ? 'active' : '' }}">
                                            <a href="{{asset('about')}}">About</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">{{Session::get('name')}} <i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{asset('profile')}}">Profile</a></li>
                                                <li><a href="{{asset('topup')}}">Top Up Balance:
                                                        {{Session::get('balance')}}</a></li>
                                                <li><a href="{{asset('logout')}}">Log Out</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                            <!-- end navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

        <?php if(session('success')){ ?>
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        <?php } else if(session('fail')) {?>
        <div class="alert alert-danger">
            {{ session('fail') }}
        </div>
        <?php } ?>
        <!-- section intro -->
        <!-- /section intro -->
        @yield('content')

        <footer>
            <div class="container">
                <div class="clearfix"></div>
                <div class="row">
                    <div class="span4">
                        <div class="widget">
                            <div class="footer_logo">
                                <h3><a href="{{asset('home')}}"> <img src="{{asset('/images/home.png')}}" width="48px"
                                            height="48px" alt=""> WeCan</a></h3>
                            </div>
                            <address>
                                <strong>WeCan company Inc.</strong><br>
                                Surya Sumantri<br>
                                Bandung Indonesia
                            </address>
                            <p>
                                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                                <i class="icon-envelope-alt"></i> email@domainname.com
                            </p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="widget">
                            {{-- <h5 class="widgetheading">Media Sosial</h5> --}}
                            <div class="flickr_badge">
                                {{-- <script type="text/javascript"
                            src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03">
                        </script> --}}
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
    </div>
    <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>

    <!-- javascript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('/vendors/homepage/js/jquery.js')}}"></script>
    <script src="{{asset('/vendors/homepage/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('/vendors/homepage/js/bootstrap.js')}}"></script>
    <script src="{{asset('/vendors/homepage/js/modernizr.custom.js')}}"></script>
    <script src="{{asset('/vendors/homepage/js/toucheffects.js')}}."></script>
    <script src="{{asset('/vendors/homepage/js/google-code-prettify/prettify.js')}}"></script>
    <script src="{{asset('/vendors/homepage/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('/vendors/homepage/js/portfolio/jquery.quicksand.js')}}"></script>
    <script src="{{asset('/vendors/homepage/js/portfolio/setting.js')}}"></script>
    <script src="{{asset('/vendors/homepage/js/animate.js')}}"></script>

    <!-- Template Custom JavaScript File -->
    <script src="{{asset('/vendors/homepage/js/custom.js')}}"></script>
    @yield('js')
</body>

</html>
