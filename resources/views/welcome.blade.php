@extends('master.common')

@push('style')

@endpush

@section('content')
<div id="content-wrapper-parent">
    <div id="content-wrapper">  
        <!-- Main Slideshow -->
        <div class="home-slider-wrapper clearfix">
            <div class="camera_wrap" id="home-slider">
                @foreach(App\Slider::all() as $sl)
                <div data-src="{{ $sl->url }}">
                    {{-- <div class="camera_caption camera_title_1 fadeIn">
                      <a href="collection.html" style="color:#010101;">Live the moment</a>
                    </div> --}}
                    {{-- <div class="camera_caption camera_caption_1 fadeIn" style="color: rgb(1, 1, 1);">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    </div>
                    <div class="camera_caption camera_image-caption_1 moveFromLeft">
                        <img src="assets/images/slide-image-caption-1.png" alt="image_caption">
                    </div> --}}
                    {{-- <div class="camera_cta_1">
                        <a href="collection.html" class="btn">See Collection</a>
                    </div> --}}
                </div>
                @endforeach
                {{-- <div data-src="assets/images/slide-image-2.jpg">
                    <div class="camera_caption camera_title_2 moveFromLeft">
                      <a href="collection.html" style="color:#666666;">Love’s embrace</a>
                    </div>
                    <div class="camera_caption camera_image-caption_2 moveFromLeft" style="visibility: hidden;">
                        <img src="assets/images/slide-image-caption-2.png" alt="image_caption">
                    </div>
                </div>
                <div data-src="assets/images/slide-image-3.jpg">
                    <div class="camera_caption camera_image-caption_3 moveFromLeft">
                        <img src="assets/images/slide-image-caption-3.png" alt="image_caption">
                    </div>
                </div> --}}
            </div>
        </div> 
        <!-- Content -->
        <div id="content" class="clearfix">                       
            <section class="content">  
                <div id="col-main" class="clearfix">
                    {{-- <div class="home-popular-collections">
                        <div class="container">
                            <div class="group_home_collections row">
                                <div class="col-md-24">
                                    <div class="home_collections">
                                        <h6 class="general-title">Popular Collections</h6>
                                        <div class="home_collections_wrapper">                                              
                                            <div id="home_collections">
                                                @forelse(App\Product::all() as $p)
                                                <div class="home_collections_item">
                                                    <div class="home_collections_item_inner">
                                                        <div class="collection-details">
                                                            <a href="{{ route('product.detail',$p->slug) }}" title="Browse our Bracelets">
                                                                <img src="assets/images/3_large.png" alt="Bracelets">
                                                            </a>
                                                        </div>
                                                        <div class="hover-overlay">
                                                            <span class="col-name"><a href="collection.html">Bracelets</a></span>
                                                            <div class="collection-action">
                                                                <a href="collection.html">See the Collection</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty

                                                @endforelse
                                            </div>                                                  
                                        </div>
                                    </div>
                                </div>
                                <script>
                                  $(document).ready(function() {
                                    $('.collection-details').hover(
                                      function() {
                                        $(this).parent().addClass("collection-hovered");
                                      },
                                      function() {
                                      $(this).parent().removeClass("collection-hovered");
                                      });
                                  });
                                </script>
                            </div>
                        </div>
                    </div> --}}
                    <div class="home-newproduct">
                        <div class="container">
                            <div class="group_home_products row">
                                <div class="col-md-24">
                                    <div class="home_products">
                                        <h6 class="general-title">New Products</h6>
                                        <div class="home_products_wrapper">
                                            <div id="home_products">
                                                @forelse(App\Product::limit(6)->get() as $p)             
                                                <div class="element no_full_width col-md-8 col-sm-8 not-animated" data-animate="fadeInUp" data-delay="1">
                                                    <ul class="row-container list-unstyled clearfix">
                                                        <li class="row-left">
                                                        <a href="{{ route('product.detail',$p->slug) }}" class="container_item">
                                                        <img src="{{ $p->image }}" class="img-responsive" alt="Curabitur cursus dignis" style="max-height: 100">
                                                        </a>
                                                        <div class="hbw">
                                                            <span class="hoverBorderWrapper"></span>
                                                        </div>
                                                        </li>
                                                        <li class="row-right parent-fly animMix">
                                                        <div class="product-content-left">
                                                            <a class="title-5" href="{{ route('product.detail',$p->slug) }}">{{ $p->name }}</a>
                                                            <span class="spr-badge" id="spr_badge_12932396193" data-rating="0.0">
                                                            <span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
                                                            <span class="spr-badge-caption">
                                                            No reviews </span>
                                                            </span>
                                                        </div>
                                                        <div class="product-content-right">
                                                            <div class="product-price">
                                                                <span class="price">
                                                                <i class="fa fa-inr"></i> {{ $p->price }} </span>
                                                            </div>
                                                        </div>
                                                        <div class="list-mode-description">
                                                             {{ $p->desc }}
                                                        </div>
                                                        <div class="hover-appear">
                                                            <form action="{{ route('cart.add',$p->id) }}" method="get">
                                                                
                                                                <div class="effect-ajax-cart">
                                                                    <input type="hidden" name="quantity" value="1">

                                                                    <button class="add-to-cart" type="submit" name="add"><i class="fa fa-shopping-cart"></i><span class="list-mode">Add to Cart</span></button>
                                                                </div>
                                                            </form>
                                                            {{-- <div class="product-ajax-qs hidden-xs hidden-sm">
                                                                <div data-href="#" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
                                                                    <i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>                                                                       
                                                                </div>
                                                            </div> --}}
                                                            <a class="wish-list" href="{{ route('add.wishlist',$p->id) }}" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
                                                        </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                @empty

                                                @endforelse            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-banner-wrapper">
                        <div class="container">
                            <div id="home-banner" class="text-center clearfix">
                                <img class="pulse img-banner-caption" src="storage/others/home_banner_image_text.png" alt="">
                                <div class="home-banner-caption">
                                   {{--  <p>
                                        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p> --}}
                                </div>
                                <div class="home-banner-action">
                                    {{-- <a href="collection.html">Shop Now</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-blog">
                        <div class="container">
                            <div class="home-promotion-blog row">
                                <h6 class="general-title">Latest Update</h6>
                                <div class="home-bottom_banner_wrapper col-md-12">
                                    <div id="home-bottom_banner" class="home-bottom_banner">
                                        <a href="#"><img src="storage/others/home_bottom_banner.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="home-blog-wrapper col-md-12">
                                    <div id="home_blog" class="home-blog">
                                        @forelse(App\News::limit(3)->get() as $n)
                                        <div class="home-blog-item row">
                                            <div class="date col-md-4">
                                                <div class="date_inner">
                                                    <p>
                                                        <small>{{ $n->created_at->format('M') }}</small><span>{{ $n->created_at->format('d') }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="home-blog-content col-md-20">
                                                <h4><a href="#">{{ $n->title }}</a></h4>
                                                <ul class="list-inline">
                                                    <li class="author"><i class="fa fa-user"></i> {{ $n->user->name }}</li>
                                                    <li>/</li>
                                                    <li class="comment">
                                                    <a href="article-left-2.html">
                                                    <span><i class="fa fa-pencil-square-o"></i> 0</span> Comments </a>
                                                    </li>
                                                </ul>
                                                <div class="intro">
                                                    {{ $n->desc }}
                                                </div>
                                            </div>
                                        </div>
                                        @empty

                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-feature">
                        <div class="container">
                            <div class="group_featured_products row">
                                <div class="col-md-24">
                                    <div class="home_fp">
                                        <h6 class="general-title">Featured Products</h6>
                                        <div class="home_fp_wrapper">
                                            <div id="home_fp">                                                                                         
                                                @forelse(App\Product::limit(4)->get() as $p)                                                                           
                                                <div class="element no_full_width not-animated" data-animate="fadeInUp" data-delay="200">
                                                    <ul class="row-container list-unstyled clearfix">
                                                        <li class="row-left">
                                                        <a href="{{ route('product.detail',$p->slug) }}" class="container_item">
                                                        <img src="{{ $p->image }}" class="img-responsive" alt="Curabitur cursus dignis" style="min-height: 100px;">
                                                        </a>
                                                        <div class="hbw">
                                                            <span class="hoverBorderWrapper"></span>
                                                        </div>
                                                        </li>
                                                        <li class="row-right parent-fly animMix">
                                                        <div class="product-content-left">
                                                            <a class="title-5" href="{{ route('product.detail',$p->slug) }}">{{ $p->name }}</a>
                                                            <span class="spr-badge" id="spr_badge_1293239619" data-rating="0.0">
                                                            <span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
                                                            <span class="spr-badge-caption">
                                                            No reviews </span>
                                                            </span>
                                                        </div>
                                                        <div class="product-content-right">
                                                            <div class="product-price">
                                                                <span class="price">
                                                                <i class="fa fa-inr"></i> {{ $p->price }} </span>
                                                            </div>
                                                        </div>
                                                        <div class="list-mode-description">
                                                             {{ $p->desc }}
                                                        </div>
                                                        <div class="hover-appear">
                                                            <form action="{{ route('cart.add',$p->id) }}" method="get">
                                                                <div class="hide clearfix">
                                                                    <select name="id">
                                                                        <option selected="selected" value="5141875779">Default Title</option>
                                                                    </select>
                                                                </div>
                                                                <div class="effect-ajax-cart">
                                                                    <input type="hidden" name="quantity" value="1">
                                                                    <button class="add-to-cart" type="submit" name="add"><i class="fa fa-shopping-cart"></i><span class="list-mode">Add to Cart</span></button>
                                                                </div>
                                                            </form>
                                                            {{-- <div class="product-ajax-qs hidden-xs hidden-sm">
                                                                <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
                                                                    <i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>                                                                       
                                                                </div>
                                                            </div> --}}
                                                            <a class="wish-list" href="{{ route('add.wishlist',$p->id) }}" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
                                                        </div>
                                                        </li>
                                                    </ul>
                                                </div>            
                                                
                                                @empty

                                                @endforelse                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-partners">
                        <div class="container">
                            <div class="partners-logo row">
                                <div class="col-md-24">
                                    <div id="partners-container" class="clearfix">
                                        <h6 class="general-title">Popular Brands</h6>
                                        <div id="partners">
                                            @php
                                                $delay = '150';
                                            @endphp
                                            @forelse(App\PopulerBrand::all() as $br)
                                            <div class="logo text-center not-animated" data-animate="bounceIn" data-delay="{{ $delay }}">
                                                <a class="animated" href="collection.html">
                                                <img class="pulse" src="{{ $br->url }}" alt="">
                                                </a>
                                            </div>
                                            @php
                                                $delay += 150;
                                            @endphp
                                            @empty

                                            @endforelse
                                            {{-- <div class="logo text-center not-animated" data-animate="bounceIn" data-delay="300">
                                                <a class="animated" href="collection.html">
                                                <img class="pulse" src="assets/images/partners_logo_2.png" alt="">
                                                </a>
                                            </div>
                                            <div class="logo text-center not-animated" data-animate="bounceIn" data-delay="450">
                                                <a class="animated" href="collection.html">
                                                <img class="pulse" src="assets/images/partners_logo_3.png" alt="">
                                                </a>
                                            </div>
                                            <div class="logo text-center not-animated" data-animate="bounceIn" data-delay="600">
                                                <a class="animated" href="collection.html">
                                                <img class="pulse" src="assets/images/partners_logo_4.png" alt="">
                                                </a>
                                            </div>
                                            <div class="logo text-center not-animated" data-animate="bounceIn" data-delay="750">
                                                <a class="animated" href="collection.html">
                                                <img class="pulse" src="assets/images/partners_logo_5.png" alt="">
                                                </a>
                                            </div>
                                            <div class="logo text-center not-animated" data-animate="bounceIn" data-delay="900">
                                                <a class="animated" href="collection.html">
                                                <img class="pulse" src="assets/images/partners_logo_6.png" alt="">
                                                </a>
                                            </div>
                                            <div class="logo text-center not-animated" data-animate="bounceIn" data-delay="1050">
                                                <a class="animated" href="collection.html">
                                                <img class="pulse" src="assets/images/partners_logo_7.png" alt="">
                                                </a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>                              
                </div>
            </section>        
        </div>
    </div>
</div>
@stop

{{-- @section('neewsletter')
<div class="newsletter-popup" style="display: none;">
    <form action="http://codespot.us5.list-manage.com/subscribe/post?u=ed73bc2d2f8ae97778246702e&amp;id=c63b4d644d" method="post" name="mc-embedded-subscribe-form" target="_blank">
        <h4>-50% Deal</h4>
        <p class="tagline">
            subscribe for newsletter and get the item for 50% off
        </p>
        <div class="group_input">
            <input class="form-control" type="email" name="EMAIL" placeholder="YOUR EMAIL">
            <button class="btn" type="submit"><i class="fa fa-paper-plane"></i></button>
        </div>
    </form>
    <div id="popup-hide">
        <input type="checkbox" id="mc-popup-hide" value="1" checked="checked"><label for="mc-popup-hide">Never show this message again</label>
    </div>
</div>
@stop --}}

@push('script')

@endpush