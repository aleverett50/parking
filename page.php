<?php

$meta_description = $row->meta_description;
$meta_title = $row->meta_title;

require 'header.php';

?>

<div class="container-fluid page-title-container">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
		<i class="fa fa-plane"></i>
		<h1><?= ucwords($row->title) ?></h1>		
			</div>
			
			<div class="col-md-6">

<ol class="breadcrumb pull-right">
  <li class="breadcrumb-item"> <a href="<?= DOMAIN ?>/">Home</a></li>
  <?php  if(isset( $row->category_id )){   ?>
  
   <li class="breadcrumb-item"><a href="<?= DOMAIN ?>/<?= $slugArray[count($slugArray)-2]; ?>"><?= ucwords(str_replace('-', ' ', $slugArray[count($slugArray)-2])) ?></a></li>
   <li class="breadcrumb-item"><?= ucwords($row->title) ?></li>
  
<?php } else { ?>  <li class="breadcrumb-item"><?= ucwords($row->title) ?></li>

<?php }  ?>
 
</ol>

			</div>
			
		</div>
	</div>
</div>

<div class="container">

        <div class="row">
	
		<div class="col-md-4 booking-form-holder">
		
			<div class="col-md-12 booking-form">
			
<?php require __DIR__.'/includes/form-parking.php'; ?>
			
			</div>
		
		</div>
		
		<div class="col-md-4"><?= $row->text ?></div>
  
        </div>


</div>

<?php require 'footer.php'; ?>