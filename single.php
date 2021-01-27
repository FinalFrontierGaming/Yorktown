<?php get_header(); ?>

	<main role="main">
	<!---	
		<section>

            <?php get_template_part('loop');
             ?>
            <p> <?php ffg_wp_author(); ?> </p>

			<?php get_template_part('pagination'); ?>

        </section>
-->
		<section class="page-container pt-4">
        <div class="rounded border shadow">
            <div class="row">
                <div class="col-9">
                    <div class="text-center news-post-header">
                        <h2 class="h2 news-posth"> <?php the_title(); ?> </h2>
                    </div>
                    <div class="post-p">
                        <body><?php the_content(); ?></body>
                    </div>
                </div>
                <div class="col-3 author-panel">
                    <h2 class="site-p"><?php echo get_the_author_meta('nickname', $post->post_author); ?></h2>
                    <img src="/wp-content/themes/FFGTest/assets/images/fleetcomm_placeholder.png" height="200"></img>
                    <p class="site-p2"> <?php echo get_the_author_meta('nickname', $post->post_author); ?> </p>  
                    <p class="site-pb"> This is a test </p>  
                    
                    <p> <?php echo get_the_author_meta('nickname', $post->post_author); ?> </p>
                </div>
            </div>
        </div>
		</section>
    </main>
    <?php var_dump( get_the_author_meta('nicename', $post->post_author)); ?>
    <?php var_dump( get_the_author_meta( 'display_nicename' ) ); ?>

<?php get_footer(); ?>