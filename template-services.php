<?php 
/* Template Name: Services */
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
      <!--   <div class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3 wow fadeInDown" data-wow-delay="0.6s" >
            <h3>Services </h3>
         </div> -->
        <div class="row text-center">
            
	<?php	
							$terms = apply_filters( 'taxonomy-images-get-terms', '', array(
							'taxonomy' => 'services_category'
							) );
							if ( ! empty( $terms ) ) {
							foreach( (array) $terms as $term ) { 
							$termlink=esc_url( get_term_link( $term, $term->taxonomy ) );
							?>

							<div class="col-md-3 col-sm-6 service-list-grid">
							<div class="serv-w3l-grid">
							<div class="parent" onclick="">
							<div class="child bg-one">
							<?php echo wp_get_attachment_image( $term->image_id,'service_cat_image' ); ?>
							</div>
							</div>
							</div>
							<h4 class="my-3 wow bounceIn" data-wow-delay="0.9s"><a href="<?php echo $termlink; ?>"> <?php echo $term->name; ?> </a></h4>
							<p><?php echo wp_trim_words( $term->description, 10, '' ); ?></p>
							</div>
							<?php 	}
							}
						?>
         </div>
		</div>
      </section>







</div>	
</div>
<?php get_footer(); ?>