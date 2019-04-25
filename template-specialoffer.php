<?php
/* Template Name: Special Offer */
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
		while ( have_posts() ) : the_post();
		$feat_image_url_blog = wp_get_attachment_url( get_post_thumbnail_id() );
		?>
		<?php the_content(); ?>
		<?php endwhile; 
		wp_reset_query(); ?>
</div>
	
</div>

</div>	
</div>
<?php get_footer(); ?>