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
                            <a href="http://demo.designshopify.com/" class="homepage-link" title="Back to the frontpage">Home</a>
                            <span>/</span>
                            <span class="page-title">Contact</span>
                        </div>
                    </div>
                </div>
            </div>               
            <section class="content">    
                <div class="container">
                    <div class="row">
                        <div id="page-header">
                            <h1 id="page-title">Contact Page</h1>
                        </div>
                    </div>
                </div>
                <div id="col-main" class="contact-page clearfix">
                    <div class="group-contact clearfix">
                        <div class="container">
                            <div class="row">
                                <div class="left-block col-md-12">
                                    <form method="post" action="<?php echo e(route('contact')); ?>" class="contact-form" accept-charset="UTF-8">
                                        <?php echo e(csrf_field()); ?>

                                        <ul id="contact-form" class="row list-unstyled">
                                            <li class="">
                                            
                                            </li>
                                            <li class="">
                                            <label class="control-label" for="name">Your Name</label>
                                            <input type="text" id="name" value="" class="form-control" name="name">
                                            </li>
                                            <li class="clearfix"></li>
                                            <li class="">
                                            <label class="control-label" for="mobile">Mobile <span class="req">*</span></label>
                                            <input type="mobile" id="mobile" value="" class="form-control mobile" name="mobile">
                                            </li>
                                            <li class="clearfix"></li>
                                            <li class="">
                                            <label class="control-label" for="email">Your Email <span class="req">*</span></label>
                                            <input type="email" id="email" value="" class="form-control email" name="email">
                                            </li>
                                            <li class="clearfix"></li>
                                            <li class="">
                                            <label class="control-label" for="message">Your Message <span class="req">*</span></label>
                                            <textarea id="message" rows="5" class="form-control" name="message"></textarea>
                                            </li>
                                            <li class="clearfix"></li>
                                            <li class="unpadding-top">
                                            <button type="submit" class="btn">Submit Contact</button>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                                <div class="right-block contact-content col-md-12">
                                    <h6 class="sb-title"><i class="fa fa-home"></i> Contact Information</h6>
                                    
                                    <ul class="right-content">
                                        <li class="title">
                                        <h6>Follow Us on</h6>
                                        </li>
                                        <li class="facebook"><a href="#"><span class="fa-stack fa-lg btooltip" title="" data-original-title="Facebook"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-inverse fa-stack-1x"></i></span></a></li>
                                        <li class="twitter"><a href="#"><span class="fa-stack fa-lg btooltip" title="" data-original-title="Twitter"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-inverse fa-stack-1x"></i></span></a></li>
                                        <li class="google-plus"><a href="#"><span class="fa-stack fa-lg btooltip" title="" data-original-title="Google plus"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-google-plus fa-inverse fa-stack-1x"></i></span></a></li>
                                        <li class="pinterest"><a href="#"><span class="fa-stack fa-lg btooltip" title="" data-original-title="Pinterest"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-pinterest fa-inverse fa-stack-1x"></i></span></a></li>
                                    </ul>
                                </div>
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