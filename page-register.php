<?php get_header(); ?>

	<main role="main">
		<!--
		<section>
			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</section>
		-->
		<?php include "stage3/modules/registration/register.php" ?>
		<!--
		<body class="login-background">
		<section class="page-container page-center">
        <div class="container border border-primary rounded rounded-lg shadow white-background-login">
			<h2 class="h2 site-h2 text-center opac100"> Fleet Registration </h2>
			<form>
				<div class="form-group">
					<label for="InputEmail">E-mail Address</label>
					<input type="email" class="form-control" id="InputEmail" placeholder="Enter your email here...">
				</div>
				<div class="form-group">
					<label for="InputPassword">Password</label>
					<input type="password" class="form-control" id="InputPassword" placeholder="Enter password...">
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
        </div>
		</section>
		</body> -->
	</main>

<?php get_footer(); ?>