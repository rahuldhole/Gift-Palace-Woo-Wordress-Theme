<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">
		
		
		<div id= "top-header" class="top-header-holder">
			<div class="container-fluid">

			<div class="row no-gutters">
				
				<div class="col">
					
					<div class="logo-holder">
						<a href="#modal_aside_left" class="logo" data-toggle="modal">
							<button class="navbar-toggler" id ="mob-menu-tog" type="button">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
							</button>
						</a>
						<a href="/"  class="logo">
							<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="<?php echo get_bloginfo('name'); ?> Logo" class="main-logo"> -->
							<span class="main-title"><?php echo get_bloginfo('name'); ?></span>
						</a>
					</div>
				</div>
				<div class="col" align="right">
					<div class="fwoo-cart">
						<a href="#modal_aside_right_user" data-toggle="modal"><i class="fa fa-user"></i></a>
						<a href="#modal_aside_right_cart" data-toggle="modal"><i class="fa fa-shopping-cart"></i>
							<small class = "cart-tot-count1">Bag (<?php echo WC()->cart->get_cart_contents_count(); ?>)</small>
							<sup class = "cart-tot-count2"><?php echo WC()->cart->get_cart_contents_count(); ?></sup>
						</a>
					</div>
				</div>
			</div>

			</div>
		</div>


		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

		<div class="container-fluid">
		

					
				

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			<div class="search-mod">
				<a href="#modal_aside_top" data-toggle="modal"><div class="search-title">search <i class="fa fa-search"></i></div></a>
			</div>

			

			
	

		</div><!-- .container -->
		</nav><!-- .site-navigation -->

</div><!-- #wrapper-navbar end -->

<div class="content"></div>


<!-- Primary menu Modal -->
<div id="modal_aside_top" class="modal top fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-aside" role="document">
    <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title">WHAT ARE YOU LOOKING FOR?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body">
	  	<?php echo do_shortcode('[wcas-search-form]'); ?>
      </div>
    </div>
  </div> <!-- modal-bialog .// -->
</div> <!-- modal.// -->

<div id="modal_aside_left" class="modal fixed-left fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-aside" role="document">
    <div class="modal-content">
       <div class="modal-header">
        <!-- <h5 class="modal-title">Navigation</h5> -->
		<?php echo do_shortcode('[wcas-search-form]'); ?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body">
		  <ul>
		  <?php
			$menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
			// This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);
			$menuID = $menuLocations['primary']; // Get the *primary* menu ID
			$primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.
			foreach ( $primaryNav as $navItem ) {

				echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
			
			}
		  ?>
		</ul>
      </div>
    </div>
  </div> <!-- modal-bialog .// -->
</div> <!-- modal.// -->



<div id="modal_aside_right_user" class="modal user fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-aside" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">My Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  	<iframe class="user-frame" src="<?php echo get_template_directory_uri(); ?>/my-account-iframe/"></iframe>
      </div>
    </div>
  </div> 
</div> 

<div id="modal_aside_right_cart" class="modal cart fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-aside" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  	<?php echo do_shortcode("[woocommerce_cart]"); ?>
      </div>
    </div>
  </div> <!-- modal-bialog .// -->
</div> <!-- modal.// -->



<!-- fixed header on scroll -->
<script>
window.onscroll = function() {navScroll()};

var navHeader = document.getElementById("main-nav");
var sticky = navHeader.offsetTop;

function navScroll() {
  if (window.pageYOffset > sticky) {
    navHeader.classList.add("navSticky");
  } else {
    navHeader.classList.remove("navSticky");
  }
}

window.onscroll = function() {navScrollMob()};

var navHeaderMob = document.getElementById("top-header");
var sticky = navHeaderMob.offsetTop;

function navScrollMob() {
  if (window.pageYOffset > sticky) {
    navHeaderMob.classList.add("navStickyMob");
	document.getElementById("mob-menu-tog").style.visibility = "visible";
	document.getElementById("mob-menu-tog").style.display = "inherit";
  } else {
    navHeaderMob.classList.remove("navStickyMob");
	if(document.body.offsetWidth>=992){
		document.getElementById("mob-menu-tog").style.visibility = "hidden";
		document.getElementById("mob-menu-tog").style.display = "none";
	}
  }
}

</script>
<!-- END fixed header on scroll -->