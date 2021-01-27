<?php get_header(); ?>

	<script src="../stage3/javascript/reset-password.js"></script>
    <main role="main">
		<!--
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		-->
        <body class="login-background">
		<section class="page-container page-center">
        <div class="container border rounded rounded-lg shadow white-background-login">
			<h2 class="h2 site-h2 text-center opac100 pb-2"> <?php the_title(); ?> </h2>
            <div class="container">
            <div class="row">
            <div class="col-sm">
			    <form action="../stage3/php/password-reset.php" method="post" id="password-reset-form">
				    <div class="form-group">
					    <label for="reset-password-email">E-mail Address</label>
					    <input type="email" class="form-control" name="reset-password-email" id="reset-password-email" placeholder="Enter your email here...">
				    </div>
				    <button id="reset-password-submit" type="submit" class="btn btn-primary" data-href="../stage3/php/password-reset.php">Reset Password</button>
			    </form>
            </div>
            <div class="col-sm border-left">
                <p class="site-p text-center">Use this form to reset your password.</p>
				<p class="site-p text-center">If you don't want to reset your password, you can <a href="/login">login</a> or <a href="/register">create an account</a>.</p>
            </div>
            </div>
            <div id="reset-alert" class="alert alert-success row hidden" role="alert" hidden>
            If this email matches the one we have on file, you should see a password reset email in your inbox shortly
            </div>
            </div>
        </div>
		</section>
		</body>
	</main>

<?php get_footer(); ?>