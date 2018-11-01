<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co"/>
    <meta name="keywords"
          content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive"/>
    <meta name="author" content="FreeHTML5.co"/>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('images/rm_icon.png')}}">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/star.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('fonts/fontawesome-free-5.3.1-web/css/all.css')}}">

    <script src="{{ asset('js/modal.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">

    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">
    <!-- Modernizr JS -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>
<div id="fh5co-page">
    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
    <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

        <h1 id="fh5co-logo"><a href="{{route('home')}}"><img src="{{asset('images/rm.png')}}"
                                                             alt="Logo Rabbit Media"></a></h1>
        <nav id="fh5co-main-menu" role="navigation">
            <ul>
                <li class="{{ \Illuminate\Support\Facades\Request::is('home*') ? 'fh5co-active' : '' }}"><a
                            href="{{route('home')}}">Home</a></li>
                <li class="{{ \Illuminate\Support\Facades\Request::is('about*') ? 'fh5co-active' : '' }}"><a
                            href="{{route('about')}}">About</a></li>
                <li class="{{ \Illuminate\Support\Facades\Request::is('portfolio*') ? 'fh5co-active' : '' }}"><a
                            href="{{route('portfolio')}}">Portfolio</a></li>
                <li class="{{ \Illuminate\Support\Facades\Request::is('order*') ? 'fh5co-active' : '' }}"><a
                            href="{{route('order')}}">Order</a></li>
                <li class="{{ \Illuminate\Support\Facades\Request::is('contact*') ? 'fh5co-active' : '' }}"><a
                            href="{{route('contact')}}">Contact</a></li>
                <li class="{{ \Illuminate\Support\Facades\Request::is('feedback*') ? 'fh5co-active' : '' }}"><a
                            href="{{route('feedback')}}">Feedback</a></li>
                @if(Auth::guard('admin')->check())
                    <li class="dropdown">
                        <a style="cursor: pointer" data-toggle="dropdown">
                <span>
                    <img style="margin-right: 7px" width="25" height="25" class="img-circle show_ava"
                         src="{{Auth::guard('admin')->user()->ava == "" ||
                         Auth::guard('admin')->user()->ava == "avatar.png" ? asset('images/avatar.png') :
                         asset('storage/admins/'.Auth::guard('admin')->user()->ava)}}">
                        <strong class="aj_name">{{Auth::guard('admin')->user()->name}}</strong></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a style="color: #979797;border-radius: 0;-webkit-border-radius: 0;-moz-border-radius: 0;-ms-border-radius: 0;"
                                   href="{{route('home')}}">
                                    <i class="fa fa-tachometer-alt"></i>&nbsp;Dashboard</a></li>
                            <li>
                                <a style="color: #979797;border-radius: 0;-webkit-border-radius: 0;-moz-border-radius: 0;-ms-border-radius: 0;"
                                   href="{{route('home')}}">
                                    <i class="fa fa-cogs"></i>&nbsp;Account Settings</a></li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   style="color: #979797;border-radius: 0;-webkit-border-radius: 0;-moz-border-radius: 0;-ms-border-radius: 0;"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out-alt"></i>&nbsp;Sign Out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @elseif(Auth::guard('web')->check())
                    <li class="dropdown">
                        <a style="cursor: pointer" data-toggle="dropdown">
                <span>
                    <img style="margin-right: 7px" width="25" height="25" class="img-circle show_ava"
                         src="{{Auth::user()->ava == "" || Auth::user()->ava == "avatar.png" ?
                         asset('images/avatar.png') : asset('storage/users/'.Auth::user()->ava)}}">
                        <strong class="aj_name">{{Auth::user()->name}}</strong></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a style="color: #592f83;border-radius: 0;-webkit-border-radius: 0;-moz-border-radius: 0;-ms-border-radius: 0;"
                                   href="{{route('home')}}">
                                    <i class="fa fa-tachometer-alt"></i>&nbsp;Dashboard</a></li>
                            <li>
                                <a style="color: #592f83;border-radius: 0;-webkit-border-radius: 0;-moz-border-radius: 0;-ms-border-radius: 0;"
                                   href="{{route('home')}}">
                                    <i class="fa fa-cogs"></i>&nbsp;Account Settings</a></li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   style="color: #592f83;border-radius: 0;-webkit-border-radius: 0;-moz-border-radius: 0;-ms-border-radius: 0;"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out-alt"></i>&nbsp;Sign Out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li><a data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">
                            <i class="fa fa-sign-in-alt"></i> Login/Register</a></li>
                @endif
            </ul>
        </nav>

        <div class="fh5co-footer">
            <p>
                <small>Copyright &copy; 2018 Rabbit Media. All Rights Reserved.<span>Designed by <a
                                href="http://rabbit-media.net/" target="_blank">Rabbit Media</a></span></small>
            </p>
            <ul>
                <li><a href="https://fb.com/RabbitMedia"><i class="icon-facebook"></i></a></li>
                <li><a href="https://twitter.com/RabbitMediaID"><i class="icon-twitter"></i></a></li>
                <li><a href="https://instagram.com/rabbit.media"><i class="icon-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCjKrYWn5JL6dR48nvXKUibw"><i
                                class="icon-youtube-square"></i></a></li>
            </ul>
        </div>

    </aside>

    @yield('content')
    @if(!\Illuminate\Support\Facades\Request::is('contact*'))
        <div class="fh5co-narrow-content">
            <div class="row">
                <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                    <h1 class="fh5co-heading-colored">Get in touch</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                    <p class="fh5co-lead">Feel free to get in touch with us.</p>
                    <p><a href="{{route('contact')}}" class="btn btn-primary btn-outline">GET IN TOUCH</a></p>
                </div>
            </div>
        </div>
    @endif
