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

	<form class="form-horizontal" <?php if($action == 'add'){ print 'id="form"'; } ?> method="post" action="">

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
										<textarea rows="40" name="text" class="form-control"><?php if(isset($row)){ print $row->text; } ?></textarea>
									</div>
								</div>
								


								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary"> <?= strtoupper($action) ?> CATEGORY </button>
									</div>
								</div>
							
						</div>
					</div>
		
		
	</form>		

