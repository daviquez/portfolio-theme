<?php get_header(); ?>

<!-- <div class="jumbotron">
	<div class="container">
		<h1>Hello World!</h1>
	</div>
</div> -->
<div class="container-fluid">

	<div class="container">
		<div class="row">
			<div class="col-12 pb-5">
				
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<?php the_content(); ?>
				
				<?php endwhile; endif;  ?>
				
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>