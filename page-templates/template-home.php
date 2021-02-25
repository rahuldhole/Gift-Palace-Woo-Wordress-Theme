<?php
/**
 * Template Name: Template: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>
<!-- Slider-1 -->
<div class="container-fluid" style="padding:0px">
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo get_template_directory_uri(); ?>/img/slider1/home-banner.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <a href="#"><h1>First slide label</h1>
          <h5>Nulla vitae elit libero, a pharetra augue mollis interdum.</h5>
          <button type="button" class="btn btn-outline-primary">Primary</button></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/slider1/home-banner.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <a href="#"><h1>Second slide label</h1>
          <h5>Nulla vitae elit libero, a pharetra augue mollis interdum.</h5>
          <button type="button" class="btn btn-outline-success">Success</button></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/slider1/home-banner.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <a href="#"><h1>Third slide label</h1>
          <h5>Nulla vitae elit libero, a pharetra augue mollis interdum.</h5>
          <button type="button" class="btn btn-outline-info">Info</button></a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<!-- END Slider-1 -->
<?php
get_footer();
