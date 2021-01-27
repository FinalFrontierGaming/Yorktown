<?php get_header(); ?>

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
                <div class="row">
                    <div class="col-3">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Private Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Access Academy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Access Konstellation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                    </ul>
                    </div>
                    <div class="col-8" id="accountdata">
                        <h1 class="site-h1">Welcome to your account hub</h1><hr>
                            <p class="site-p">This is your account hub, you can change your settings and profile information here. Additionally, the hub will allow you to change your password, access your private messages and access the Fleet Academy and our communtiy management system called Konstellation.</p>
                    </div>
                </div>
        </div>
		</section>
	</main>

<?php get_footer(); ?>