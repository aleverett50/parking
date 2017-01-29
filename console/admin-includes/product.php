<?php

use App\Product;
use App\Category;
use App\ProductImage;

$productObj = new Product;
$categoryObj = new Category;
$productimageObj = new ProductImage;

if($action == 'delete-image'){

	$productimageObj->delete($_GET['image_id']);

}

if($action == 'edit'){

	$row = $productObj->find($id);
	$product_images = $productimageObj->getAll();

}

if( isset($_POST['title']) ){

	if($action == 'add'){
	
		$productObj->add();
	
	} else {
	
		$productObj->update($id);
	
	}

}

?>

<script>

$(function(){

	$.get('account.php?page=product&action=add&get=sessions', function(data){
		
		var data = jQuery.parseJSON(data);
		
		$('#form input[type=text], #form input[type=email], #form textarea').each(function(){
			
			if (typeof data[this.id] !== 'undefined') {
			
				$('#' + this.id).val(data[this.id]);
				
			}
		
		});
		
		$('#form select').each(function(){
		
			$('#' + this.id + ' option[value='+data[this.id]+']').prop('selected', true);
		
		});

	});

});

</script>
<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script>
tinymce.init({
  selector: "textarea",
  plugins: "code"
});
</script>

<h1>PRODUCT</h1>

<p>Once uploaded, to delete an image, just click it.</p>

	<form enctype="multipart/form-data" <?php if($action == 'add'){ print 'id="form"'; } ?> class="form-horizontal" method="post" action="">

						<div class="panel panel-default">
						<div class="panel-heading"><?= strtoupper($action) ?> PRODUCT</div>
						<div class="panel-body">
						
								<div class="form-group">
									<label class="col-md-4 control-label">Title</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="title" id="title" value="<?php if(isset($row)){ print $row->title; } ?>">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Category</label>
									<div class="col-md-6">
										
										<select class="form-control" name="category_id" id="category_id">
										<option value="">Select Category</option>
										<?php
										
										foreach($categoryObj->getAll() as $category){
										
										$selected = '';
										
											if( isset($row) ){
										
												$selected = $category->id == $row->category_id ? 'selected' : '';
											
											}
										
										print "<option value='".$category->id."' $selected>".$category->title."</option>\n";
										
										}
										
										?>
										
										</select>
										
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">SEO Friendly URL</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="seo_url" id="seo_url" value="<?php if(isset($row)){ print $row->seo_url; } ?>">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Meta Title</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="meta_title" id="meta_title" value="<?php if(isset($row)){ print $row->meta_title; } ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Meta Description</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="meta_description" id="meta_description" value="<?php if(isset($row)){ print $row->meta_description; } ?>">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Text</label>
									<div class="col-md-6">
										
				<textarea class="form-control" rows="7" name="text" id="text"><?php if(isset($_SESSION[SESSION.'text'])){ print $_SESSION[SESSION.'text']; } else if(isset($row)){ print $row->text; } ?></textarea>
										
									</div>
								</div>
								
								<?php for($i = 1; $i < 3; $i++){ ?>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Alt Tag <?= $i; ?></label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="alt-<?= $i; ?>" name="alt-<?= $i; ?>" value="<?php if(isset($product_images[$i-1]->alt)){ print $product_images[$i-1]->alt; } ?>">										
									</div>
								</div>
								
								<?php if(isset( $product_images[$i-1]->id )){ ?>
								
								<input type="hidden" name="id-<?= $i; ?>" value="<?= $product_images[$i-1]->id ?>">
								<input type="hidden" name="ext-<?= $i; ?>" value="<?= $product_images[$i-1]->ext ?>">
								
								<?php } ?>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Image <?= $i; ?> (JPG, PNG or GIF)</label>
									<div class="col-md-6">
										<input type="file" class="form-control" name="file-<?= $i; ?>">
										
										<?php
										
										if(isset($product_images[$i-1]->ext)){
										
	print "<br /><a onclick=\"return confirm('Are you sure you want to delete this image?')\" href='account.php?page=product&action=delete-image&image_id=".$product_images[$i-1]->id."'><img style='width:150px' src='../product-images/".$product_images[$i-1]->id.".".$product_images[$i-1]->ext."'></a>"; 
										
										}
										
										?>
										
									</div>
								</div>
								
								<?php } ?>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary"> <?= strtoupper($action) ?> PRODUCT </button>
									</div>
								</div>
							
						</div>
					</div>
		
		
	</form>		

