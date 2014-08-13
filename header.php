<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="author" content="">
<link rel="shortcut icon" href="favicon.png">

<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

<!-- Main Stylesheet -->
<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

<!-- Twitter Bootstrap 3.0.3 -->
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>

<!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class($class); ?>>

<header>
	<div class="container">
	
		<div class="col-xs-12 col-sm-6 col-md-4"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>" class="logo" height="100"></a></div>
		
		<div class="col-xs-12 col-sm-6 col-md-8 text-right">
			<h2><b>Call us</b> today on <br class="hidden-xs"><b>01234 567890</b></h2>
		</div>
		
	</div>
</header>

<nav>
	<div class="container">
		<div class="hidden-xs col-xs-12">
			<?php wp_nav_menu(); ?>
		</div>
	</div>
</nav>
