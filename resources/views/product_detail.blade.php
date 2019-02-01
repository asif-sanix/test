@extends('master.common')

@push('style')

@endpush

@section('content')
<div id="content-wrapper-parent">
    <div id="content-wrapper">  
        <!-- Content -->
        <div id="content" class="clearfix">        
            <div id="breadcrumb" class="breadcrumb">
                <div itemprop="breadcrumb" class="container">
                    <div class="row">
                        <div class="col-md-24">
                            <a href="index-2.html" class="homepage-link" title="Back to the frontpage">Home</a>
                            <span>/</span>
                            <a href="collection.html" title="">Product</a>
                            <span>/</span>
                            <span class="page-title">{{ $detail->name }}</span>
                        </div>
                    </div>
                </div>
            </div>         
            <section class="content">
                <div class="container">
                    <div class="row">              
                        <div id="col-main" class="product-page col-xs-24 col-sm-24 ">
                            <div itemscope="" itemtype="http://schema.org/Product">
                                <meta itemprop="url" content="/products/donec-condime-fermentum">
                                <div id="product" class="content clearfix">      
                                    <h1 id="page-title" class="text-center">
                                        <span itemprop="name">{{ $detail->name }}</span>
                                    </h1>
                                    <div id="product-image" class="product-image row ">     
                                        <div id="detail-left-column" class="hidden-xs left-coloum col-sm-6 col-sm-6 fadeInRight not-animated" data-animate="fadeInRight">
                                            <div id="gallery_main" class="product-image-thumb thumbs full_width ">
                                               {{--  <ul class="slide-product-image">                                                    
                                                    <li class="image">
                                                        <a href="assets/images/4_0fe2529b-f7ae-4ed5-a8ff-4fae623757f9_1024x1024.jpg" class="cloud-zoom-gallery active">
                                                            <img src="{{ $detail->image }}" alt="Donec condime fermentum">
                                                        </a>
                                                    </li>
                                                    <li class="image">
                                                        <a href="assets/images/5_9c4bb547-32eb-42ea-bed5-2f1fc3832c2e_1024x1024.html" class="cloud-zoom-gallery">
                                                            <img src="{{ url('assets/images/5_9c4bb547-32eb-42ea-bed5-2f1fc3832c2e_compact.jpg') }}" alt="Donec condime fermentum">
                                                        </a>
                                                    </li>
                                                    <li class="image">
                                                        <a href="assets/images/6_2b8df768-6599-4e41-ae4c-2d6afd2b1d95_1024x1024.html" class="cloud-zoom-gallery">
                                                            <img src="{{ url('assets/images/6_2b8df768-6599-4e41-ae4c-2d6afd2b1d95_compact.jpg') }}" alt="Donec condime fermentum">
                                                        </a>
                                                    </li>
                                                    <li class="image">
                                                        <a href="assets/images/7_1024x1024.html" class="cloud-zoom-gallery">
                                                            <img src="{{ url('assets/images/7_compact.jpg') }}" alt="Donec condime fermentum">
                                                        </a>
                                                    </li>
                                                    <li class="image">
                                                        <a href="assets/images/4_0fe2529b-f7ae-4ed5-a8ff-4fae623757f9_1024x1024.jpg" class="cloud-zoom-gallery active">
                                                            <img src="{{ url('assets/images/4_0fe2529b-f7ae-4ed5-a8ff-4fae623757f9_compact.jpg') }}" alt="Donec condime fermentum">
                                                        </a>
                                                    </li>
                                                    <li class="image">
                                                        <a href="assets/images/5_9c4bb547-32eb-42ea-bed5-2f1fc3832c2e_1024x1024.html" class="cloud-zoom-gallery">
                                                            <img src="{{ url('assets/images/5_9c4bb547-32eb-42ea-bed5-2f1fc3832c2e_compact.jpg') }}" alt="Donec condime fermentum">
                                                        </a>
                                                    </li>
                                                </ul> --}}
                                            </div>
                                        </div>      
                                        <div class="image featured col-smd-12 col-sm-12 fadeInUp not-animated" data-animate="fadeInUp"> 
                                            <img src="{{ $detail->image }}" alt="Donec condime fermentum">
                                        </div>
                                        <div id="gallery_main_mobile" class="visible-xs product-image-thumb thumbs mobile_full_width ">
                                            <ul style="opacity: 0; display: block;" class="slide-product-image owl-carousel owl-theme">
                                                <li class="image">
                                                    <a href="assets/images/4_0fe2529b-f7ae-4ed5-a8ff-4fae623757f9_1024x1024.jpg" class="cloud-zoom-gallery active">
                                                        <img src="{{ url('assets/images/4_0fe2529b-f7ae-4ed5-a8ff-4fae623757f9_compact.jpg') }}" alt="Donec condime fermentum">
                                                    </a>
                                                </li>
                                                {{-- <li class="image">
                                                    <a href="assets/images/5_9c4bb547-32eb-42ea-bed5-2f1fc3832c2e_1024x1024.html" class="cloud-zoom-gallery">
                                                        <img src="assets/images/5_9c4bb547-32eb-42ea-bed5-2f1fc3832c2e_compact.jpg" alt="Donec condime fermentum">
                                                    </a>
                                                </li>
                                                <li class="image">
                                                    <a href="assets/images/6_2b8df768-6599-4e41-ae4c-2d6afd2b1d95_1024x1024.html" class="cloud-zoom-gallery">
                                                        <img src="assets/images/6_2b8df768-6599-4e41-ae4c-2d6afd2b1d95_compact.jpg" alt="Donec condime fermentum">
                                                    </a>
                                                </li>
                                                <li class="image">
                                                    <a href="assets/images/7_1024x1024.html" class="cloud-zoom-gallery">
                                                        <img src="assets/images/7_compact.jpg" alt="Donec condime fermentum">
                                                    </a>
                                                </li> --}}
                                            </ul>
                                        </div>        
                                        {{-- <div id="detail-right-column" class="right-coloum col-sm-6 fadeInLeft not-animated" data-animate="fadeInLeft">
                                            <div class="addthis_sharing_toolbox" data-url="#" data-title="Donec aliquam ante non | Jewelry - HTML Template">
                                                <div id="atstbx" class="at-share-tbx-element addthis_32x32_style addthis-smartlayers addthis-animated at4-show">
                                                    <a class="at-share-btn at-svc-facebook"><span class="at4-icon aticon-facebook" title="Facebook"></span></a><a class="at-share-btn at-svc-twitter"><span class="at4-icon aticon-twitter" title="Twitter"></span></a><a class="at-share-btn at-svc-email"><span class="at4-icon aticon-email" title="Email"></span></a><a class="at-share-btn at-svc-print"><span class="at4-icon aticon-print" title="Print"></span></a><a class="at-share-btn at-svc-compact"><span class="at4-icon aticon-compact" title="More"></span></a>
                                                </div>
                                            </div>
                                        </div> --}}      
                                    </div>
                                    <div id="product-information" class="product-information row text-center ">        
                                        <div id="product-header" class="clearfix">
                                            <div id="product-info-left">
                                                <div class="description">
                                                    <span>Product Descriptions</span>
                                                    <hr>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                                {{-- <div class="relative">
                                                    <ul class="list-unstyled">
                                                        <li class="tags">
                                                        <span>Tags :</span>
                                                        <a href="#">
                                                        above-200<span>,</span>
                                                        </a>
                                                        <a href="#">
                                                        black<span>,</span>
                                                        </a>
                                                        <a href="#">
                                                        l<span>,</span>
                                                        </a>
                                                        <a href="#">
                                                        sale-off </a>
                                                        </li>
                                                    </ul>
                                                </div> --}}
                                            </div>          
                                            <div id="product-info-right">     
                                                <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="col-sm-24 group-variants">
                                                    <meta itemprop="priceCurrency" content="USD">              
                                                    <link itemprop="availability" href="http://schema.org/InStock">
                                                    <form action="{{ route('cart.add',$detail->id) }}"  class="variants" id="product-actions">
                                                        <div id="product-actions-1293235843" class="options clearfix">
                                                            <style scoped>
                                                              label[for="product-select-option-0"] { display: none; }
                                                              #product-select-option-0 { display: none; }
                                                              #product-select-option-0 + .custom-style-select-box { display: none !important; }
                                                            </style>                                                                
                                                            {{-- <div class="swatch color clearfix" data-option-index="0">
                                                                <div class="header">
                                                                    Color
                                                                </div>
                                                                <div data-value="black" class="swatch-element color black available">
                                                                    <div class="tooltip">
                                                                        black
                                                                    </div>
                                                                    <input id="swatch-0-black" name="option-0" value="black" checked="checked" type="radio">
                                                                    <label for="swatch-0-black" style="background-color: black; background-image: url(assets/images/black.png)">
                                                                    <img class="crossed-out" src="assets/images/soldout.png" alt="">
                                                                    </label>
                                                                </div>
                                                                <div data-value="red" class="swatch-element color red available">
                                                                    <div class="tooltip">
                                                                        red
                                                                    </div>
                                                                    <input id="swatch-0-red" name="option-0" value="red" type="radio">
                                                                    <label for="swatch-0-red" style="background-color: red; background-image: url(assets/images/red.png)">
                                                                    <img class="crossed-out" src="assets/images/soldout.png" alt="">
                                                                    </label>
                                                                </div>
                                                                <div data-value="white" class="swatch-element color white available">
                                                                    <div class="tooltip">
                                                                        white
                                                                    </div>
                                                                    <input id="swatch-0-white" name="option-0" value="white" type="radio">
                                                                    <label for="swatch-0-white" style="background-color: white; background-image: url(assets/images/white.png)">
                                                                    <img class="crossed-out" src="assets/images/soldout.png" alt="">
                                                                    </label>
                                                                </div>
                                                                <div data-value="blue" class="swatch-element color blue available">
                                                                    <div class="tooltip">
                                                                        blue
                                                                    </div>
                                                                    <input id="swatch-0-blue" name="option-0" value="blue" type="radio">
                                                                    <label for="swatch-0-blue" style="background-color: blue; background-image: url(assets/images/blue.png)">
                                                                    <img class="crossed-out" src="assets/images/soldout.png" alt="">
                                                                    </label>
                                                                </div>                                                                  
                                                            </div> --}}
                                                           {{--  <div class="swatch clearfix" data-option-index="1">
                                                                <div class="header">
                                                                    Size
                                                                </div>
                                                                <div data-value="small" class="swatch-element small available">
                                                                    <input id="swatch-1-small" name="option-1" value="small" checked="checked" type="radio">
                                                                    <label for="swatch-1-small">
                                                                    small <img class="crossed-out" src="assets/images/soldout.png" alt="">
                                                                    </label>
                                                                </div>
                                                                <div data-value="medium" class="swatch-element medium available">
                                                                    <input id="swatch-1-medium" name="option-1" value="medium" type="radio">
                                                                    <label for="swatch-1-medium">
                                                                    medium <img class="crossed-out" src="assets/images/soldout.png" alt="">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="variants-wrapper clearfix">
                                                                <div class="selector-wrapper">
                                                                    <label for="product-select-1293235843-option-0">Color</label>
                                                                    <div class="wrapper">
                                                                        <select style="z-index: 1000; position: absolute; opacity: 0; font-size: 15px;" id="product-select-1293235843-option-0" data-option="option1" class="single-option-selector">
                                                                            <option selected="selected" value="black">black</option>
                                                                            <option value="red">red</option>
                                                                            <option value="white">white</option>
                                                                            <option value="blue">blue</option>
                                                                        </select>
                                                                        <button style="display: block; overflow: hidden;" type="button" class="custom-style-select-box changed"><span style="width: 219px; display: inline-block;" class="custom-style-select-box-inner">black</span></button><i class="fa fa-caret-down"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="selector-wrapper">
                                                                    <label for="product-select-1293235843-option-1">Size</label>
                                                                    <div class="wrapper">
                                                                        <select style="z-index: 1000; position: absolute; opacity: 0; font-size: 15px;" id="product-select-1293235843-option-1" data-option="option2" class="single-option-selector">
                                                                            <option selected="selected" value="small">small</option>
                                                                            <option value="medium">medium</option>
                                                                        </select>
                                                                        <button style="display: block; overflow: hidden;" type="button" class="custom-style-select-box changed"><span style="width: 219px; display: inline-block;" class="custom-style-select-box-inner">small</span></button><i class="fa fa-caret-down"></i>
                                                                    </div>
                                                                </div>
                                                                <select id="product-select-1293235843" name="id" style="display: none;">
                                                                    <option selected="selected" value="3947646083">black / small</option>
                                                                    <option value="3947646147">red / small</option>
                                                                    <option value="3947646211">white / small</option>
                                                                    <option value="3947646275">blue / small</option>
                                                                    <option value="3947646339">black / medium</option>
                                                                    <option value="3947646403">red / medium</option>
                                                                    <option value="3947646467">blue / medium</option>
                                                                    <option value="3947646531">white / medium</option>
                                                                </select>
                                                            </div> --}}
                                                            {{-- <div class="quantity-wrapper clearfix">
                                                                <label class="wrapper-title">Quantity</label>
                                                                <div class="wrapper">
                                                                    <input id="quantity" name="quantity" value="1" maxlength="5" size="5" class="item-quantity" type="text">
                                                                    <span class="qty-group">
                                                                    <span class="qty-wrapper">
                                                                    <span data-original-title="Increase" class="qty-up btooltip" data-toggle="tooltip" data-placement="top" title="" data-src="#quantity">
                                                                    <i class="fa fa-caret-right"></i>
                                                                    </span>
                                                                    <span data-original-title="Decrease" class="qty-down btooltip" data-toggle="tooltip" data-placement="top" title="" data-src="#quantity">
                                                                    <i class="fa fa-caret-left"></i>
                                                                    </span>
                                                                    </span>
                                                                    </span>
                                                                </div>
                                                            </div> --}}
                                                            <div id="purchase-1293235843">
                                                                <div class="detail-price" itemprop="price">
                                                                    <span class="price"><i class="fa fa-inr"></i> {{ $detail->price }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="others-bottom clearfix">
                                                                {{-- <a href=""  class="btn btn-1 add-to-cart"> Add to Cart</a> --}}
                                                                <button id="add-to-cart" class="btn btn-1 add-to-cart" data-parent=".product-information" type="submit" name="add">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="wls">
                                                        <a class="wish-list" href="{{ route('add.wishlist',$detail->id) }}"><i class="fa fa-heart"></i> Wish list</a>
                                                        <span>|</span>
                                                        <a href="mailto:contact@alankarjewellery.com"><i class="fa fa-envelope"></i> SEND EMAIL</a>
                                                    </div>                                          
                                                </div>                        
                                                <ul id="tabs_detail" class="tabs-panel-detail hidden-xs hidden-sm">
                                                    {{-- <li class="first">
                                                        <h5><a href="#pop-one" class="fancybox">Measurements &amp; Specs</a></h5>
                                                    </li> --}}
                                                    <li>
                                                        <h5><a href="#pop-two" class="fancybox">Shipping &amp; Returns</a></h5>
                                                    </li>
                                                    {{-- <li>
                                                        <h5><a href="#pop-three" class="fancybox">Size Charts</a></h5>
                                                    </li> --}}
                                                </ul>             
                                                <div id="pop-one" style="display: none;">
                                                    <img src="assets/images/mspecs_image.jpg" alt="">
                                                </div>
                                                <div id="pop-two" style="display: none;">
                                                    <h5>Returns Policy</h5>
                                                    <p>
                                                        You may return most new, unopened items within 30 days of delivery for a full refund. We'll also pay the return shipping costs if the return is a result of our error (you received an incorrect or defective item, etc.).You should expect to receive your refund within four weeks of giving your package to the return shipper, however, in many cases you will receive a refund more quickly. This time period includes the transit time for us to receive your return from the shipper (5 to 10 business days), the time it takes us to process your return once we receive it (3 to 5 business days), and the time it takes your bank to process our refund request (5 to 10 business days).If you need to return an item, simply login to your account, view the order using the 'Complete Orders' link under the My Account menu and click the Return Item(s) button. We'll notify you via e-mail of your refund once we've received and processed the returned item.
                                                    </p>
                                                    <br>
                                                    <h5>Shipping</h5>
                                                    <p>
                                                        We can ship to virtually any address in the world. Note that there are restrictions on some products, and some products cannot be shipped to international destinations.When you place an order, we will estimate shipping and delivery dates for you based on the availability of your items and the shipping options you choose. Depending on the shipping provider you choose, shipping date estimates may appear on the shipping quotes page.Please also note that the shipping rates for many items we sell are weight-based. The weight of any such item can be found on its detail page. To reflect the policies of the shipping companies we use, all weights will be rounded up to the next full pound.
                                                    </p>
                                                </div>
                                                <div id="pop-three" style="display: none;">
                                                    <img src="assets/images/size_chart_image.jpg" alt="">
                                                </div>                
                                            </div>
                                        </div>
                                    </div>
                                    <div id="shopify-product-reviews" data-id="1293236931">
                                                <style scoped="">
                                                  .spr-container {
                                                    padding: 24px;
                                                    border-color: #ECECEC;
                                                  }
                                                  .spr-review, .spr-form {
                                                    border-color: #ECECEC;
                                                  }
                                                </style>
                                                {{-- <div class="spr-container">
                                                    <div class="spr-header">
                                                        <h2 class="spr-header-title">Customer Reviews</h2>
                                                        <div class="spr-summary" itemscope="" itemtype="http://data-vocabulary.org/Review-aggregate">
                                                            <meta itemprop="itemreviewed" content="Donec aliquam ante non">
                                                            <meta itemprop="votes" content="1">
                                                            <span itemprop="rating" itemscope="" itemtype="http://data-vocabulary.org/Rating" class="spr-starrating spr-summary-starrating">
                                                            <meta itemprop="average" content="4.0">
                                                            <meta itemprop="best" content="5">
                                                            <meta itemprop="worst" content="1">
                                                            <i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i>
                                                            </span>
                                                            <span class="spr-summary-caption">
                                                            <span class="spr-summary-actions-togglereviews">Based on 1 review</span>
                                                            </span>
                                                            <span class="spr-summary-actions">
                                                            <a href="#" class="spr-summary-actions-newreview" onclick="SPR.toggleForm(1293236931);return false">Write a review</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="spr-content">
                                                        <div class="spr-form" id="form_1293236931" style="display: none">
                                                            <form method="post" action="#" id="new-review-form_1293236931" class="new-review-form">
                                                                <input type="hidden" name="review[rating]"><input type="hidden" name="product_id" value="1293236931">
                                                                <h3 class="spr-form-title">Write a review</h3>
                                                                <fieldset class="spr-form-contact">
                                                                    <div class="spr-form-contact-name">
                                                                        <label class="spr-form-label" for="review_author_1293236931">Name</label>
                                                                        <input class="spr-form-input spr-form-input-text " id="review_author_1293236931" type="text" name="review[author]" value="" placeholder="Enter your name">
                                                                    </div>
                                                                    <div class="spr-form-contact-email">
                                                                        <label class="spr-form-label" for="review_email_1293236931">Email</label>
                                                                        <input class="spr-form-input spr-form-input-email " id="review_email_1293236931" type="email" name="review[email]" value="" placeholder="john.smith@example.com">
                                                                    </div>
                                                                </fieldset>
                                                                <fieldset class="spr-form-review">
                                                                    <div class="spr-form-review-rating">
                                                                        <label class="spr-form-label">Rating</label>
                                                                        <div class="spr-form-input spr-starrating ">
                                                                            <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="1">&nbsp;</a>
                                                                            <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="2">&nbsp;</a>
                                                                            <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="3">&nbsp;</a>
                                                                            <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="4">&nbsp;</a>
                                                                            <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="5">&nbsp;</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="spr-form-review-title">
                                                                        <label class="spr-form-label" for="review_title_1293236931">Review Title</label>
                                                                        <input class="spr-form-input spr-form-input-text " id="review_title_1293236931" type="text" name="review[title]" value="" placeholder="Give your review a title">
                                                                    </div>
                                                                    <div class="spr-form-review-body">
                                                                        <label class="spr-form-label" for="review_body_1293236931">Body of Review <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
                                                                        <div class="spr-form-input">
                                                                            <textarea class="spr-form-input spr-form-input-textarea " id="review_body_1293236931" data-product-id="1293236931" name="review[body]" rows="10" placeholder="Write your comments here"></textarea>                                                                             
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                                <fieldset class="spr-form-actions">
                                                                    <input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                        <div class="spr-reviews" id="reviews_1293236931">
                                                            <div class="spr-review" id="spr-review-906174">
                                                                <div class="spr-review-header">
                                                                    <span class="spr-starratings spr-review-header-starratings"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
                                                                    <h3 class="spr-review-header-title">test</h3>
                                                                    <span class="spr-review-header-byline"><strong>test</strong> on <strong>Aug 10, 2015</strong></span>
                                                                </div>
                                                                <div class="spr-review-content">
                                                                    <p class="spr-review-content-body">
                                                                        test
                                                                    </p>
                                                                </div>
                                                                <div class="spr-review-footer">
                                                                    <a href="#" class="spr-review-reportreview" onclick="SPR.reportReview(906174);return false" id="report_906174" data-msg="This review has been reported">Report as Inappropriate</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                    </div>              
                                </div>
                            </div>         
                            <!-- Related Products -->
                            <section class="rel-container clearfix">  
                                <h6 class="general-title text-left">You may also like the related products</h6>
                                <div id="prod-related-wrapper">
                                    <div class="prod-related clearfix">
                                        @forelse(App\Product::where('name','%'.'LIKE'.'%')->get() as $pro)
                                        <div class="element no_full_width not-animated" data-animate="bounceIn" data-delay="1000">
                                            <ul class="row-container list-unstyled clearfix">
                                                <li class="row-left">
                                                <a href="product.html" class="container_item">
                                                <img src="{{ $pro->image }}" class="img-responsive" alt="Product full width">
                                                {{-- <span class="sale_banner">
                                                <span class="sale_text">Sale</span>
                                                </span> --}}
                                                </a>
                                                <div class="hbw">
                                                    <span class="hoverBorderWrapper"></span>
                                                </div>
                                                </li>
                                                <li class="row-right parent-fly animMix">
                                                <div class="product-content-left">
                                                    <a class="title-5" href="product.html">{{ $pro->name }}</a>
                                                    <span class="spr-badge" id="spr_badge_1293240771" data-rating="0.0">
                                                    <span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
                                                    <span class="spr-badge-caption">
                                                    No reviews </span>
                                                    </span>
                                                </div>
                                                <div class="product-content-right">
                                                    <div class="product-price">
                                                        <span class="price_sale"><i class="fa fa-img"></i> {{ $pro->price }}</span>
                                                        <del class="price_compare"> </del>
                                                    </div>
                                                </div>
                                                {{-- <div class="list-mode-description">
                                                     Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed...
                                                </div> --}}
                                                <div class="hover-appear">
                                                    {{-- <form action="#" method="post">
                                                        <div class="effect-ajax-cart">
                                                            <input name="quantity" value="1" type="hidden">
                                                            <button class="select-option" type="button" onclick="window.location.href='product.html'"><i class="fa fa-th-list" title="Select Options"></i><span class="list-mode">Select Option</span></button>
                                                        </div>
                                                    </form> --}}
                                                    <div class="product-ajax-qs hidden-xs hidden-sm">
                                                        <div data-handle="curabitur-cursus-dignis" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
                                                            <i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>                                                                   
                                                        </div>
                                                    </div>
                                                    {{-- <a class="wish-list" href="account.html" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a> --}}
                                                </div>
                                                </li>
                                            </ul>
                                        </div>
                                        @empty


                                        @endforelse
                                    </div>  
                                </div>                                      
                            </section>
                        </div>
                    </div>
                </div>
            </section>  
        </div>
    </div>
</div> 
@stop



@push('script')

@endpush