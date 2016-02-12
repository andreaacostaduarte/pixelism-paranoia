<?php 
/**
 * @package WordPress
 * @subpackage Pixelism Paranoia_Theme
 */
/*
Template Name: 1 column Page - No Sidebar
 */
get_header(); ?>
		<!-- container: start -->
		<div id="container" class="clearfix">
			<div class="page no-sidebar">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!-- content post : start -->
				<div class="page-header" id="post-<?php the_ID(); ?>">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="featured-image">
				<?php
				if ( has_post_thumbnail() ) {
								the_post_thumbnail('full');
				}
				?>				
				</div>
				<?php the_content(); ?>
				<!-- content post : end -->
				<?php endwhile; ?>
				<?php else: ?>
					<!-- Error message when no post published -->
				<?php endif; ?>
			</div>
		</div>
		<!-- container: end -->
	</div>
	<!-- column 1: end -->

	<?php get_footer(); ?>