<?php get_header();?>

<br>

<section class="slide-show">

<div class="container-fluid">

<div class="row">

	<div class="col-md-12">



		<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->

  <ol class="carousel-indicators">

    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

    <li data-target="#myCarousel" data-slide-to="1"></li>

    <li data-target="#myCarousel" data-slide-to="2"></li>

  </ol>



  <!-- Wrapper for slides -->

  <div class="carousel-inner">

    <div class="item active">

    <img src="<?php echo get_template_directory_uri(); ?>/images/slide-1.jpg" class="img-responsive" alt="slideshow 1 image" />

    </div>



    <div class="item">

     <img src="<?php echo get_template_directory_uri(); ?>/images/slider-2.jpg" class="img-responsive" alt="slideshow 2 image" />

    </div>



    <div class="item">

 <img src="<?php echo get_template_directory_uri(); ?>/images/slider-3.jpg" class="img-responsive" alt="slideshow 3 image" />

    </div>

  </div>



  <!-- Left and right controls -->

  <a class="left carousel-control" href="#myCarousel" data-slide="prev">

    <span class="glyphicon glyphicon-chevron-left"></span>

    <span class="sr-only">Previous</span>

  </a>

  <a class="right carousel-control" href="#myCarousel" data-slide="next">

    <span class="glyphicon glyphicon-chevron-right"></span>

    <span class="sr-only">Next</span>

  </a>

</div>

	</div>

	</div>

	</div>

</section>

