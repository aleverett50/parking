<?php

require __DIR__.'/includes/config.php';

use App\Product;

$slugArray = explode('/', $_SERVER['REQUEST_URI']);
$slug = $slugArray[count($slugArray)-1];

$url = $_SERVER['REQUEST_URI'];

	$row = $categoryObj->getRowByField('seo_url', $slug);

	if( isset($row->id) ){

		include('page.php');

	} else {

		$productObj = new Product;
		$row = $productObj->getRowByField('seo_url', $slug);
		include('page.php');
	
	}

	exit;