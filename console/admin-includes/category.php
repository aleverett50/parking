<?php

use App\Category;
use App\CategoryImage;

$categoryObj = new Category;
$categoryimageObj = new CategoryImage;

if($action == 'delete-image'){

	$categoryimageObj->delete($_GET['image_id']);

}


if($action == 'edit'){

	$row = $categoryObj->find($id);
	$category_images = $categoryimageObj->getAll();

}

if( isset($_POST['title']) ){

	if($action == 'add'){
	
		$categoryObj->add();
	
	} else {
	
		$categoryObj->update($id);
	
	}

}

?>

<script>

$(function(){

	$.get('account.php?page=category&action=add&get=sessions', function(data){
		
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

<h1>CATEGORY</h1>

	<form enctype="multipart/form-data" class="form-horizontal" <?php if($action == 'add'){ print 'id="form"'; } ?> method="post" action="">

						<div class="panel panel-default">
						<div class="panel-heading"><?= strtoupper($action) ?> CATEGORY</div>
						<div class="panel-body">
						
								<div class="form-group">
									<label class="col-md-4 control-label">Title</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="title" id="title" value="<?php if(isset($row)){ print $row->title; } ?>">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">SEO Friendly URL</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="seo_url" id="seo_url" value="<?php if(isset($row)){ print $row->seo_url; } ?>">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Meta Description</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="meta_description" id="meta_description" value="<?php if(isset($row)){ print $row->meta_description; } ?>">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Meta Title</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="meta_title" id="meta_title" value="<?php if(isset($row)){ print $row->meta_title; } ?>">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Text</label>
									<div class="col-md-6">
										<textarea name="text" class="form-control"><?php if(isset($row)){ print $row->text; } ?></textarea>
									</div>
								</div>
								
								<?php for($i = 1; $i < 3; $i++){ ?>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Alt Tag <?= $i; ?></label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="alt-<?= $i; ?>" name="alt-<?= $i; ?>" value="<?php if(isset($category_images[$i-1]->alt)){ print $category_images[$i-1]->alt; } ?>">										
									</div>
								</div>
								
								<?php if(isset( $category_images[$i-1]->id )){ ?>
								
								<input type="hidden" name="id-<?= $i; ?>" value="<?= $category_images[$i-1]->id ?>">
								<input type="hidden" name="ext-<?= $i; ?>" value="<?= $category_images[$i-1]->ext ?>">
								
								<?php } ?>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Image <?= $i; ?> (JPG, PNG or GIF)</label>
									<div class="col-md-6">
										<input type="file" class="form-control" name="file-<?= $i; ?>">
										
										<?php
										
										if(isset($category_images[$i-1]->ext)){
										
	print "<br /><a onclick=\"return confirm('Are you sure you want to delete this image?')\" href='account.php?page=category&action=delete-image&image_id=".$category_images[$i-1]->id."'><img style='width:150px' src='../category-images/".$category_images[$i-1]->id.".".$category_images[$i-1]->ext."'></a>"; 
										
										}
										
										?>
										
									</div>
								</div>
								
								<?php } ?>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary"> <?= strtoupper($action) ?> CATEGORY </button>
									</div>
								</div>
							
						</div>
					</div>
		
		
	</form>		

