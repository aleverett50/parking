<?php

require 'header.php';

?>

<div class="container-fluid page-title-container">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<i class="fa fa-exclamation-circle"></i>
			<h1>Oops</h1>

			</div>			
		</div>
	</div>
</div>

<div class="container">

        <div class="row">
	
		<div class="col-md-12 mb-100 text-center">

		<p>Sorry, the page you requested does not exist.</p>
		
		<a class="btn btn-default" href="<?= DOMAIN ?>/index"><i class="fa fa-home"></i> HOME PAGE</a>

		
		</div>

		<div class="col-md-12 booking-form-holder mb-50">
		
			<div class="col-md-12 booking-form">
			
<?php require __DIR__.'/includes/form-parking.php'; ?>
			
			</div>
		
		</div>
		

  
        </div>


</div>

<?php require 'footer.php'; ?>