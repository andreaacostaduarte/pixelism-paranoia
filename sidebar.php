		<div class="search-box">
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
					<input name="s" type="text" class="txt-field" id="s" value="<?php the_search_query(); ?>" />
					<input type="submit" id="searchsubmit" class="btn-search" value="Search &raquo;" />
			</form>
		</div>
		
		<div id="categories">
			<ul>
			<?php wp_list_categories('orderby=name&title_li='); ?>
			</ul>
		</div>

		<div id="blogroll">
			<ul>
			<?php if ( is_active_sidebar( 'sidebar_links' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar_links' ); ?>
			<?php else: ?>
					<li>No Links to share</li>		
			<?php endif; ?>
			</ul>
		</div>
