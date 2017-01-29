<?php

require __DIR__.'/includes/config.php';

use App\Helpers\Mail;

if( isset($_POST['name']) ){

	Mail::enquiry();

}

require 'header.php';

?>

<div class="container-fluid page-title-container">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
		<i class="fa fa-envelope"></i>
		<h1>Contact Us</h1>			
			</div>
		</div>
	</div>
</div>

<div class="container">

<?php require __DIR__.'/includes/flash-messages.php'; ?>

<p class="mb-30">If you would contact us please send us a message via email or by using our web form.</p>
		
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


<?php require 'footer.php'; ?>