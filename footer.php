<div class="bot1_wrapper">
<div class="container">
<div class="bot1 clearfix">
<div class="row">
<div class="span3">
<div class="bot1_title">Copyright</div>	
<div class="logo2_wrapper"><a href="#" class="logo2"><img src="<?php echo ot_get_option('logo'); ?>" alt=""></a></div>
<footer><div class="copyright"> <?php echo ot_get_option('copyright'); ?></div></footer>
</div>	
<div class="span3">
<div class="bot1_title">Footer Menu</div>

      <?php dynamic_sidebar( 'footer1' ); ?>
 <?php dynamic_sidebar( 'footer2' ); ?>
<?php /* <ul class="footer_menu1">
<li><a href="">Home</a></li>
<li><a href="">About Us</a></li>
<li><a href="">Services </a></li>
<li><a href="">Case study </a></li>
<li><a href="">Image gallery</a></li>
<li><a href="">Video gallery</a></li>
<li><a href="">Suppliers</a></li>
</ul>


      <?php dynamic_sidebar( 'footer2' ); ?>

<ul class="footer_menu2">
<li><a href="">Faq </a></li>
<li><a href="">Testimonial </a></li>
<li><a href="">Packages</a></li>
<li><a href="">Payment system</a></li>
<li><a href="">Special offer </a></li>
<li><a href="">blog  </a></li>
<li><a href="">Contact us</a></li>
</ul>
*/ ?>


</div>
<div class="span3">
<div class="bot1_title">Online Payment</div>
<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/paypal.png" class="paypal_img" alt="paypal-image"></a>
</div>
<div class="span3">
<div class="bot1_title">Follow Us</div>
<div class="social_wrapper">
	<ul class="social clearfix">    
    <li><a href="<?php echo ot_get_option('facebook'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/social_ic1.png"></a></li>
    <li><a href="<?php echo ot_get_option('google_plus'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/social_ic2.png"></a></li>
    <li><a href="<?php echo ot_get_option('inkedin'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/social_ic3.png"></a></li>
    <li><a href="<?php echo ot_get_option('twitter'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/social_ic4.png"></a></li>
    <li><a href="<?php echo ot_get_option('youtube'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/social_ic5.png"></a></li>
    <li><a href="<?php echo ot_get_option('pininterest'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/social_ic6.png"></a></li>
	</ul>
</div>
</div>
</div>	
</div>	
</div>	
</div>
</div>	
</div>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
<?php if (is_front_page()){ ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 <script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1300,1],
        itemsDesktopSmall:[1200,1],
        itemsTablet:[768,1],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        autoPlay:true
    });
});
</script>

<?php } ?>

<script>
window.onscroll = function() {myFunction()};
var header = document.getElementById("header-fix");
var sticky = header.offsetTop;
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("f");
  } else {
    header.classList.remove("f");
  }
}
$(function()
{
    new WOW().init();
});
</script>
<script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
</body>
</html>