<?php get_header(); ?>
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

<div id="slider4_wrapper">
<div class="slider4_title"><span>Our Team</span></div>	
<div id="slider4">
<div class="carousel-box row">
	<div class="inner span12">			
		<div class="carousel main">
			<ul>
			 <?php 
						$loop = new WP_Query( array('post_type' => 'team','order'=> 'DESC', 'posts_per_page' => -1));
					while ( $loop->have_posts() ) : $loop->the_post();  
					$feat_image_url_blog1 = wp_get_attachment_url( get_post_thumbnail_id() );
 				?>
			
				<li>
					<div class="team">
						<div class="team_inner">
							<a href="#">
								<figure><img src="<?php echo $feat_image_url_blog1; ?>" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1"><?php the_title(); ?></div>
									<div class="txt2"><?php the_content(); ?></div>
								</div>																
							</a>
						</div>						
					</div>
				</li>
				
				<?php endwhile; ?>
				
				
			</ul>
		</div>
	</div>
</div>
</div>
</div>



</div>	
</div>
<?php get_footer(); ?>