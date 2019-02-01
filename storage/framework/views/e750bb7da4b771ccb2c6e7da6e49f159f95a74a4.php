<?php $__env->startPush('style'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div id="content-wrapper-parent">
    <div id="content-wrapper">  
        <!-- Main Slideshow -->
        <div class="home-slider-wrapper clearfix">
            <div class="camera_wrap" id="home-slider">
                <div data-src="assets/images/slide-image-1.jpg">
                    
                    
                    
                </div>
                <div data-src="assets/images/slide-image-2.jpg">
                    
                </div>
                <div data-src="assets/images/slide-image-3.jpg">
                   
                </div>
            </div>
        </div> 
        <!-- Content -->
        <div id="content" class="clearfix">                       
            <section class="content">  
                <div id="col-main" class="clearfix">
                    
                    <div class="home-newproduct">
                        <div class="container">
                            <div class="group_home_products row">
                                <div class="col-md-24">
                                    <div class="home_products">
                                        <h6 class="general-title">New Products</h6>
                                        <div class="home_products_wrapper">
                                            <div id="home_products">
                                                <?php $__empty_1 = true; $__currentLoopData = App\Product::limit(6)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>             
                                                <div class="element no_full_width col-md-8 col-sm-8 not-animated" data-animate="fadeInUp" data-delay="1">
                                                    <ul class="row-container list-unstyled clearfix">
                                                        <li class="row-left">
                                                        <a href="<?php echo e(route('product.detail',$p->slug)); ?>" class="container_item">
                                                        <img src="<?php echo e($p->image); ?>" class="img-responsive" alt="Curabitur cursus dignis">
                                                        </a>
                                                        <div class="hbw">
                                                            <span class="hoverBorderWrapper"></span>
                                                        </div>
                                                        </li>
                                                        <li class="row-right parent-fly animMix">
                                                        <div class="product-content-left">
                                                            <a class="title-5" href="<?php echo e(route('product.detail',$p->slug)); ?>"><?php echo e($p->name); ?></a>
                                                            <span class="spr-badge" id="spr_badge_12932396193" data-rating="0.0">
                                                            <span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
                                                            <span class="spr-badge-caption">
                                                            No reviews </span>
                                                            </span>
                                                        </div>
                                                        <div class="product-content-right">
                                                            <div class="product-price">
                                                                <span class="price">
                                                                <i class="fa fa-inr"></i> <?php echo e($p->price); ?> </span>
                                                            </div>
                                                        </div>
                                                        <div class="list-mode-description">
                                                             <?php echo e($p->desc); ?>

                                                        </div>
                                                        <div class="hover-appear">
                                                            <form action="<?php echo e(route('cart.add',$p->id)); ?>" method="get">
                                                                
                                                                <div class="effect-ajax-cart">
                                                                    <input type="hidden" name="quantity" value="1">

                                                                    <button class="add-to-cart" type="submit" name="add"><i class="fa fa-shopping-cart"></i><span class="list-mode">Add to Cart</span></button>
                                                                </div>
                                                            </form>
                                                            
                                                            <a class="wish-list" href="<?php echo e(route('add.wishlist',$p->id)); ?>" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
                                                        </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                                <?php endif; ?>            
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
                                <img class="pulse img-banner-caption" src="assets/images/home_banner_image_text.png" alt="">
                                <div class="home-banner-caption">
                                    
                                </div>
                                <div class="home-banner-action">
                                    
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
                                        <a href="collection.html"><img src="assets/images/home_bottom_banner.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="home-blog-wrapper col-md-12">
                                    <div id="home_blog" class="home-blog">
                                        <?php $__empty_1 = true; $__currentLoopData = App\News::limit(3)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <div class="home-blog-item row">
                                            <div class="date col-md-4">
                                                <div class="date_inner">
                                                    <p>
                                                        <small><?php echo e($n->created_at->format('M')); ?></small><span><?php echo e($n->created_at->format('d')); ?></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="home-blog-content col-md-20">
                                                <h4><a href="article-left.html"><?php echo e($n->title); ?></a></h4>
                                                <ul class="list-inline">
                                                    <li class="author"><i class="fa fa-user"></i> <?php echo e($n->user->name); ?></li>
                                                    <li>/</li>
                                                    <li class="comment">
                                                    <a href="article-left-2.html">
                                                    <span><i class="fa fa-pencil-square-o"></i> 0</span> Comments </a>
                                                    </li>
                                                </ul>
                                                <div class="intro">
                                                    <?php echo e($n->desc); ?>

                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                        <?php endif; ?>
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
                                                <?php $__empty_1 = true; $__currentLoopData = App\Product::limit(4)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>                                                                           
                                                <div class="element no_full_width not-animated" data-animate="fadeInUp" data-delay="200">
                                                    <ul class="row-container list-unstyled clearfix">
                                                        <li class="row-left">
                                                        <a href="<?php echo e(route('product.detail',$p->slug)); ?>" class="container_item">
                                                        <img src="<?php echo e($p->image); ?>" class="img-responsive" alt="Curabitur cursus dignis">
                                                        </a>
                                                        <div class="hbw">
                                                            <span class="hoverBorderWrapper"></span>
                                                        </div>
                                                        </li>
                                                        <li class="row-right parent-fly animMix">
                                                        <div class="product-content-left">
                                                            <a class="title-5" href="<?php echo e(route('product.detail',$p->slug)); ?>"><?php echo e($p->name); ?></a>
                                                            <span class="spr-badge" id="spr_badge_1293239619" data-rating="0.0">
                                                            <span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
                                                            <span class="spr-badge-caption">
                                                            No reviews </span>
                                                            </span>
                                                        </div>
                                                        <div class="product-content-right">
                                                            <div class="product-price">
                                                                <span class="price">
                                                                <i class="fa fa-inr"></i> <?php echo e($p->price); ?> </span>
                                                            </div>
                                                        </div>
                                                        <div class="list-mode-description">
                                                             <?php echo e($p->desc); ?>

                                                        </div>
                                                        <div class="hover-appear">
                                                            <form action="<?php echo e(route('cart.add',$p->id)); ?>" method="get">
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
                                                            
                                                            <a class="wish-list" href="<?php echo e(route('add.wishlist',$p->id)); ?>" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
                                                        </div>
                                                        </li>
                                                    </ul>
                                                </div>            
                                                
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                                <?php endif; ?>                                    
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
                                            <div class="logo text-center not-animated" data-animate="bounceIn" data-delay="150">
                                                <a class="animated" href="collection.html">
                                                <img class="pulse" src="assets/images/partners_logo_1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="logo text-center not-animated" data-animate="bounceIn" data-delay="300">
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
                                            </div>
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
<?php $__env->stopSection(); ?>



<?php $__env->startPush('script'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('master.common', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>