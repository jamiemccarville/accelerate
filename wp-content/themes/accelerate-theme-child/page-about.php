<?php
/**
 * Template Name: About Page
 *
 *The template for displaying the about page
 *
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	
		

			<?php while ( have_posts() ) : the_post(); 
				$hero_text = get_field( 'hero_text' );
				$page_description = get_field( 'page_description' );
				$service_img_1 = get_field( 'service_img_1' );
				$service_img_2 = get_field( 'service_img_2' );
				$service_img_3 = get_field( 'service_img_3' );
				$service_img_4 = get_field( 'service_img_4' );
				$service_title_1 = get_field( 'service_title_1' );
				$service_title_2 = get_field( 'service_title_2' );
				$service_title_3 = get_field( 'service_title_3' );
				$service_title_4 = get_field( 'service_title_4' );
				$service_description_1 = get_field( 'service_description_1' );
				$service_description_2 = get_field( 'service_description_2' );
				$service_description_3 = get_field( 'service_description_3' );
				$service_description_4 = get_field( 'service_description_4' );
				$size = "full";
			?>

				<div class="about-page">
				
				<p id="about-text-top"><?php echo $hero_text; ?></p>
			
				
			<?php endwhile; // end of the loop. ?>
		


	</div><!-- #primary -->
	<div class="services-top">
		<h2><?php the_title(); ?></h2>
		<p><?php echo $page_description; ?></p>
	</div>
	<div id="my-services">
		<div class="service-description-img-left"><!--image on the left -->
			<aside><?php echo wp_get_attachment_image( $service_img_1, $size); ?></aside>
			<h4><?php echo $service_title_1; ?></h4>
			<p><?php echo $service_description_1; ?></p>
		</div>
		<div class="service-description-img-right"><!-- image on the right -->
			<h4><?php echo $service_title_2; ?></h4>
			<p><?php echo $service_description_2; ?></p>
			<aside><?php echo wp_get_attachment_image( $service_img_2, $size); ?></aside>
		</div>
		<div class="service-description-img-left"><!-- image on the left -->
			<aside><?php echo wp_get_attachment_image( $service_img_3, $size); ?></aside>
			<h4><?php echo $service_title_3; ?></h4>
			<p><?php echo $service_description_3; ?></p>
		</div>
		<div class="service-description-img-right"><!-- image on the right -->
			<h4><?php echo $service_title_4; ?></h4>
			<p><?php echo $service_description_4; ?></p>
			<aside><?php echo wp_get_attachment_image( $service_img_4, $size); ?></aside>
		</div>
	</div>

<?php get_footer(); ?>
