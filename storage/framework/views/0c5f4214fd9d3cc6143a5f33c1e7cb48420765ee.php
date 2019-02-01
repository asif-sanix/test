<!doctype html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  
  <meta name="description" content="<?php echo e(setting('site.description')); ?>" />
  <title><?php echo e(setting('site.title')); ?></title>
  
    <link href="<?php echo e(URL::to('assets/stylesheets/font.css')); ?>" rel='stylesheet' type='text/css'>
  
    <link href="<?php echo e(URL::to('assets/stylesheets/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css" media="all"> 
    <link href="<?php echo e(URL::to('assets/stylesheets/jquery.camera.css')); ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo e(URL::to('assets/stylesheets/jquery.fancybox-buttons.css')); ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo e(URL::to('assets/stylesheets/cs.animate.css')); ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo e(URL::to('assets/stylesheets/application.css')); ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo e(URL::to('assets/stylesheets/swatch.css')); ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo e(URL::to('assets/stylesheets/jquery.owl.carousel.css')); ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo e(URL::to('assets/stylesheets/jquery.bxslider.css')); ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo e(URL::to('assets/stylesheets/bootstrap.min.3x.css')); ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo e(URL::to('assets/stylesheets/cs.bootstrap.3x.css')); ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo e(URL::to('assets/stylesheets/cs.global.css')); ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo e(URL::to('assets/stylesheets/cs.style.css')); ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo e(URL::to('assets/stylesheets/cs.media.3x.css')); ?>" rel="stylesheet" type="text/css" media="all">
    
    
</head>

