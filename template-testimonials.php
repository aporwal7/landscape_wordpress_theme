<?php /* Template Name: Testimonials */ 
get_header(); ?>


<div id="inner">
<?php
		while ( have_posts() ) : the_post();
		$feat_image_url_blog = wp_get_attachment_url( get_post_thumbnail_id() );
		?>
<div class="top2_wrapper">
<div class="bg1"><img src="<?php bloginfo('template_url'); ?>/images/bg1.jpg" alt="" class="img"></div>
<div class="top2_inner">
<div class="container">
<div class="top2 clearfix">
	
<h1><?php the_title(); ?></h1>
<div class="breadcrumbs1"><a href="<?php echo site_url(); ?>">Home</a><span><?php the_title(); ?></span></a></div>
</div>	
</div>	
</div>
</div>
<?php endwhile; wp_reset_query(); ?>


<div id="content">
<div class="container">
<div class="row">
<div class="span12">
	
<h2><span>Our CLients Says</span></h2>

<div class="row">
<?php
  	$loop = new WP_Query( array(
    		'showposts' => -1,
    		'post_type' => array('testimonial')
    		));
  	while ( $loop->have_posts() ) : $loop->the_post(); 
	$feat_image_url_blog = wp_get_attachment_url( get_post_thumbnail_id() );
?>
<div class="span3">
<div class="thumb2">
	<div class="thumbnail clearfix">
		<figure class=""><img src="<?php echo $feat_image_url_blog; ?>" alt=""></figure>
		<div class="caption">
			<p><b><?php the_title(); ?></b></p>
			<p><?php the_content(); ?></p>
			</div>
	</div>
</div>	
</div>
<?php endwhile; ?>
</div>
</div>
</div>
</div>	
</div>

<?php get_footer(); ?>