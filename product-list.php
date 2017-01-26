<?php

$meta_description = $row->meta_description;
$meta_title = $row->meta_title;

require 'header.php';

?>

<script>
/*
$(function() {
    $('.image-col').matchHeight();
});
*/
</script>

<div class="container no-padding-ever">
	<div class="page-title-container">
		<div class="col-sm-12">
		<i class="fa fa-picture-o"></i>
		<h1><?= $category_title ?></h1>		
		</div>
	</div>
</div>

<div class="container">

        <div class="row">
	
		<div class="col-md-4"></div>
		
		<div class="col-md-4"><?= $row->text ?></div>
  
        </div>


</div>


<?php require 'footer.php'; ?>