<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{asset('svg/loader.svg')}}" width="62" height="60" alt="loader"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<!-- Overlay For Sidebars -->
<div class="overlay" style="display: none;"></div>

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-brand">
                <a href="/admin/">
                    <img src="{{asset('admin-assets/assets/images/logo-icon.svg')}}" alt="Mplify Logo" class="img-responsive logo">
                    <span class="name">mplify</span>
                </a>
            </div>
            
            <div class="navbar-right">
                <ul class="list-unstyled clearfix mb-0">
                    <li>
                        <div class="navbar-btn btn-toggle-show">
                            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                        </div>                        
                        <a href="javascript:void(0);" class="btn-toggle-fullwidth btn-toggle-hide"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                        <form id="navbar-search" class="navbar-form search-form">
                            <input value="" class="form-control" placeholder="Search here..." type="text">
                            <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                        </form>
                    </li>
                    <li>
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                               
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown" style="padding: 0">{{ Auth::guard('admin')->user()->name }} <img class="rounded-circle" src="{{Storage::disk('local')->url(Auth::guard('admin')->user()->avatar)}}" width="50" alt="">  
                                    </a>
                                    <div class="dropdown-menu animated flipInY user-profile">
                                        <div class="d-flex p-3 align-items-center">
                                            <div class="drop-left m-r-10">
                                                <img src="{{Storage::disk('local')->url(Auth::guard('admin')->user()->avatar)}}" class="rounded" width="50" alt="">
                                            </div>
                                            <div class="drop-right">
                                                <h4>{{ Auth::guard('admin')->user()->name }}</h4>
                                                <p class="user-name">{{ Auth::guard('admin')->user()->email }}</p>
                                            </div>
                                        </div>
                                        <div class="m-t-10 p-3 drop-list">
                                            <ul class="list-unstyled">
                                                <li><a href="page-profile.html"><i class="icon-user"></i>My Profile</a></li>
                                                <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                                                <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                                                <li><a href="{{ route('admin.change-password') }}"><i class="icon-key"></i>Change Password</a></li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('admin.logout.get') }}"><i class="icon-power"></i>Logout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                               {{--  <li>
                                    <a href="javascript:void(0);" class="icon-menu js-right-sidebar"><i class="icon-settings"></i></a>
                                </li> --}}
                                
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>