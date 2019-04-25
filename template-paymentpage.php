<?php 
/* Template Name: Payment page */
if(is_user_logged_in()){
$userid =  get_current_user_id();

get_header(); ?>
<?php
								while ( have_posts() ) : the_post();
								$feat_image_url_blog = wp_get_attachment_url( get_post_thumbnail_id() );
					   ?>
<div class="top2_wrapper">
<div class="bg1"><img src="<?php echo $feat_image_url_blog; ?>" alt="" class="img"></div>
<div class="top2_inner">
<div class="container">
<div class="top2 clearfix">
<h1><?php the_title(); ?></h1>
<div class="breadcrumbs1"><a href="<?php echo site_url(); ?>">Home</a><span><?php the_title(); ?></span></a></div>
</div>	
</div>	
</div>
</div>
<?php endwhile; 
wp_reset_query(); ?>

<div id="content">
<div class="container">
<div class="row">
<div class="span12">
		<?php
		// while ( have_posts() ) : the_post();
		// $feat_image_url_blog = wp_get_attachment_url( get_post_thumbnail_id() );
		// ?>
		 <?php //the_content(); ?>
		 <?php // endwhile; 
		// wp_reset_query(); ?>
		<ul class="afterlogin_page">
		<li><a href="<?php echo site_url();?>/?page_id=178">Payment System</a></li>
		<li><a href="<?php echo site_url();?>/?page_id=338">Payment History</a></li>
		<li><a href="<?php echo wp_logout_url(); ?>">Logout</a></li>
		
		
		
		</ul>
		<form class="paypal" action="<?php echo site_url(); ?>/paypal/payments.php" method="post" id="paypal_form" class="paymentform">
        <input type="hidden" name="cmd" value="_xclick" />
        <input type="hidden" name="no_note" value="1" />
        <input type="hidden" name="lc" value="UK" />
        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
        <input type="hidden" name="userid" value="<?php echo $userid; ?>" />
        <input type="text" name="first_name" placeholder="First Name" class="form-control" required />
        <input type="text" name="last_name"  placeholder="Last Name" class="form-control" required />
        <input type="email" name="payer_email"  placeholder="Payer Email" class="form-control" required />
        <input type="hidden" name="item_number" value="123456" placeholder="Payment Amount" class="form-control" required / >
        <input type="text" name="amount" placeholder="Amount" class="form-control" required / >
        <textarea name="description"  placeholder="Payment Description" class="form-control"  required></textarea>
        <input type="submit" name="submit" value="Submit Payment" class="btn "/>
    </form>
		<div class="payment_image"><img src="<?php bloginfo('template_url'); ?>/images/paypal.png" alt=""></div>
		
		
</div>
	
</div>





</div>	
</div>
<?php get_footer(); }else{
	header('Location:https://workupdates.in/landscape_wp/wp-admin');
	
	
}?>