<?php $__env->startPush('style'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
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
                            <span class="page-title"><?php echo e($detail->name); ?></span>
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
                                        <span itemprop="name"><?php echo e($detail->name); ?></span>
                                    </h1>
                                    <div id="product-image" class="product-image row ">     
                                        <div id="detail-left-column" class="hidden-xs left-coloum col-sm-6 col-sm-6 fadeInRight not-animated" data-animate="fadeInRight">
                                            <div id="gallery_main" class="product-image-thumb thumbs full_width ">
                                               
                                            </div>
                                        </div>      
                                        <div class="image featured col-smd-12 col-sm-12 fadeInUp not-animated" data-animate="fadeInUp"> 
                                            <img src="<?php echo e($detail->image); ?>" alt="Donec condime fermentum">
                                        </div>
                                        <div id="gallery_main_mobile" class="visible-xs product-image-thumb thumbs mobile_full_width ">
                                            <ul style="opacity: 0; display: block;" class="slide-product-image owl-carousel owl-theme">
                                                <li class="image">
                                                    <a href="assets/images/4_0fe2529b-f7ae-4ed5-a8ff-4fae623757f9_1024x1024.jpg" class="cloud-zoom-gallery active">
                                                        <img src="<?php echo e(url('assets/images/4_0fe2529b-f7ae-4ed5-a8ff-4fae623757f9_compact.jpg')); ?>" alt="Donec condime fermentum">
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                        </div>        
                                              
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
                                                
                                            </div>          
                                            <div id="product-info-right">     
                                                <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="col-sm-24 group-variants">
                                                    <meta itemprop="priceCurrency" content="USD">              
                                                    <link itemprop="availability" href="http://schema.org/InStock">
                                                    <form action="<?php echo e(route('cart.add',$detail->id)); ?>"  class="variants" id="product-actions">
                                                        <div id="product-actions-1293235843" class="options clearfix">
                                                            <style scoped>
                                                              label[for="product-select-option-0"] { display: none; }
                                                              #product-select-option-0 { display: none; }
                                                              #product-select-option-0 + .custom-style-select-box { display: none !important; }
                                                            </style>                                                                
                                                            
                                                           
                                                            
                                                            <div id="purchase-1293235843">
                                                                <div class="detail-price" itemprop="price">
                                                                    <span class="price"><i class="fa fa-inr"></i> <?php echo e($detail->price); ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="others-bottom clearfix">
                                                                
                                                                <button id="add-to-cart" class="btn btn-1 add-to-cart" data-parent=".product-information" type="submit" name="add">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="wls">
                                                        <a class="wish-list" href="<?php echo e(route('add.wishlist',$detail->id)); ?>"><i class="fa fa-heart"></i> Wish list</a>
                                                        <span>|</span>
                                                        <a href="mailto:contact@alankarjewellery.com"><i class="fa fa-envelope"></i> SEND EMAIL</a>
                                                    </div>                                          
                                                </div>                        
                                                <ul id="tabs_detail" class="tabs-panel-detail hidden-xs hidden-sm">
                                                    
                                                    <li>
                                                        <h5><a href="#pop-two" class="fancybox">Shipping &amp; Returns</a></h5>
                                                    </li>
                                                    
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
                                                
                                    </div>              
                                </div>
                            </div>         
                            <!-- Related Products -->
                            <section class="rel-container clearfix">  
                                <h6 class="general-title text-left">You may also like the related products</h6>
                                <div id="prod-related-wrapper">
                                    <div class="prod-related clearfix">
                                        <?php $__empty_1 = true; $__currentLoopData = App\Product::where('name','%'.'LIKE'.'%')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <div class="element no_full_width not-animated" data-animate="bounceIn" data-delay="1000">
                                            <ul class="row-container list-unstyled clearfix">
                                                <li class="row-left">
                                                <a href="product.html" class="container_item">
                                                <img src="<?php echo e($pro->image); ?>" class="img-responsive" alt="Product full width">
                                                
                                                </a>
                                                <div class="hbw">
                                                    <span class="hoverBorderWrapper"></span>
                                                </div>
                                                </li>
                                                <li class="row-right parent-fly animMix">
                                                <div class="product-content-left">
                                                    <a class="title-5" href="product.html"><?php echo e($pro->name); ?></a>
                                                    <span class="spr-badge" id="spr_badge_1293240771" data-rating="0.0">
                                                    <span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
                                                    <span class="spr-badge-caption">
                                                    No reviews </span>
                                                    </span>
                                                </div>
                                                <div class="product-content-right">
                                                    <div class="product-price">
                                                        <span class="price_sale"><i class="fa fa-img"></i> <?php echo e($pro->price); ?></span>
                                                        <del class="price_compare"> </del>
                                                    </div>
                                                </div>
                                                
                                                <div class="hover-appear">
                                                    
                                                    <div class="product-ajax-qs hidden-xs hidden-sm">
                                                        <div data-handle="curabitur-cursus-dignis" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
                                                            <i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>                                                                   
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>


                                        <?php endif; ?>
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
<?php $__env->stopSection(); ?>



<?php $__env->startPush('script'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('master.common', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>