<?php 
/* Template Name: Payment History */
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
		
		
		<?php
		global $wpdb;
		 
$results = $wpdb->get_results( "SELECT * FROM `payments` WHERE `userid` = '".$userid."'"); 
if(!empty($results))                        
{  
      
     echo "<table width='100%' border='1'>";
     echo "<tbody><tr>	<th style='text-align:center;'>Transaction Id</th><th style='text-align:center;'>Amonut</th><th style='text-align:center;'>Date</th></tr>";
    foreach($results as $row){   
                
    echo "<tr><td align='center'>" . $row->txnid . "</td><td align='center'>" . $row->payment_amount . "</td><td align='center'>" . $row->createdtime . "</td></tr>";
        }
    echo "</tbody>";
    echo "</table>"; 

}
		?>
		
		
</div>
	
</div>





</div>	
</div>
<?php get_footer(); }else{
	header('Location:https://workupdates.in/landscape_wp/wp-admin');
	
	
}?>