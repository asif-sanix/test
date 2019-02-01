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
                            <span class="page-title">Your Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>        
            
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div id="page-header" class="col-md-24">
                            <h1 id="page-title">Shopping Cart</h1>
                        </div>
                        <div id="col-main" class="col-md-24 cart-page content">
                            <form action="http://demo.designshopify.com/cart" method="post" id="cartform" class="clearfix">
                                <div class="row table-cart">
                                    <div class="wrap-table">
                                        <table class="cart-items haft-border">
                                        <colgroup>
                                        <col class="checkout-image">
                                        <col class="checkout-info">
                                        <col class="checkout-price">
                                        <col class="checkout-quantity">
                                        <col class="checkout-totals">
                                        </colgroup>
                                        <thead>
                                        <tr class="top-labels">
                                            <th>
                                                Items
                                            </th>
                                            <th>
                                                Price
                                            </th>
                                            <th>
                                                Qty
                                            </th>
                                            <th>
                                                SubTotal
                                            </th>
                                            <th>
                                                &nbsp;
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = ShoppingCart::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr class="item donec-condime-fermentum">
                                            <td class="title text-left">
                                                <ul class="list-inline">
                                                    <li class="image">
                                                    <a href="product.html">
                                                    <img src="assets/images/4_0fe2529b-f7ae-4ed5-a8ff-4fae623757f9_small.jpg" alt="Donec condime fermentum">
                                                    </a>
                                                    </li>
                                                    <li class="link">
                                                    <a href="product.html">
                                                    <span class="title-5"><?php echo e($cp->name); ?></span>
                                                    </a>
                                                    <br>
                                                    
                                                    <br>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="title-1">
                                                <i class="fa fa-inr"></i> <?php echo e($cp->price); ?>

                                            </td>
                                            <td>
                                                <input class="form-control input-1 replace" maxlength="5" size="5" id="updates_3947646083" name="qty" value="<?php echo e($cp->qty); ?>">
                                            </td>
                                            <td class="total title-1">
                                                <i class="fa fa-inr"></i> <?php echo e(number_format($cp->price*$cp->qty,2)); ?>

                                            </td>
                                            <td class="action">
                                                <button type="button" onclick="window.location='<?php echo e(route('cart.item.remove',$cp->__raw_id)); ?>'"><i class="fa fa-times"></i>Remove</button>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                        <?php endif; ?>
                                        </tbody>
                                        <tfoot>
                                        <tr class="bottom-summary">
                                            <td>
                                                &nbsp;
                                            </td>
                                            <td>
                                                &nbsp;
                                            </td>
                                            <td class="update-quantities">
                                                <button type="submit" id="update-cart" class="btn btn-2" name="update">Update Qty</button>
                                            </td>
                                            <td class="subtotal title-1">
                                               <i class="fa fa-inr"></i> <?php echo e(number_format(ShoppingCart::total(),2)); ?>

                                            </td>
                                            <td>
                                                &nbsp;
                                            </td>
                                        </tr>
                                        </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div id="checkout-proceed" class="last1 text-right">
                                        <a href="<?php echo e(route('checkout')); ?>" class="btn btn-sm btn-default">Process to checkout</a>
                                    </div>
                                </div>
                                
                            </form>
                           
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