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
                            <a href="<?php echo e(route('welcome')); ?>" class="homepage-link" title="Back to the frontpage">Home</a>
                            <span>/</span>
                            <span class="page-title">Order now</span>
                        </div>
                    </div>
                </div>
            </div>                
            <section class="content">        
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <hr>
                            <?php if(Session::has('message')): ?>
                            <div class="alert <?php echo e(Session::get('class')); ?>">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php echo e(Session::get('message')); ?>

                            </div>
                            <?php endif; ?>
                            <?php echo Form::open(['route' => 'order.now']); ?>

                            
                                <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                    <?php echo Form::label('name', 'Name'); ?>

                                    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

                                    <small class="text-danger"><?php echo e($errors->first('name')); ?></small>
                                </div>
                                
                                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                    <?php echo Form::label('email', 'Email address'); ?>

                                    <?php echo Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'eg: foo@bar.com']); ?>

                                    <small class="text-danger"><?php echo e($errors->first('email')); ?></small>
                                </div>

                                <div class="form-group<?php echo e($errors->has('mobile') ? ' has-error' : ''); ?>">
                                    <?php echo Form::label('mobile', 'Mobile'); ?>

                                    <?php echo Form::text('mobile', null, ['class' => 'form-control']); ?>

                                    <small class="text-danger"><?php echo e($errors->first('mobile')); ?></small>
                                </div>

                                

                                <div class="form-group<?php echo e($errors->has('message') ? ' has-error' : ''); ?>">
                                    <?php echo Form::label('message', 'Address'); ?>

                                    <?php echo Form::textarea('message', null, ['class' => 'form-control','rows'=>'5']); ?>

                                    <small class="text-danger"><?php echo e($errors->first('message')); ?></small>
                                </div>

                                <div class="btn-group pull-right">
                                    
                                    <?php echo Form::submit("Order Now", ['class' => 'btn btn-success']); ?>

                                </div>
                            
                            <?php echo Form::close(); ?>


                             
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