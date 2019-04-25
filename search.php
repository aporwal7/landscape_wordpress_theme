<?php
get_header();
global $wp_query;
?>

<div class="top2_wrapper">
<div class="bg1">
<img src="http://workupdates.in/landscape_wp/wp-content/uploads/2019/01/bg1.jpg" alt="" class="img"></div>
<div class="top2_inner">
<div class="container">
<div class="top2 clearfix">
<h1>Number of Results Found:<?php echo $wp_query->found_posts; ?> </h1>
</div>	
</div>	
</div>
</div>


<div id="content">
<div class="container">
<div class="row">
<div class="span12">
<div class="content-area">
        <div class="container">
            <div class="row">
            <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post();

			$feat_image_url_blog = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
			<div class="entry-post wow fadeInUp animated" style="visibility: visible;">
                  <div class="entry-header">
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <figure><?php the_post_thumbnail(); ?></figure>
                  </div><!--entry-header-->
                  <div class="entry-info"> 
                    <span class="post-date"> Posted by <a style="color:green;" href="#"><?php echo get_author_name(); ?></a> on <?php echo get_the_date( 'l F j, Y' ); ?> </span>
                    
                  </div><!--entry-info-->
                  <div class="entry-summary">
                    <p></p><p><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?> </p>
<p></p>
                    <a href="<?php the_permalink(); ?>" class="btn effect">READ MORE</a>
                  </div><!--entry-summary-->
                </div>
				
				<?php endwhile; ?>
				<?php endif; ?>
 </div>
      </div></div></div></div></div></div>

         
<?php get_footer(); ?>