<?php get_header(); ?>

<section class="content">
	<div class="pad group">
		
		<?php get_template_part('inc/page-title'); ?>		
		<?php get_template_part('inc/front-widgets-top'); ?>
		
		<?php if ( have_posts() ) : ?>
			
			<?php if ( ot_get_option('blog-layout') == 'blog-grid' ) : ?>
				
				<div class="post-grid group">
					<?php $i = 1; echo '<div class="post-row">'; while ( have_posts() ): the_post(); ?>
						<?php get_template_part('content-grid'); ?>
					<?php if($i % 2 == 0) { echo '</div><div class="post-row">'; } $i++; endwhile; echo '</div>'; ?>
				</div><!--/.post-grid-->
				
			<?php elseif ( ot_get_option('blog-layout') == 'blog-list' ) : ?>
				
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content-list'); ?>
				<?php endwhile; ?>
				
			<?php else: ?>
			
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content'); ?>
				<?php endwhile; ?>
				
			<?php endif; ?>
			
			<?php get_template_part('inc/front-widgets-bottom'); ?>
			<?php get_template_part('inc/pagination'); ?>
			
		<?php endif; ?>
		
	</div><!--/.pad-->
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>