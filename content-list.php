<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group post-list'); ?>>	
	<div class="post-inner post-hover">
		
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php if ( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail('thumb-square'); ?>
				<?php elseif ( ot_get_option('placeholder') != 'off' ): ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/thumb-square.png" alt="<?php the_title(); ?>" />
				<?php endif; ?>
				<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fa fa-play"></i></span>'; ?>
				<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fa fa-volume-up"></i></span>'; ?>
				<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fa fa-star"></i></span>'; ?>
			</a>
			<?php if ( ot_get_option('format-icon') != 'off' ): ?>
				<div class="square-icon"><div class="square-icon-inner"><a href="<?php echo get_post_format_link($format); ?>"><i class="fa fa-icon"></i></a></div></div>
			<?php endif; ?>
			<?php if ( comments_open() && ( ot_get_option( 'comment-count' ) != 'off' ) ): ?>
				<a class="post-comments" href="<?php comments_link(); ?>"><span><i class="fa fa-comments-o"></i><?php comments_number( '0', '1', '%' ); ?></span></a>
			<?php endif; ?>	
		</div><!--/.post-thumbnail-->
		
		<div class="post-content">
				
			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2><!--/.post-title-->
			
			<ul class="post-meta group">
				<li><?php the_category(' / '); ?></li>
				<li><i class="fa fa-clock-o"></i><?php the_time('j M, Y'); ?></li>
			</ul><!--/.post-meta-->
			
			<?php if (ot_get_option('excerpt-length') != '0'): ?>
			<div class="entry excerpt">				
				<?php the_excerpt(); ?>
			</div><!--/.entry-->
			<?php endif; ?>
		
		</div><!--/.post-content-->
		
	</div><!--/.post-inner-->	
</article><!--/.post-->	