</div>
{{--modal sign up--}}
<div class="modal fade login" id="loginModal">
    <div class="modal-dialog login animated">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Login with</h4>
            </div>
            <div class="modal-body">
                <div class="box">
                    <div class="content">
                        <div class="error"></div>
                        <div class="form loginBox">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">
                                        &times;
                                    </button>
                                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                    {{session('success')}}
                                </div>
                            @elseif(session('error')||session('inactive'))
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">
                                        &times;
                                    </button>
                                    <h4><i class="icon fa fa-times"></i> Alert!</h4>
                                    {{session('error')?session('error'):session('inactive')}}
                                </div>
                            @endif
                            <form method="post" accept-charset="UTF-8" class="form-horizontal"
                                  action="{{ route('login') }}" id="form-login">
                                {{ csrf_field() }}

                                <div class="row {{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                                    <div class="col-lg-12">
                                        <input class="form-control" type="email" placeholder="Email"
                                               name="email" value="{{ old('email') }}" required>
                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row {{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                                    <div class="col-lg-12">
                                        <input class="form-control" type="password" placeholder="Password"
                                               name="password" minlength="6" required>
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        @if (session('error'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                                <a href="javascript:openEmailModal()" style="text-decoration: none">Forgot password?</a>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="checkbox col-lg-12">
                                        <label>
                                            <input type="checkbox"
                                                   name="remember" {{ old('remember') ? 'checked' : '' }}
                                                   style="position: relative"> Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="g-recaptcha" data-sitekey="{{env('reCAPTCHA_v2_SITEKEY')}}"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input class="btn btn-default btn-login" type="submit" value="SIGN IN"
                                               style="background: #592f83;border-color: #592f83;">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="content registerBox" style="display:none;">
                        <div class="form">
                            <form method="post" html="{:multipart=>true}" data-remote="true" accept-charset="UTF-8"
                                  class="form-horizontal" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                @if(\Illuminate\Support\Facades\Request::is(['/*','vacancy*','search*','agency/*']))
                                    <input type="hidden" name="role" value="seeker">
                                @elseif(\Illuminate\Support\Facades\Request::is('agency*'))
                                    <input type="hidden" name="role" value="agency">
                                @endif
                                <div class="row {{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Full name" class="form-control" id="fname"
                                               name="name" required>
                                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row {{ $errors->has('Email') ? ' has-error' : '' }} has-feedback">
                                    <div class="col-lg-12">
                                        <input class="form-control" type="email" placeholder="Email" name="email"
                                               required>
                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row {{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                                    <div class="col-lg-12">
                                        <input class="form-control" type="password" placeholder="Password"
                                               name="password" minlength="6" required>
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row {{ $errors->has('password_confirmation') ? ' has-error' : '' }} has-feedback">
                                    <div class="col-lg-12">
                                        <input class="form-control" type="password" placeholder="Retype password"
                                               name="password_confirmation" minlength="6" required>
                                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12" style="font-size: 14px;text-align: justify">
                                        <small>
                                            By continuing this, you acknowledge that you accept on SISKA's
                                            <a href="{{route('home')}}#privacy-policy" target="_blank"
                                               style="text-decoration: none">Privacy Policies</a> and
                                            <a href="{{route('home')}}#terms-conditions" target="_blank"
                                               style="text-decoration: none">Terms & Conditions</a>.
                                        </small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input class="btn btn-default btn-register" type="submit"
                                               value="CREATE ACCOUNT" name="commit"
                                               style="background: #592f83;border-color: #592f83">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{--Reset password form--}}
                <div class="box">
                    <div class="content emailBox" style="display:none;">
                        <div class="form">
                            @if(session('status'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">
                                        &times;
                                    </button>
                                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                    {{session('status')}}
                                </div>
                            @endif
                            <form method="post" html="{:multipart=>true}" data-remote="true" accept-charset="UTF-8"
                                  class="form-horizontal" action="{{ route('password.email') }}">
                                {{ csrf_field() }}

                                <div class="row {{ $errors->has('Email') ? ' has-error' : '' }} has-feedback">
                                    <div class="col-lg-12">
                                        <input class="form-control" type="email" placeholder="Email" name="email"
                                               value="{{ old('email') }}" required>
                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input class="btn btn-default btn-login" type="submit"
                                               value="send password reset link"
                                               style="background: #FA5555;border-color: #FA5555">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="content passwordBox" style="display:none;">
                        <div class="form">
                            <form method="post" html="{:multipart=>true}" data-remote="true" accept-charset="UTF-8"
                                  class="form-horizontal" action="{{ route('password.request') }}">
                                {{ csrf_field() }}
                                <div class="row {{ $errors->has('Email') ? ' has-error' : '' }} has-feedback">
                                    <div class="col-lg-12">
                                        <input class="form-control" type="email" placeholder="Email" name="email"
                                               value="{{ old('email') }}" required>
                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row {{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                                    <div class="col-lg-12">
                                        <input class="form-control" type="password" placeholder="New Password"
                                               name="password" minlength="6" required>
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row {{ $errors->has('password_confirmation') ? ' has-error' : '' }} has-feedback">
                                    <div class="col-lg-12">
                                        <input class="form-control" type="password" placeholder="Retype password"
                                               name="password_confirmation" minlength="6" required>
                                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input class="btn btn-default btn-login" type="submit"
                                               value="reset password"
                                               style="background: #FA5555;border-color: #FA5555">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="division">
                    <div class="line l"></div>
                    <span>or</span>
                    <div class="line r"></div>
                </div>
                <div class="social">
                    <a id="facebook_login" class="btn btn-default btn-login"
                       style="background: #6E83CD;border-color: #6E83CD"
                       href="{{route('redirect', ['provider' => 'facebook'])}}"
                       data-toggle="tooltip" data-title="Facebook" data-placement="top">
                        Sign In With FACEBOOK
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <div class="forgot login-footer">
                            <span>Looking to
                                 <a href="javascript:showRegisterForm()" style="color: #00ADB5;">create an account</a>
                            ?</span>
                </div>
                <div class="forgot register-footer" style="display:none">
                    <span>Already have an account?</span>
                    <a href="javascript:showLoginForm()" style="color: #592f83">Sign In</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Carousel -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Stellar -->
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<!-- Counters -->
<script src="{{asset('js/jquery.countTo.js')}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcpLicamw0cz8cPRT8bt2fiG_J4rqYFvM&sensor=false"></script>
<script src="{{asset('js/google_map.js')}}"></script>

<!-- MAIN JS -->
<script src="{{asset('js/main.js')}}"></script>
@include('layouts.partials._scripts')
@include('layouts.partials._alert')
@stack('scripts')
<script>
    var title = document.getElementsByTagName("title")[0].innerHTML;
    (function titleScroller(text) {
        document.title = text;
        setTimeout(function () {
            titleScroller(text.substr(1) + text.substr(0, 1));
        }, 500);
    }(title + " ~ "));

    function hanyaAngka(e, decimal) {
        var key;
        var keychar;
        if (window.event) {
            key = window.event.keyCode;
        } else if (e) {
            key = e.which;
        } else return true;
        keychar = String.fromCharCode(key);
        if ((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key == 27)) {
            return true;
        } else if ((("0123456789").indexOf(keychar) > -1)) {
            return true;
        } else if (decimal && (keychar == ".")) {
            return true;
        } else return false;
    }

    @if(session('contact'))
    swal({
        title: 'Successfully sent a message!',
        text: '{{ session('contact') }}',
        type: 'success',
        timer: '5500'
    });
    @endif
</script>
</body>
</html>

