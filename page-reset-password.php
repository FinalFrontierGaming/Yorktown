<?php get_header(); ?>

	<main role="main">
        <body class="login-background">
		    <section class="page-container page-center">
                <div class="container border border-primary rounded rounded-lg shadow white-background-login">
			        <h2 class="h2 site-h2 text-center opac100"> Reset Password </h2>
                        <form>
                            <div class="form-group">
						        <label for="reset-password">Enter New Password</label>
						        <input type="password" class="form-control" name="reset-password" id="reset-password" placeholder="Enter your new password...">
					        </div>
                            <button type="submit" class="btn btn-primary">Reset Password</button>
                        </form>
                        <div>
                            <?php include 'stage3/php/get-password-reset-token.php'; ?>
                        </div>
                </div>
            </section>
        </body>
    </main>

<?php get_footer(); ?>