<?php

require __DIR__.'/includes/config.php';

use App\Helpers\Mail;

if( isset($_POST['name']) ){

	Mail::enquiry();

}

require 'header.php';

?>

<div class="container no-padding-ever">
	<div class="page-title-container">
		<div class="col-sm-12">
		<i class="fa fa-envelope"></i>
		<h1>Contact Us</h1>			
		</div>
	</div>
</div>

<div class="container">

<?php require __DIR__.'/includes/flash-messages.php'; ?>

<p class="mb-30">If you would contact us please give us a call. Alternatively you can send us a message via email or by using our web form.</p>

	<div class="row">
	
		<div class="col-md-6">
		
	  <div class="panel panel-default">

    <div class="panel-body" >

            <form action="" method="post">
              <div class="form-group">
                <label for="name">
                  Name
                </label>
                <input type="text" placeholder="" id="name" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">
                  Email
                </label>
                <input type="text" placeholder="" id="email" name="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">
                  Phone
                </label>
                <input type="text" id="phone" name="phone" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">
                  Message
                </label>
                <textarea placeholder="" rows="3" name="message" class="form-control"></textarea>
              </div>
              <button class="btn btn-default font-bigger" type="submit">SUBMIT ENQUIRY</button>
            </form>
			
			
	</div>
	
	</div>
		
		</div>

	
		<div class="col-md-6">
		
			<div class="row">
			
				<div class="col-md-6">
				
				<h3><i class="fa fa-map-marker"></i> Business Address</h3>
				
				<p>Excalibur Improvement Systems Ltd <br />
				Unit 2, 75 Spen Lane <br />
				Leeds<br />
				LS16 5EL </p>
				
				</div>
				
				<div class="col-md-6">
				
				<h3>Contact Info</h3>
				
				<p>
				<i class="fa fa-phone"></i> 0113 426 2777 <br /> 
				<i class="fa fa-phone"></i> 07913 235686 <br /> 
				<i class="fa fa-envelope"></i> <a href="<?= DOMAIN ?>/mailto:info@excalibur-is.com">info@excalibur-is.com</a>
				</p>
				
				</div>
			
			</div>
			
			<div class="row mt-20">
			
				<div class="col-md-12">
				
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2354.886085492889!2d-1.6079223847105122!3d53.82710234629332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487958d8828dcc33%3A0x61b144e70e161e0a!2s2%2C+75+Spen+Ln%2C+Leeds+LS16+5EN!5e0!3m2!1sen!2suk!4v1485343674570" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				</div>
			
			</div>
		
		</div>

	</div>

</div>


<?php require 'footer.php'; ?>