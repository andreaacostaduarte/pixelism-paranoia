<?php get_header(); ?>
		<!-- container: start -->
		<div id="container" class="clearfix">
		
		<div class="category-header">Now viewing everything in <span><?php single_cat_title(''); ?></span></div>
		
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<!-- home post: start -->
			<div class="home-post" id="post-<?php the_ID(); ?>">
				<div class="title"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></h2></div>
				<div class="post-image"><a href="<?php the_permalink() ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/post-images/<?php $key="thumbnail"; echo get_post_meta($post->ID, $key, true); ?>" alt="" border="0" /></a></div>
				
				<div class="excerpt" onclick="window.location='<?php the_permalink() ?>';">
					<div class="date"><?php the_time('d/m/Y'); ?></div>
					<?php the_excerpt('Read the rest of this entry &raquo;'); ?>
				</div>
				
				<div class="meta"><span class="comments"><?php comments_popup_link('No Comments', '1 comment', '% comments'); ?></span><span class="author"><a href="<?php the_permalink() ?>">Read More &raquo;</a></span></div>
			
			</div>
			<!-- home post: end -->

<?php endwhile; ?>
<?php else: ?>
 <!-- Error message when no post published -->
<?php endif; ?>
        
        <div id="page-nav"><span class="older"><?php next_posts_link('&laquo; Older Entries') ?></span> <span class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></span></div>

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
	