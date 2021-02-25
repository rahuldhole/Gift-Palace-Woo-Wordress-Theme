<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">


<footer class="pt-4 my-md-5 pt-md-5 border-top" style="background-color:#f7f2f2">
	<div class="container-fluid">
        <div class="row">
			<div class="col-6 col-md">
				<h5 style="">Contact</h5>
				<ul class="list-unstyled text-small"  style="text-align:left">
					<li style="padding-bottom:5px"><i class="fa fa-phone"></i> <a class="text-muted" href="tel:+94777856127">+94 777 85 61 27</a></li>
					<li style="padding-bottom:5px"><i class="fa fa-envelope"></i> <a class="text-muted" href="mailto:info@jetparties.com">info@jetparties.com</li>
					<li><i class="fa fa-address-card"></i> <a class="text-muted" href="https://goo.gl/maps/2xXrNv5VNjfhEHNUA">Satya English Way, <br />Ramanathapuram 44000, <br />Sri Lanka</a></li>
					
					
				</ul>
			</div>
          <div class="col-6 col-md">
            <h5>Menu</h5>
            <ul class="list-unstyled text-small">
			<?php
			$menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
			// This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);
			$menuID = $menuLocations['primary']; // Get the *primary* menu ID
			$primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.
			foreach ( $primaryNav as $navItem ) {

				echo '<li><a class="text-muted" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
			
			}
		  	?>
            </ul>
          </div>
		  <div class="col-6 col-md">
            <h5>Quick Links</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">My Account</a></li>
              <li><a class="text-muted" href="#">Cart</a></li>
			  <li><a class="text-muted" href="#">Orders</a></li>
			  <li><a class="text-muted" href="#">Checkout</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5 style="">About</h5>
            <ul class="list-unstyled text-small" style="">
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
			  <li><a class="text-muted" href="#">Cookies</a></li>
			  <li><a class="text-muted" href="#">Data Policy</a></li>
            </ul>
          </div>
        </div>
		<div class="row" align="center" style="padding-bottom:10px">
			<div class="col">
				<ul class="social-network social-circle">
					<li><a href="#" class="icoYt" title="Youtube"><i class="fa fa-youtube-play""></i></a></li>
					<li><a href="https://www.facebook.com/TEP-Gift-Palace-101335728034497" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="row" align="center">
			<div class="col">
				<small class="d-block mb-3 text-muted">All rights are reserved © 2021 | Gift Palace Wordpress Theme Designed by <a href="https://profile.rahuldhole.com">Rahul Dhole</a></small>
			</div>
		</div>		
		</div>
      </footer>
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
</body>

</html>

