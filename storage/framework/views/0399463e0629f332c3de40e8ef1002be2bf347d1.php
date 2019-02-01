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
                            <span class="page-title">Checkout</span>
                        </div>
                    </div>
                </div>
            </div>                
            <section class="content">        
                <div class="container">
                    <div class="row">
                        <hr>
                        <div class="col-md-16">
                            <?php echo Form::open(['route' => 'checkout']); ?>

                        
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

                                <div class="form-group<?php echo e($errors->has('aadhar') ? ' has-error' : ''); ?>">
                                    <?php echo Form::label('aadhar', 'Aadhar No.'); ?>

                                    <?php echo Form::text('aadhar', null, ['class' => 'form-control']); ?>

                                    <small class="text-danger"><?php echo e($errors->first('aadhar')); ?></small>
                                </div>


                                <div class="form-group">
                                    <label>Amount</label>
                                    <select class="form-control" name="amount">
                                        <option value="">Select Amount</option>
                                        <option value="10000">10000</option>
                                        <option value="25000">25000</option>
                                        <option value="50000">50000</option>
                                        <option value="100000">100000</option>
                                    </select>
                                </div>

                                <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                                    <?php echo Form::label('address', 'Address'); ?>

                                    <?php echo Form::textarea('address', null, ['class' => 'form-control']); ?>

                                    <small class="text-danger"><?php echo e($errors->first('address')); ?></small>
                                </div>
                                
                                <div class="form-group">
                                    
                                    <label><input type="checkbox" name="policy"> Click here to accept the tearms and condition.</label>
                                    
                                </div>

                                <div class="btn-group">

                                    
                                    <?php echo Form::submit("Checkout", ['class' => 'btn btn-info']); ?>

                                </div>
                            
                            <?php echo Form::close(); ?>

                        </div>
                        <div class="col-md-8">

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sn.</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Sub total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = ShoppingCart::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td>k</td>
                                        <td><?php echo e($cp->name); ?></td>
                                        <td><?php echo e($cp->price); ?></td>
                                        <td><?php echo e($cp->qty); ?></td>
                                        <td><?php echo e(number_format($cp->price*$cp->qty,2)); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                    <?php endif; ?>
                                    <tr>
                                        <td colspan="4" class="text-right">Total</td>
                                        <td><i class="fa fa-inr"></i> <?php echo e(number_format(ShoppingCart::total(),2)); ?></td>
                                    </tr>
                                </tbody>
                            </table>
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