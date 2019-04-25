<?php 
/* Template Name: Home */
get_header(); ?>

<div id="inner">
<div class="find_wrapper">
<div class="find_inner">
<div class="find">


<?php echo  get_field( "slider_welcome_text", 5 ); ?>
</div>	
</div>
<div id="slider_wrapper">
	<div id="slider" class="clearfix">
		<div id="camera_wrap">
		<?php
  	$loop = new WP_Query( array(
    		'showposts' => -1,
    		'post_type' => array('slider')
    		));
  	while ( $loop->have_posts() ) : $loop->the_post(); 
	$feat_image_url_blog = wp_get_attachment_url( get_post_thumbnail_id() );	
?>
			<div data-src="<?php echo $feat_image_url_blog; ?>"></div>
			<?php endwhile; wp_reset_query(); ?>
			
			
		</div>	
	</div>		
</div>	
</div>
<div class="company_intro">
<div class="container py-lg-5 py-md-5 py-sm-4 py-3">
<div class="row abt-colm">
            <div class="col-lg-6 agile-info-img wow fadeInLeft" data-wow-delay="1s">
               <div class="row stats-info mb-lg-4 mb-3 text-center">
                  <div class="col-md-4 col-sm-4 stats-grid-2">
                     <div class=" stats-grid">
                        <div class="counter"><?php echo  get_field( "years", 5 ); ?></div>
                        <div class="stat-info">
                           <h5 class="pt-2"> Years<br>Experence</h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-4 stats-grid-3">
                     <div class=" stats-grid">
                        <div class="counter"><?php echo  get_field( "awards", 5 ); ?></div>
                        <div class="stat-info">
                           <h5 class="pt-2">Awards<br>Nominees</h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-4 stats-grid-4">
                     <div class=" stats-grid">
                        <div class="counter"><?php echo  get_field( "projects", 5 ); ?></div>
                        <div class="stat-info">
                           <h5 class="pt-2">Our<br>Pojects </h5>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="video-left-w3l" id="video">
	 	   <iframe src="https://www.youtube.com/embed/fyQCP5mixnU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
				<!--   <iframe src="https://player.vimeo.com/video/6601491" allowfullscreen=""></iframe> 
			   
                  <iframe src="<?php // echo  get_field( 'video_url', 5 ); ?>" allowfullscreen=""></iframe> -->
               </div>
            </div>
            <div class="col-lg-6 agile-abt-info wow fadeInRight" data-wow-delay="1s">
              

			<?php echo  get_field( "right_side_content", 5 ); ?>
			   
			   
			   
            </div>
         </div>
</div>
</div>
<section class="service py-lg-4 py-md-3 py-sm-3 py-3" id="service">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
         <div class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3 wow fadeInDown" data-wow-delay="0.6s" >
            <h3>Services </h3>
         </div>
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
							<p><?php echo wp_trim_words( $term->description, 20, '' ); ?></p>
							</div>
							<?php 	}
							}
						?>
         </div>
		</div>
      </section>


<div class="container-fluid white_bg about_boder_bt padding_btm_60">
<div class="container">
	<div class="row">
        <div class="col-md-12">
        	<div class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3 wow fadeInDown" data-wow-delay="0.6s" >
            <h3>LATEST Projects</h3>
         </div>
        </div>    
        	<?php	
			$loop = new WP_Query( array(
    		'showposts' => 6,
    		'post_type' => array('services')
    		));$i=1;
			while ( $loop->have_posts() ) : $loop->the_post(); 
			$feat_image_url_blog = wp_get_attachment_url( get_post_thumbnail_id() );
			
			 ?>
		<div class="col-md-4 no_padding">
			<div id="work_0<?php echo $i; ?>">
            	<div class="work" id="wrk_0<?php echo $i; ?>">
<img src="<?php echo $feat_image_url_blog; ?>" style="width:380px;height: 347px;"></div>
                <div class="work_hover_<?php echo $i; ?>" style="display: none;">
                	<p class="sln_heading"> <a href="<?php the_permalink(); ?>">  <?php the_title(); ?> </a></p>
                </div>
        	</div>
			     </div>
				 <?php $i++; endwhile; ?>
			
     </div>
</div>
</div>
<div class="testimonial_site">
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 test_slider_site">
            <div id="testimonial-slider" class="owl-carousel">
               
<?php
  	$loop = new WP_Query( array(
    		'showposts' => -1,
    		'post_type' => array('testimonial')
    		));
  	while ( $loop->have_posts() ) : $loop->the_post(); ?>
			   <div class="testimonial">
                    <div class="pic">
                       <?php the_post_thumbnail(); ?>
                    </div>
                    <p class="description">
                       <?php the_content(); ?>
                    </p>
                    <h3 class="title"><?php the_title(); ?>
                        <span class="post"> - <?php echo get_field( "position" ); ?></span>
                    </h3>
                </div> 
			<?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div></div>
<?php get_footer(); ?>
