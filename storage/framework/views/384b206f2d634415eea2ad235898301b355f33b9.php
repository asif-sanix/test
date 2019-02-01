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
                            <span class="page-title">Create Account</span>
                        </div>
                    </div>
                </div>
            </div>              
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div id="page-header" class="col-md-24">
                            <h1 id="page-title">Register</h1> 
                        </div>
                        <div id="col-main" class="col-md-24 register-page clearfix">
                            <form method="post" action="<?php echo e(route('register')); ?>" id="create_customer" accept-charset="UTF-8">
                                <?php echo e(csrf_field()); ?>

                                <input value="create_customer" name="form_type" type="hidden"><input name="utf8" value="✓" type="hidden">
                                <ul id="register-form" class="row list-unstyled">
                                    <div class="clearfix"></div>
                                    <li id="last_namef">
                                    <label class="control-label" for="last_name">Name</label>
                                    <input name="name" id="last_name" class="form-control " type="text">
                                    </li>
                                    <li class="clearfix"></li>
                                    <li id="emailf" class="">
                                    <label class="control-label" for="email">Your Email <span class="req">*</span></label>
                                    <input name="email" id="email" class="form-control " type="email">
                                    </li>
                                    <li class="clearfix"></li>
                                    <li id="passwordf" class="">
                                    <label class="control-label" for="password">Your Password <span class="req">*</span></label>
                                    <input value="" name="password" id="password" class="form-control password" type="password">
                                    </li>
                                    <li class="">
                                    <label class="control-label" for="password">Confirm Password <span class="req">*</span></label>
                                    <input value="" name="password_confirmation" id="password" class="form-control password" type="password">
                                    </li>
                                    <li class="clearfix"></li>
                                    <li class="unpadding-top action-last">
                                    <button class="btn" type="submit">Create an Account</button>
                                    </li>
                                </ul>
                            </form>
                        </div>   
                    </div>
                </div>
            </section>        
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.common', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>