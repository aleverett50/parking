<?php

require __DIR__.'/includes/config.php';

$url = $_SERVER['REQUEST_URI'];

if( strstr($url, 'blog/') ){

	include('blog-page.php');
	exit;

} elseif(strstr($url, 'products/')){

	include('product-details-page.php');
	exit;

} else{

	$slug = explode('/', $_SERVER['REQUEST_URI']);
	$slug = $slug[count($slug)-1];

	$row = $categoryObj->getRowByField('seo_url', $slug);

	if( isset($row->id) ){

		$category_id = $row->id;
		$category_title = $row->title;
		include('product-list.php');

	}

	exit;

}