<?php

$blogObj = new App\Blog;
$blogimageObj = new App\BlogImage;

if($action == 'delete-image'){

	$blogimageObj->delete($_GET['image_id']);

}

if($action == 'edit'){

	$row = $blogObj->find($id);
	$blog_images = $blogimageObj->getAll();

}

if( isset($_POST['title']) ){

	if($action == 'add'){
	
		$blogObj->add();
	
	} else {
	
		$blogObj->update($id);
	
	}

}

?>

<script>

$(function(){

	$.get('account.php?page=blog&action=add&get=sessions', function(data){
		
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

<h1>BLOG</h1>

<p>Once uploaded, to delete the image, just click it.</p>

	<form enctype="multipart/form-data" class="form-horizontal" <?php if($action == 'add'){ print 'id="form"'; } ?> method="post" action="">

						<div class="panel panel-default">
						<div class="panel-heading"><?= strtoupper($action) ?> BLOG</div>
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
										<br />
										eg. my-blog-title
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Blog Content</label>
									<div class="col-md-6">
										<textarea class="form-control" rows="10" name="content" id="content"><?php if(isset($_SESSION[SESSION.'content'])){ print $_SESSION[SESSION.'content']; } else if(isset($row)){ print $row->content; } ?></textarea>
									</div>
								</div>


								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary"> <?= strtoupper($action) ?> BLOG </button>
									</div>
								</div>
							
						</div>
					</div>
		
		
	</form>		

