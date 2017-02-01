
<footer class="container-fluid footer-fluid-bg mt-20">

      <div class="container footer pb-20">
	
	<div class="row">
	
		<div class="col-md-3 col-sm-6 site-map"> 
		<h3 class="main-colour">Popular Links</h3> 
			<li><a href="<?= DOMAIN ?>/airport-parking/heathrow">Heathrow Airport Parking</a></li>
			<li><a href="<?= DOMAIN ?>/airport-parking/gatwick">Gatwick Airport Parking</a></li>
			<li><a href="<?= DOMAIN ?>/airport-parking/stansted">Stansted Airport Parking</a></li>
			<li><a href="<?= DOMAIN ?>/airport-parking/manchester">Manchester Airport Parking</a></li>
		</div>
		<div class="col-md-3 col-sm-6">
		<h3 class="main-colour">Social Media</h3>

			<div class="row">
				<div class="col-md-12 mb-30">
					<div class="social-media fb pull-left ml-0"><a href="<?= DOMAIN ?>/#"><i class="fa fa-facebook"></i> </a> </div> 
					<div class="social-media go pull-left"><a href="<?= DOMAIN ?>/#"><i class="fa fa-google-plus"></i> </a> </div> 
					<div class="social-media tw pull-left"><a href="<?= DOMAIN ?>/#"><i class="fa fa-twitter"></i> </a></div> 
				</div>
			</div>
		
		</div>
		<div class="col-md-3 col-sm-6">
		<h3 class="main-colour">Site Map</h3>
		
		<div class="row">
			
			<div class="col-md-5 site-map col-sm-6">
			<li><a href="<?= DOMAIN ?>/index">Home</a></li>
			<li><a href="<?= DOMAIN ?>/about">About Us</a></li>
			<li><a href="<?= DOMAIN ?>/contact">Contact Us</a></li>
			
			</div>
			<div class="col-md-6 site-map col-sm-6">
			
			<li><a href="<?= DOMAIN ?>/terms">T &amp; C's</a></li>
			<li><a href="<?= DOMAIN ?>/cookies">Cookie Policy</a></li>
			
			</div>
		
		</div>
		
		</div>
		<div class="col-md-3 col-sm-6">
		<h3 class="main-colour">Newsletter Sign Up</h3>
		
		<form action="" method="post">
		
		<input type="text" name="email" class="form-control no-border" placeholder="Email Address...">
		
		<button class="btn btn-default" type="button"> SEND </button>
		
		</form>
		
		</div>
	
	</div>
	
	<div class="row">
	
		<div class="col-md-6 col-xs-12 pull-right text-left website-design-by">  Copyright <?= date('Y') ?> <?= COMPANY_NAME ?></div>
	
	</div>

      </div>

	</footer>
	
<script src="<?= DOMAIN ?>/js/jquery-1.11.3.min.js"></script>
<script>

$(function(){

$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

});

</script>
<script src="<?= DOMAIN ?>/js/bootstrap.min.js"></script>
    
</body>
</html>