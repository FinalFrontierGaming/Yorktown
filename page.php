<?php get_header(); ?>

	<div class="page-container">
	<main role="main">
		<!--
		<section>
			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</section>
		-->
		<section>
        <div class="container">
			<h2 class="h2 site-h2"> <?php the_title(); ?> </h2>
			<body> <?php the_content(); ?> </body>
        </div>
		</section>
	</main>
	</div>

<?php get_footer(); ?>