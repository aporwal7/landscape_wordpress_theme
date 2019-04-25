<?php get_header(); ?>
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
<div class="breadcrumbs1"><a href="<?php echo site_url(); ?>">Home</a><span><a href="<?php echo site_url(); ?>/?page_id=28">Blog</a></span><span><?php the_title(); ?></span></div>
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




<div class="row">
  <div class="leftcolumn">
  <?php		while ( have_posts() ) :the_post(); ?>
  
    <div class="card singlepage">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <h5><?php echo get_the_author(); ?>, <?php the_time('F j, Y') ?></h5>
      <div class=""><?php the_post_thumbnail(); ?></div>

<br>     
	 <p><?php the_content(); ?></p>
    </div>
	<?php endwhile; ?>
		  </div>
  
  <div class="rightcolumn">
    
    <div class="blogsidebar">
      
      <?php dynamic_sidebar( 'home_right_1' ); ?>
    </div>
    
  </div>
  
  
  
</div>
</div></div></div></div>

<?php get_footer(); ?>

<style>


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