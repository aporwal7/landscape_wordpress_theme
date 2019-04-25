<!DOCTYPE html>
<html lang="en">
<head>
<title>Landscape Artisan INC</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Ankur">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-responsive.css" type="text/css" media="screen">  
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
<link rel="stylesheet" href="https://p.w3layouts.com/demos_new/template_demo/29-09-2018/molten_demo_Free/2099708735/web/css/fontawesome-all.min.css" type="text/css" media="screen">  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/camera.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" media="screen">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>  
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/superfish.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/camera.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.mobile.customized.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.touchSwipe.min.js"></script>

<?php if (is_front_page()){ ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/homepage.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.caroufredsel.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.min.css">


<?php } ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/v4-shims.css">


</head>

<body class="front" data-spy="scroll">
<div id="main">

<div class="">
<div class="top1_bar">
<div class="top_strip_logo">
<a href="<?php echo site_url(); ?>"><img src="<?php echo ot_get_option('logo'); ?>"></a>
</div>

<div class="top1_bar_right">
<div class="contactno">
<i class="fas fa-phone"></i>&nbsp;&nbsp;<a href="callto:8448278472">844-827-8472</a>
</div>

<div class="login_btn">
<a href="<?php echo site_url(); ?>/wp-admin" >Login</a>
</div>

<div class="language">
<?php echo do_shortcode('[gtranslate]'); ?>


<!--<select>
  <option value="">Select Language</option>
  <option value="english">English</option>
  <option value="Afrikaans">Afrikaans</option>
  <option value="Albanian">Albanian</option>
</select>-->
</div>
</div>
<!-- <div class="search_top"> -->
<!-- <input type="" placeholder="Search"> -->
<!-- </div> -->

</div>





<div class="top1_wrapper" id="header_menu_fix">
<div class="top1 clearfix">
	


<div class="menu_wrapper clearfix" id="header-fix">
<div class="navbar navbar_">
	<div class="navbar-inner navbar-inner_">
		<a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<div class="nav-collapse nav-collapse_ collapse">
			<?php        
									wp_nav_menu( array(
			'theme_location'  => 'header-menu',
            'menu'            => 'header-menu',
            'container'       => 'div',
            'container_class' => 'menu_wrap',
            'menu_class'      => 'nav sf-menu',
            'echo'            => true,
            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
            'depth'           => 2
		 ) );
		?>
			
		<!-- <ul class="nav sf-menu clearfix">
			<li class="active"><a href="#">Home </a></li>
			<li><a href="#">About Us </a></li>
			<li><a href="#">Services </a></li>
			<li class="sub-menu sub-menu"><a href="#">Case study <em></em></a>
			<ul>
			<li><a href="#">Image gallery</a></li>
			<li><a href="#">Video gallery</a></li>
			</ul>
			</li>
			<li><a href="#">Suppliers </a></li>	
			<li><a href="#">Faq </a></li>	
			<li><a href="#">Testimonial  </a></li>	
			<li class="sub-menu sub-menu"><a href="#">Packages<em></em></a>
			<ul>
			<li><a href="#">Payment system</a></li>
			<li><a href="#">Special offer</a></li>
			</ul>
			</li>		
			<li><a href="#">blog  </a></li>	
			<li><a href="#">Contact us </a></li>										
	</ul>	-->					
										
    
		</div>
	</div>
</div>
 <div id="search">
	
<a href="#" class="searchBtn"></a>

<div class="search-form-wrapper">





<form id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="GET" accept-charset="utf-8" class="navbar-form" >
	<input type="text" name="s" value='Search' onBlur="if(this.value=='') this.value='Search'" onFocus="if(this.value =='Search' ) this.value=''">
	<input type="submit" class="submit" name="submit" id="searchsubmit" value="" />
	
</form>	
</div>

</div> 
</div>

</div>	
</div>
</div>