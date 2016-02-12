<?php get_header(); ?>
		<!-- container: start -->
		<div id="container" class="clearfix">
			<div class="page">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!-- content post : start -->
				<div class="page-header" id="post-<?php the_ID(); ?>">
					<h1><?php the_title(); ?></h1>
					<div class="posted-by">Posted <?php the_time('d/m/Y') ?> <em>by</em> <?php the_author() ?> <em>in</em> <?php the_category(', ') ?></div>
				</div>
				<?php
				if ( has_post_thumbnail() ) {
								the_post_thumbnail('full');
				}
				else {
							echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
											. '/images/post-images/post-illustrationLarge.jpg" />';
				}
				?>
			 <div class="text">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
				<!-- content post : end -->
				<!-- comments: start -->
				<?php if ( get_theme_mod( 'pixelismparanoia_page_comment_toggle' ) == 1 ) : // show page comments? ?>
				<?php
		  //If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :				
				  comments_template();
				 endif;
				?>
    <?php endif; ?>
				<!-- comments: end -->
<?php endwhile; ?>
<?php else: ?>
 <!-- Error message when no post published -->
<?php endif; ?>

<div id="index-nav"><span class="older"><?php next_posts_link('&laquo; Older Entries') ?></span> <span class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></span></div>
			
			</div>

		
		</div>
		<!-- container: end -->
	</div>
	<!-- column 1: end -->
	<!-- column 2: start -->
	<div id="col2">
		<?php get_sidebar(); ?>
	</div>
	<!-- column 2: end -->

	<?php get_footer(); ?>