<!DOCTYPE HTML>
<head>
<title><?= isset($meta_title) ? $meta_title : COMPANY_NAME. ', Airport Parking, Gatwick, Heathrow, Manchester, Stansted' ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?= DOMAIN ?>/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?= DOMAIN ?>/css/styles.css" />
<link rel="stylesheet" type="text/css" href="<?= DOMAIN ?>/font-awesome/css/font-awesome.css" />
<meta name="description" content="<?= isset($meta_description) ? $meta_description : 'desc' ?>" />
</head>
<body>

<div class="container-fluid top-bar"></div>

<div class="container">

	<div class="col-md-4 col-sm-4"> <img alt="Logo" class="mt-5 logo-img center-block" src="<?= DOMAIN ?>/images/logo.png"> </div>
	<div class="col-md-8 col-sm-8">
	
		<div class="row">
			
			<div class="col-md-12 text-right pt-5" style="height:80px">

			<img style="margin-top:-15px" src="images/tag.png" class="img-responsive pull-right">
			
			</div>
		
		</div>
	
	</div>

</div>

    <nav class="navbar navbar-default navbar-static-top mt-10 mb-0 container-fluid no-padding">
      <div class="container no-padding">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="link"><a href="<?= DOMAIN ?>/index"><i class="fa fa-home"></i> Home</a></li>

            <li class="link"><a href="<?= DOMAIN ?>/about">About Us</a></li>

            <li class="dropdown link">
              <a href="<?= DOMAIN ?>/airport-parking" class="dropdown-toggle">Airport Parking</a>
              <ul class="dropdown-menu">
	      <?php foreach( $productObj->getAllByCategory(6) as $product ){ ?>
	      
	      <li><a href="<?= DOMAIN ?>/<?= strtolower($product->seo_url) ?>/<?= strtolower($product->product_seo_url) ?>"><?= ucwords($product->product_seo_url) ?></a></li>
	      
	     <?php } ?>

              </ul>
            </li>

	<li class="link"><a href="<?= DOMAIN ?>/airport-hotels">Airport Hotels</a></li>
	    
	<li class="link no-border"><a href="<?= DOMAIN ?>/contact">Contact Us</a></li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
