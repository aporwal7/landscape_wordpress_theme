<?php 
/* Template Name: Contact */
get_header();
?>

<div id="inner">
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
<div class="breadcrumbs1"><a href="<?php site_url(); ?>">Home</a><span><?php the_title(); ?></span></a></div>
</div>	
</div>	
</div>
</div>

<?php endwhile; 
wp_reset_query(); ?>

<div class="container">
    <div class="row contact">
        <div class="col-md-8">
            <div class="well well-sm">
               <?php echo do_shortcode('[contact-form-7 id="52" title="Contact form 1"]'); ?>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>LANDSCAPE ARTISAN INC.</strong><br>
                Serving San Francisco Bay Area<br>
                <abbr title="Phone">
                    P:</abbr>
                844-827-8472 
            </address>
            
            </form>
        </div>
    </div>
</div>
<div class="row">
<div class="span12">
<h2 class="contact"><span>Our Location</span></h2>
<figure class="google_map">
    <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Glasgow,&amp;aq=&amp;sll=46.975033,31.994583&amp;sspn=0.368248,0.617294&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Glasgow,+Glasgow+City,+United+Kingdom&amp;t=m&amp;ll=55.866932,-4.256344&amp;spn=0.020324,0.070896&amp;z=13&amp;output=embed"></iframe>
</figure>

</div>	
</div>
</div>	

<?php get_footer(); ?>