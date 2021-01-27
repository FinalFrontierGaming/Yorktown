<?php get_header(); ?>
<?php include 'constellation/functions.php'; ?>

	<main role="main">
		<!--
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		-->
		<section>
			<body>
				<div class="container">
					<div class="row">
						<div class="col-2 py-2">
							<h3>Relay Station</h3>
							<ul class="nav flex-column">
                    			<li class="nav-item">
                        			<a class="nav-link active" href="#">Inbox</a>
                    			</li>
								<li class="nav-item">
                        			<a class="nav-link active" href="#">Folders</a>
                    			</li>
								<li class="nav-item">
                        			<a class="nav-link active" href="#">Trash</a>
                    			</li>
								<li class="nav-item">
                        			<a class="nav-link active" href="#">Edit Folders</a>
                    			</li>
								<li class="nav-item">
                        			<a class="nav-link active" href="#">My Account</a>
                    			</li>
							</ul>
						</div>
						<div class="col-10">
							<div class="row py-2">
								<div class="col-8">
									<p>Inbox Space Used:</p>
								</div>
								<div class="col-4">
									<button type="button" class="btn btn-primary btn-small float-right">Compose Message</button>
								</div>
							</div>
							<div class="row">
								<table class="table table-sm table-hover">
  									<thead>
    									<tr>
      										<th scope="col">Sender:</th>
      										<th scope="col">Subject:</th>
      										<th scope="col">Date:</th>
      										<th scope="col">Actions</th>
    									</tr>
  									</thead>
  								<tbody>
								  <?php privateMessagesGet() ?>  
  								</tbody>
</table>
				
				
				
				<!--- <div id="editor">
					<p>This is sample content</p>
				</div>
				<script>
        			ClassicEditor
            			.create( document.querySelector( '#editor' ) )
            			.catch( error => {
                			console.error( error );
            			} );
    			</script> --->
			</body>
		</section>
	</main>

<?php get_footer(); ?>