<body class="Index notouch">
  
    <!-- Header -->
    <header id="top" class="clearfix">
        <!--top-->
        <div class="container">
          <div class="top row">
            <div class="col-md-6 phone-shopping">
                <span>
                    <marquee>
                       <label class="text-warning">Rate of gold and diamond today:</label>
                    </marquee>
                </span>
            </div>
            <div class="col-md-18">
              <ul class="text-right">
                <li class="customer-links hidden-xs">
                    <?php if(!Auth::check()): ?>
                    <ul id="accounts" class="list-inline">
                        
                        
                       

                        <li class="login">    
                            <a href="<?php echo e(route('login')); ?>">Login</a>
                            <span id="loginButton" class="dropdown-toggle" data-toggle="dropdown">
                                
                                <i class="sub-dropdown1"></i>
                                <i class="sub-dropdown"></i>
                            </span>                            
                        </li>
                        <li>/</li>   
                        <li class="register">
                            <a href="<?php echo e(route('register')); ?>" id="customer_register_link">Create an account</a>
                        </li> 
                    </ul>
                    <?php else: ?>
                    <ul id="account" class="list-inline"> 
                        <li class="my-account">
                            <a href="<?php echo e(route('account')); ?>"><?php echo e(Auth::user()->name); ?></a>
                        </li>
                        <li>/</li>   
                        <li class="register">
                            <a href="<?php echo e(route('logout')); ?>" id="customer_register_link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    </ul>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                    <?php endif; ?>
                </li>      
                <li id="widget-social">
                  <ul class="list-inline">            
                    <li><a target="_blank" href="https://www.facebook.com/alankargemsandjewellery.alankargemsandjewellery" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a target="_blank" href="#" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>                        
                               
                  </ul>
                </li>        
              </ul>
            </div>
          </div>
        </div>
        <!--End top-->
        <div class="line"></div>
        <!-- Navigation -->
        <div class="container">
            <div class="top-navigation">
                <ul class="list-inline">
                    <li class="top-logo">
                        <a id="site-title" href="<?php echo e(route('welcome')); ?>" >          
                            <img class="img-responsive" src="<?php echo e(url('storage/others/logo.png')); ?>" style="height: 50px; ">
                            
                        </a>
                    </li>
                    <li class="navigation">         
                        <nav class="navbar">
                            <div class="clearfix">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle main navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="is-mobile visible-xs">
                                    <ul class="list-inline">
                                        <li class="is-mobile-menu">
                                        <div class="btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="icon-bar-group">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            </span>
                                        </div>
                                        </li>
                                        <li class="is-mobile-login">
                                        <div class="btn-group">
                                            <div class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <ul class="customer dropdown-menu">
                                                <li class="logout">
                                                <a href="<?php echo e(route('login')); ?>">Login</a>
                                                </li>
                                                <li class="account last">
                                                <a href="<?php echo e(route('register')); ?>">Register</a>
                                                </li>
                                            </ul>
                                        </div>
                                        </li>
                                        <li class="is-mobile-wl">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        </li>
                                        <li class="is-mobile-cart">
                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav hoverMenuWrapper">
                                        <li class="nav-item active">
                                        <a href="<?php echo e(route('welcome')); ?>">
                                        <span>Home</span>
                                        </a>
                                        </li>
                                        <li class="dropdown mega-menu">
                                            <a href="#" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
                                            <span>Collections</span>
                                            <i class="fa fa-caret-down"></i>
                                            <i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
                                            <i class="sub-dropdown visible-sm visible-md visible-lg"></i>
                                            </a>
                                            <div class="megamenu-container megamenu-container-1 dropdown-menu banner-bottom mega-col-4">
                                                <ul class="sub-mega-menu" >
                                                    <li>
                                                    <ul>
                                                        <li class="list-title">Collection Links</li>
                                                       <?php $__currentLoopData = TCG\Voyager\Models\Category::limit(8)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="list-unstyled li-sub-mega">
                                                            <a href="#"><?php echo e($m->name); ?> 
                                                            </a>
                                                        </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                    </li>
                                                    <li>
                                                    <ul>
                                                        <li class="list-title">Collection Links</li>
                                                        <?php $__currentLoopData = TCG\Voyager\Models\Category::offset(8)->limit(8)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="list-unstyled li-sub-mega">
                                                            <a href="#"><?php echo e($m->name); ?> 
                                                            </a>
                                                        </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                    </li>
                                                    <li>
                                                    <ul>
                                                        <li class="list-title">Collection Links</li>
                                                        <?php $__currentLoopData = TCG\Voyager\Models\Category::offset(16)->limit(8)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="list-unstyled li-sub-mega">
                                                            <a href="#"><?php echo e($m->name); ?> 
                                                            </a>
                                                        </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                    </li>
                                                    <li>
                                                    <ul>
                                                        <li class="list-title">Collection Links</li>
                                                        <?php $__currentLoopData = TCG\Voyager\Models\Category::offset(24)->limit(8)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="list-unstyled li-sub-mega">
                                                            <a href="#"><?php echo e($m->name); ?> 
                                                            </a>
                                                        </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <?php $__empty_1 = true; $__currentLoopData = TCG\Voyager\Models\Category::whereNull('parent_id')->limit(3)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <li class="nav-item">
                                                <a href="<?php echo e(route('category.slug',$m->slug)); ?>">
                                                    <span><?php echo e($m->name); ?></span>
                                                    <?php if(TCG\Voyager\Models\Category::where('parent_id',$m->id)->get()->count()): ?>
                                                        <i class="fa fa-caret-down"></i>
                                                    <?php endif; ?>
                                                </a>
                                                <?php if(TCG\Voyager\Models\Category::where('parent_id',$m->id)->get()->count()): ?>
                                                <ul class="dropdown-menu">
                                                    <?php $__currentLoopData = TCG\Voyager\Models\Category::where('parent_id',$m->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class=""><a tabindex="-1" href="<?php echo e(route('category.slug',$m->slug)); ?>"><?php echo e($sm->name); ?></a></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                                <?php endif; ?>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                        <?php endif; ?>                                        
                                        
                                        <li class="nav-item">
                                        <a href="<?php echo e(route('order.now')); ?>">
                                        <span>Order Now</span>
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </li>         
                    <li class="top-search hidden-xs">
                        <div class="header-search">
                            <a href="#">
                            <span data-toggle="dropdown">
                            <i class="fa fa-search"></i>
                            <i class="sub-dropdown1"></i>
                            <i class="sub-dropdown"></i>
                            </span>
                            </a>
                            <form id="header-search" class="search-form dropdown-menu" action="#" method="get">
                                <input type="hidden" name="type" value="product">
                                <input type="text" name="q" value="" accesskey="4" autocomplete="off" placeholder="Search something...">
                                <button type="submit" class="btn">Search</button>
                            </form>
                        </div>
                    </li>                   
                    <li class="umbrella hidden-xs">
                        <div id="umbrella" class="list-inline unmargin">
                            <div class="cart-link">
                                <a href="<?php echo e(route('cart')); ?>" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
                                    <i class="sub-dropdown1"></i>
                                    <i class="sub-dropdown"></i>
                                    <div class="num-items-in-cart">
                                        <span class="icon">
                                          Cart
                                          <span class="number"><?php echo e(ShoppingCart::count()); ?></span>
                                        </span>
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </li>                
                    <li class="mobile-search visible-xs">
                        <form id="mobile-search" class="search-form" action="#" method="get">
                            <input type="hidden" name="type" value="product">
                            <input type="text" class="" name="q" value="" accesskey="4" autocomplete="off" placeholder="Search something...">
                            <button type="submit" class="search-submit" title="search"><i class="fa fa-search"></i></button>
                        </form>
                    </li>         
                </ul>
            </div>
            <!--End Navigation-->
            <script>
              function addaffix(scr){
                if($(window).innerWidth() >= 1024){
                  if(scr > $('#top').innerHeight()){
                    if(!$('#top').hasClass('affix')){
                      $('#top').addClass('affix').addClass('animated');
                    }
                  }
                  else{
                    if($('#top').hasClass('affix')){
                      $('#top').prev().remove();
                      $('#top').removeClass('affix').removeClass('animated');
                    }
                  }
                }
                else $('#top').removeClass('affix');
              }
              $(window).scroll(function() {
                var scrollTop = $(this).scrollTop();
                addaffix(scrollTop);
              });
              $( window ).resize(function() {
                var scrollTop = $(this).scrollTop();
                addaffix(scrollTop);
              });
            </script>
        </div>
        <!-- Facebook Conversion Code for Themes -->
        <script>(function() {
          var _fbq = window._fbq || (window._fbq = []);
          if (!_fbq.loaded) {
            var fbds = document.createElement('script');
            fbds.async = true;
            fbds.src = '../../connect.facebook.net/en_US/fbds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(fbds, s);
            _fbq.loaded = true;
          }
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', '6016096938024', {'value':'0.00','currency':'USD'}]);
        </script>
        <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6016096938024&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
    </header>
  
    <?php echo $__env->yieldContent('content'); ?>
   
    <footer id="footer">      
        <div id="footer-content">
            
            
            <div class="footer-content footer-content-top clearfix">
                <div class="container">
                    <div class="footer-link-list col-md-6">
                      <div class="group">
                        <h5 class="#">About Us</h5>                     
                        <ul class="list-unstyled list-styled">                        
                          <li class="list-unstyled">
                            <a href="#">Return policy</a>
                          </li>                       
                          <li class="list-unstyled">
                            <a href="#">About us</a>
                          </li>                       
                          <li class="list-unstyled">
                            <a href="#">Map Site</a>
                          </li>                       
                          <li class="list-unstyled">
                            <a href="<?php echo e(route('contact')); ?>">Contact Us</a>
                          </li>                       
                        </ul>
                      </div>
                    </div>   
                    <div class="footer-link-list col-md-6">
                      <div class="group">
                        <h5 class="general-title">Address</h5>                      
                        <ul class="list-unstyled list-styled">                        
                         <p>Soni Alankar complex,gudri road,hajipur 844101(vaishali) </p>                    
                         <p>Email:   contact@alankarjewellery.com</p>                    
                         <p>Phone: +91 9934-442-007</p>                    
                        </ul>
                      </div>
                    </div>
                    <div class="footer-link-list col-md-6">
                      <div class="group">
                        <h5 class="general-title">Account</h5>                      
                        <ul class="list-unstyled list-styled">                        
                          <li class="list-unstyled">
                            <a href="<?php echo e(route('account')); ?>">Preferences</a>
                          </li>                       
                          <li class="list-unstyled">
                            <a href="<?php echo e(route('account')); ?>">Order History</a>
                          </li>                       
                          <li class="list-unstyled">
                            <a href="<?php echo e(route('cart')); ?>">Cart Page</a>
                          </li>                       
                          <li class="list-unstyled">
                            <a href="<?php echo e(route('login')); ?>">Sign In</a>
                          </li>                       
                        </ul>
                      </div>
                    </div>
                    <div class="footer-link-list col-md-6">
                      <div class="group">
                        <h5 class="general-title">Social</h5>                     
                        <ul class="list-unstyled list-styled">                        
                            <li class="list-unstyled">
                                <a href="https://www.facebook.com/alankargemsandjewellery.alankargemsandjewellery" style="padding-right: 7px;"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
                                <a href="#" style="padding-right: 7px;"><i class="fa fa-twitter fa-3x" aria-hidden="true"> </i></a>
                                <a href="#" style="padding-right: 7px;"><i class="fa fa-youtube fa-3x" aria-hidden="true"> </i></a>
                                <a href="https://www.linkedin.com/in/alankar-gemsjewellery-a040a0153/" style="padding-right: 7px;"><i class="fa fa-linkedin fa-3x" aria-hidden="true"> </i></a>
                            </li>                         
                        </ul>
                      </div>
                    </div>   
                </div>
            </div>
            <div class="footer-content footer-content-bottom clearfix" style="height: 40px;">
                <div class="container">
                    <div class="copyright col-md-12">
                        © <?php echo e(date('Y')); ?> <a href="<?php echo e(route('about')); ?>">alankar jewalers </a>. All Rights Reserved.
                    </div>
                    <div id="widget-payment" class="col-md-12">
                        <ul id="payments" class="list-inline animated">
                            <li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Visa"><a href="#" class="icons visa"></a></li>
                            <li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mastercard"><a href="#" class="icons mastercard"></a></li>
                            <li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="American Express"><a href="#" class="icons amex"></a></li>
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>   
    </footer>
    
    <?php echo $__env->yieldContent('newsletter'); ?>
    
    <script src="assets/javascripts/cs.global.js" type="text/javascript"></script>
 
    <div id="quick-shop-modal" class="modal in" role="dialog" aria-hidden="false" tabindex="-1" data-width="800">
        <div class="modal-backdrop in" style="height: 742px;">
        </div>
        <div class="modal-dialog rotateInDownLeft animated">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="close fa fa-times btooltip" data-toggle="tooltip" data-placement="top" title="" data-dismiss="modal" aria-hidden="true" data-original-title="Close"></i>
                </div>
                <div class="modal-body">
                    <div class="quick-shop-modal-bg" style="display: none;">
                    </div>
                    <div class="row">
                        <div class="col-md-12 product-image">
                            <div id="quick-shop-image" class="product-image-wrapper">
                                <a class="main-image"><img class="img-zoom img-responsive image-fly" src="assets/images/1_grande.jpg" data-zoom-image="./assets/images/1.jpg" alt=""/></a>
                                <div id="gallery_main_qs" class="product-image-thumb">
                                    <a class="image-thumb active" href="assets/1images/.html" data-image="./assets/images/1_grande.jpg" data-zoom-image="assets/images/1.html"><img src="assets/images/1_compact.jpg" alt=""/></a>
                                    <a class="image-thumb" href="assets/images/2.jpg" data-image="./assets/images/2_grande.jpg" data-zoom-image="assets/images/2.jpg"><img src="assets/images/2_compact.jpg" alt=""/></a>
                                    <a class="image-thumb" href="assets/images/3.html" data-image="./assets/images/3_grande.jpg" data-zoom-image="assets/images/3.html"><img src="assets/images/3_compact.jpg" alt=""/></a>
                                    <a class="image-thumb" href="assets/images/4.html" data-image="./assets/images/4_grande.jpg" data-zoom-image="assets/images/4.html"><img src="assets/images/4_compact.jpg" alt=""/></a>
                                    <a class="image-thumb" href="assets/images/5.html" data-image="./assets/images/5_grande.jpg" data-zoom-image="assets/images/5.html"><img src="assets/images/5_compact.jpg" alt=""/></a>
                                    <a class="image-thumb" href="assets/images/6.jpg" data-image="./assets/images/6_grande.jpg" data-zoom-image="assets/images/6.jpg"><img src="assets/images/6_compact.jpg" alt=""/></a>
                                </div>  
                            </div>
                        </div>
                        <div class="col-md-12 product-information">
                            <h1 id="quick-shop-title"><span> <a href="http://demo.designshopify.com/products/curabitur-cursus-dignis">Curabitur cursus dignis</a></span></h1>
                            <div id="quick-shop-infomation" class="description">
                                <div id="quick-shop-description" class="text-left">
                                    <p>
                                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum.
                                    </p>
                                    <p>
                                        Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor s...
                                    </p>
                                </div>
                            </div>
                            <div id="quick-shop-container">
                                <div id="quick-shop-relative" class="relative text-left">
                                    <ul class="list-unstyled">
                                        <li class="control-group vendor">
                                        <span class="control-label">Vendor :</span><a href="http://demo.designshopify.com/collections/vendors?q=Vendor+1"> Vendor 1</a>
                                        </li>
                                        <li class="control-group type">
                                        <span class="control-label">Type :</span><a href="http://demo.designshopify.com/collections/types?q=Sweaters+Wear"> Sweaters Wear</a>
                                        </li>
                                    </ul>
                                </div>
                                <form action="#" method="post" class="variants" id="quick-shop-product-actions" enctype="multipart/form-data">
                                    <div id="quick-shop-price-container" class="detail-price">
                                        <span class="price_sale">$259.00</span><span class="dash">/</span><del class="price_compare">$300.00</del>
                                    </div>
                                    <div class="quantity-wrapper clearfix">
                                        <label class="wrapper-title">Quantity</label>
                                        <div class="wrapper">
                                            <input type="text" id="qs-quantity" size="5" class="item-quantity" name="quantity" value="1">
                                            <span class="qty-group">
                                            <span class="qty-wrapper">
                                            <span class="qty-up" title="Increase" data-src="#qs-quantity">
                                            <i class="fa fa-plus"></i>
                                            </span>
                                            <span class="qty-down" title="Decrease" data-src="#qs-quantity">
                                            <i class="fa fa-minus"></i>
                                            </span>
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div id="quick-shop-variants-container" class="variants-wrapper">
                                        <div class="selector-wrapper">
                                            <label for="#quick-shop-variants-1293238211-option-0">Color</label>
                                            <div class="wrapper">
                                                <select class="single-option-selector" data-option="option1" id="#quick-shop-variants-1293238211-option-0" style="z-index: 1000; position: absolute; opacity: 0; font-size: 15px;">
                                                    <option value="black">black</option>
                                                    <option value="red">red</option>
                                                    <option value="blue">blue</option>
                                                    <option value="purple">purple</option>
                                                    <option value="green">green</option>
                                                    <option value="white">white</option>
                                                </select>
                                                <button type="button" class="custom-style-select-box" style="display: block; overflow: hidden;"><span class="custom-style-select-box-inner" style="width: 264px; display: inline-block;">black</span></button><i class="fa fa-caret-down"></i>
                                            </div>
                                        </div>
                                        <div class="selector-wrapper">
                                            <label for="#quick-shop-variants-1293238211-option-1">Size</label>
                                            <div class="wrapper">
                                                <select class="single-option-selector" data-option="option2" id="#quick-shop-variants-1293238211-option-1" style="z-index: 1000; position: absolute; opacity: 0; font-size: 15px;">
                                                    <option value="small">small</option>
                                                    <option value="medium">medium</option>
                                                    <option value="large">large</option>
                                                </select>
                                                <button type="button" class="custom-style-select-box" style="display: block; overflow: hidden;"><span class="custom-style-select-box-inner" style="width: 264px; display: inline-block;">small</span></button><i class="fa fa-caret-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="others-bottom">
                                        <input id="quick-shop-add" class="btn small add-to-cart" type="submit" name="add" value="Add to Cart" style="opacity: 1;">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Androll-->
    <script src="<?php echo e(URL::to('assets/javascripts/jquery-1.9.1.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(URL::to('assets/javascripts/jquery.imagesloaded.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(URL::to('assets/javascripts/bootstrap.min.3x.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(URL::to('assets/javascripts/jquery.easing.1.3.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(URL::to('assets/javascripts/jquery.camera.min.js')); ?>" type="text/javascript"></script>  
    <script src="<?php echo e(URL::to('assets/javascripts/cookies.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(URL::to('assets/javascripts/modernizr.js')); ?>" type="text/javascript"></script>  
    <script src="<?php echo e(URL::to('assets/javascripts/application.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(URL::to('assets/javascripts/jquery.owl.carousel.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(URL::to('assets/javascripts/jquery.bxslider.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(URL::to('assets/javascripts/skrollr.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(URL::to('assets/javascripts/jquery.fancybox-buttons.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(URL::to('assets/javascripts/jquery.zoom.js')); ?>" type="text/javascript"></script>    
    <script src="<?php echo e(URL::to('assets/javascripts/cs.script.js')); ?>" type="text/javascript"></script>
</body>