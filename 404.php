<?php get_header(); ?>

<section class="content">
	<div class="pad group">		
		
		<?php get_template_part('inc/page-title'); ?>
		
		<div class="notebox">
			<?php get_search_form(); ?>
		</div><!--/.notebox-->
		
		<div class="entry">
			<p><?php esc_html_e( 'The page you are trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.', 'enspire' ); ?></p>
		</div><!--/.entry-->
		
	</div><!--/.pad-->	
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>