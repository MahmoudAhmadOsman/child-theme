<!DOCTYPE html>
<html <?php language_attributes();?> >
<head>
	<meta charset="<?php bloginfo('charset');?>">
<title><?php //wp_title('name');?></title>
<title><?php bloginfo('name');?>"</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#203a71" />
<link rel="pingback" href="<?php wp_title('pingback_url');?>">

	<?php wp_head();?>

</head>
<body <?php body_class();?>>

<section class="main-navigation">
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobilecash-menu" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
 <a class="navbar-brand" href="http://localhost/MobileCash/wordpress/">
   <?php the_custom_logo();?>

  </a>

    </div>


    <div class="collapse navbar-collapse" id="mobilecash-menu">

   <?php mobilecash_menu();?>




    </div>
  </div>
</nav>
</section>







