<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 

<div id="inner">
<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>

<div class="top2_wrapper">
<div class="bg1"><img src="<?php bloginfo('template_url'); ?>/images/bg1.jpg" alt="" class="img"></div>
<div class="top2_inner">
<div class="container">
<div class="top2 clearfix">
<h1><?php $obj = get_queried_object(); echo $obj->name; ?></h1>
<div class="breadcrumbs1"><a href="<?php echo site_url(); ?>">Home</a><span></span><?php $obj = get_queried_object(); echo $obj->name; ?></div>
</div>	
</div>	
</div>
</div>
<?php endif; ?>
<div id="content">
<div class="container">
<div class="row">
<div class="span12">
<?php
 if ( category_description() ) : ?>
<p><span><?php echo category_description(); ?></span></p>
<?php endif; ?>

<div id="slider4_wrapper">
<div class="slider4_title"><span>Some projects which we have done successfully</span></div></div>

<ul class="thumbnails" id="isotope-items">		  
   <?php
 while ( have_posts() ) : the_post();
$feat_image_url_blog = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
   <li class="span4 isotope-element isotope-filter1 categorypage">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<figure>
				<a href="<?php the_permalink(); ?>"><img src="<?php echo $feat_image_url_blog; ?>"></a>
				</figure>
				<div class="caption">							
						<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					</div>
								
			</div>
		</div>
    </li>
    <?php endwhile; ?>
</ul>
</div>	
</div>
</div>	
</div>



<?php get_footer(); ?>