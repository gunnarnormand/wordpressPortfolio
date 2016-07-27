<? if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
	
	<h1>
		<? the_title(); ?>
	</h1>

	<? the_excerpt(); ?>

	<a href="<? the_permalink();?>">Read more</a>
	
	
	
<? endwhile; endif; ?>
