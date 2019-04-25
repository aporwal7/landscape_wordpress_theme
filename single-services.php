<?php 
get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/photoswipe.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/default-skin.css">



<?php
		while ( have_posts() ) : the_post();
		$feat_image_url_blog = wp_get_attachment_url( get_post_thumbnail_id() );
		?>
<div class="top2_wrapper">
<div class="bg1"><img src="http://workupdates.in/landscape_wp/wp-content/uploads/2019/01/bg1.jpg" alt="" class="img"></div>
<div class="top2_inner">
<div class="container">
<div class="top2 clearfix">
<h1><?php the_title(); ?></h1>
<div class="breadcrumbs1"><a href="<?php echo site_url(); ?>">Home</a><span><a href="<?php echo site_url(); ?>/?page_id=11">Services</a></span><span><?php the_title(); ?></span></div>
</div>	
</div>	
</div>
</div>
<?php endwhile; 
wp_reset_query(); ?>

<div id="content">
<div class="container">
<div class="row">
<div class="col-md-12">
   <?php while ( have_posts() ) :the_post(); 
 $post_thumbnail_id =  get_post_meta(get_the_ID(), 'vdw_gallery_id'); ?>
 

		<div class='list-group gallery'>
            
           <?php foreach($post_thumbnail_id  as $thumb){
	  for($i=0; $i < count($thumb); $i++){?>

		   <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo wp_get_attachment_url( $thumb[$i] ); ?>">
                    <img class="img-responsive servicesgallery" alt="" src="<?php echo   wp_get_attachment_url( $thumb[$i] ); ?>" />
                </a>
            </div> <!-- col-6 / end -->
			<?php  } ?>
			<?php } endwhile; ?>
           
        </div> <!-- list-group / end -->
	</div> <!-- row / end -->

		
  
  
  
  
  
</div>
</div></div></div></div> 

<div id="footer-callout-wrap" class="clr">
	<div id="footer-callout" class="clr container">
			<div id="footer-callout-left" class="footer-callout-content clr">Total is a responsive, drag &amp; drop, flexible multipurpose WordPress theme that is perfect for any website. What's not to love? Get it today!</div>
			<div id="footer-callout-right" class="footer-callout-button wpex-clr"><a href="<?php echo site_url();?>/?page_id=47" class="theme-button" target="_blank">Get a Quote</a></div>
	</div>
</div>




<?php get_footer(); ?>

<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<style>
.gallery
{
    display: inline-block;
    margin-top: 20px;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

</style>
<script>
$(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
</script>

