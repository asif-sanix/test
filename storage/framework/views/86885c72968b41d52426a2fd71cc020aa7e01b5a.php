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
                            <span class="page-title">About Us</span>
                        </div>
                    </div>
                </div>
            </div>                
            <section class="content">        
                <div class="container">
                    <div class="row">
                        <div id="page-header">
                            <h1 id="page-title">About Us</h1>
                        </div>
                        <div id="col-main" class="col-md-24 normal-page clearfix">
                            <div class="page about-us ">
                                <p>
                                    <img src="assets/images/banner.png" alt=""/>
                                </p>
                                <br>
                                <p>
                                    The About Us page of your shop is vital because it’s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it’s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:
                                </p>
                                <ul>
                                    <li><i class="fa fa-check"></i>Who you are</li>
                                    <li><i class="fa fa-check"></i>Why you sell the items you sell</li>
                                    <li><i class="fa fa-check"></i>Where you are located</li>
                                    <li><i class="fa fa-check"></i>How long you have been in business</li>
                                    <li><i class="fa fa-check"></i>How long you have been running your online shop</li>
                                    <li><i class="fa fa-check"></i>Who are the people on your team</li>
                                    <li><i class="fa fa-check"></i>Contact information</li>
                                    <li><i class="fa fa-check"></i>Social links (Twitter, Facebook)</li>
                                </ul>
                                <p>
                                    To edit the content on this page, go to the <a href="index-3.html">Pages</a> section of your admin.
                                </p>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur ut labore et dolore magnam aliquam quaerat voluptatem
                                </p>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur
                                </p>
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