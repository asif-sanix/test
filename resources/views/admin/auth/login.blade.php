<!doctype html>
<html lang="en">

<head>
<title>:: Admin :: Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Mplify Bootstrap 4.1.1 Admin Template">
<meta name="author" content="ThemeMakker, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{asset('admin-assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('admin-assets/assets/vendor/animate-css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('admin-assets/assets/vendor/font-awesome/css/font-awesome.min.css')}}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('admin-assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('admin-assets/css/color_skins.css')}}">
</head>

<body class="theme-blue">
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <div class="mobile-logo"><a href="index.html"><img src="{{asset('admin-assets/assets/images/logo-icon.svg')}}" alt="Mplify"></a></div>
                    <div class="auth-left">
                        <div class="left-top">
                            <a href="index.html">
                                <img src="{{asset('admin-assets/assets/images/logo-icon.svg')}}" alt="Mplify">
                                <span>Mplify</span>
                            </a>
                            
                        </div>

                        <div class="left-slider" style="background: url('{{asset('admin-assets/assets/images/login/1.jpg')}}')">
                            {{-- <img src="{{asset('admin-assets/assets/images/login/1.jpg')}}" class="img-fluid" alt=""> --}}
                        </div>
                    </div>
                    <div class="auth-right">

                        <div class="right-top">
                             @if (isset($errors)&&count($errors) > 0)
                                    <div class="animated shake alert alert-dismissable alert-danger">
                                         <ul class=" list-unstyled clearfix d-flex">
                                        @foreach ($errors->all() as $error)
                                           <li><strong>{!! $error !!}</strong></li>
                                        @endforeach
                                    </ul>
                                    </div>
                                @endif
                           
                        </div>
                       
                        <div class="card">
                            <div class="header">
                                <p class="lead">Admin Log in</p>
                            </div>
                            <div class="body">
                                
                                <form class="form-auth-small" method="post" action="{{ route('admin.login.post') }}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="signin-email" class="control-label sr-only">Email</label>
                                        <input type="email" class="form-control" id="signin-email" name="email" placeholder="User Name">
                                         
                                    </div>
                                    <div class="form-group">
                                        <label for="signin-password" class="control-label sr-only">Password</label>
                                        <input type="password" class="form-control" name="password" id="signin-password" placeholder="Password">
                                       
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="fancy-checkbox element-left">
                                            <input type="checkbox">
                                            <span>Remember me</span>
                                        </label>                                
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                    <div class="bottom">
                                        <span class="helper-text m-b-10"><i class="fa fa-lock"></i> 
                                            {{-- <a href="{{ route('admin.forget.password') }}">Forgot password?</a> --}}
                                        </span>
                                        <span> <a href="page-register.html"></a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>
</html>
