<? if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
	
	<? the_content(); ?>
	
	<? the_author();?>
	<? the_time();?>
	<? the_date();?>
	<? the_meta();?>
	
<? endwhile; endif; ?>