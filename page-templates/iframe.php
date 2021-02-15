<?php
/**
 * Template Name: iFrame
 *
 * Template for displaying a blank page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
<style>
    /*----------Scrollbar design---------*/

    /* width */
    ::-webkit-scrollbar {
        width: 5px;
    }
     
    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey; 
        border-radius: 10px;
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: $secondary; 
        border-radius: 10px;
    }
    
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: $primary; 
    }
    /*----------End Scrollbar design---------*/
</style>
</head>
<body>
    <?php echo do_shortcode("[woocommerce_my_account]"); ?>
</body>
</html>
