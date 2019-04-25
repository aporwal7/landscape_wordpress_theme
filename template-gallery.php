<?php 
/* Template Name: Gallery */
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

<section class="service py-lg-4 py-md-3 py-sm-3 py-3" id="service">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="row text-center">
            
	<?php	
	
	$args = array( 'post_type' => 'services'  );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); 
$feat_image_url_blog = wp_get_attachment_url( get_post_thumbnail_id() );
?>

<div class="col-md-3 col-sm-6 service-list-grid">
							<div class="serv-w3l-grid">
							<div class="parent" onclick="">
							<div class="child bg-one">
					<a href="<?php the_permalink(); ?>">	<img src="<?php echo $feat_image_url_blog; ?>" title="<?php the_title();  ?>"></a>
							</div>
							</div>
							</div>
							<h4 class="my-3 wow bounceIn" data-wow-delay="0.9s"><a href="<?php the_permalink(); ?>"> 
							<?php the_title();  ?> </a></h4>
							
							</div>
    <?php endwhile; ?>
         </div>
		</div>
      </section>
</div>	
</div>



<div id="footer-callout-wrap" class="clr">
	<div id="footer-callout" class="clr container">
			<div id="footer-callout-left" class="footer-callout-content clr">Total is a responsive, drag &amp; drop, flexible multipurpose WordPress theme that is perfect for any website. What's not to love? Get it today!</div>
			<div id="footer-callout-right" class="footer-callout-button wpex-clr"><a href="<?php echo site_url();?>/?page_id=47" class="theme-button" target="_blank">Get a Quote</a></div>
	</div>
</div>





<?php get_footer(); ?>