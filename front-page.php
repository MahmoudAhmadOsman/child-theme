<?php get_header();?>
<?php define('WP_USE_THEMES', false);?>


<!-- start of Sideshow/full-image section -->
<!-- <div class="over-lay">
<section class="container-fluid">
  <div class="row">


    <div class="full-front">

	</div>
	</div>


</section>
  </div> -->

<?php
if (is_front_page()) {
	get_template_part('slideshow', 'home');

}
?>







<!-- End of Sideshow/full-image section -->




<!-- start main content section -->
 <section class="front-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-4">

	<a href="http://mobilecash.etechwebschool.com/blog/html"><h1>HTML5</h1>
		<img src="<?php echo get_template_directory_uri(); ?>/images/html5.png" class="img-responsive img-thumbnail" alt="ful front" /></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto voluptas ipsum illo reprehenderit quaerat vitae animi, eligendi cum velit beatae sed voluptatem rem molestias earum blanditiis maxime error? Eaque dolor sed, soluta repellat totam fugit vitae sapiente saepe, nostrum commodi dicta, nisi ipsa excepturi vel distinctio quibusdam neque inventore. Placeat.</p>
			</div>
			<div class="col-md-4">
				<a href="http://mobilecash.etechwebschool.com/blog/css"><h1>CSS3</h1>

				<img src="<?php echo get_template_directory_uri(); ?>/images/html5.png" class="img-responsive img-thumbnail" alt="ful front" /></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto voluptas ipsum illo reprehenderit quaerat vitae animi, eligendi cum velit beatae sed voluptatem rem molestias earum blanditiis maxime error? Eaque dolor sed, soluta repellat totam fugit vitae sapiente saepe, nostrum commodi dicta, nisi ipsa excepturi vel distinctio quibusdam neque inventore. Placeat.</p>
			</div>
			<div class="col-md-4">
				<a href="http://mobilecash.etechwebschool.com/blog/javascript"><h1>JAVASCRIPT</h1>

				<img src="<?php echo get_template_directory_uri(); ?>/images/html5.png" class="img-responsive img-thumbnail" alt="ful front" /></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto voluptas ipsum illo reprehenderit quaerat vitae animi, eligendi cum velit beatae sed voluptatem rem molestias earum blanditiis maxime error? Eaque dolor sed, soluta repellat totam fugit vitae sapiente saepe, nostrum commodi dicta, nisi ipsa excepturi vel distinctio quibusdam neque inventore. Placeat.</p>
			</div>

		</div>
<!-- 		start of section section -->
		
		<div class="row">
			<div class="col-md-4">

	<a href="http://mobilecash.etechwebschool.com/blog/php"><h1>PHP</h1>
		<img src="<?php echo get_template_directory_uri(); ?>/images/html5.png" class="img-responsive img-thumbnail" alt="ful front" /></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto voluptas ipsum illo reprehenderit quaerat vitae animi, eligendi cum velit beatae sed voluptatem rem molestias earum blanditiis maxime error? Eaque dolor sed, soluta repellat totam fugit vitae sapiente saepe, nostrum commodi dicta, nisi ipsa excepturi vel distinctio quibusdam neque inventore. Placeat.</p>
			</div>
			<div class="col-md-4">
				<a href="http://mobilecash.etechwebschool.com/blog/sass"><h1>Sass</h1>

				<img src="<?php echo get_template_directory_uri(); ?>/images/html5.png" class="img-responsive img-thumbnail" alt="ful front" /></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto voluptas ipsum illo reprehenderit quaerat vitae animi, eligendi cum velit beatae sed voluptatem rem molestias earum blanditiis maxime error? Eaque dolor sed, soluta repellat totam fugit vitae sapiente saepe, nostrum commodi dicta, nisi ipsa excepturi vel distinctio quibusdam neque inventore. Placeat.</p>
			</div>
			<div class="col-md-4">
				<a href="http://mobilecash.etechwebschool.com/blog/boostrap"><h1>Bootstrap</h1>

				<img src="<?php echo get_template_directory_uri(); ?>/images/html5.png" class="img-responsive img-thumbnail" alt="ful front" /></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto voluptas ipsum illo reprehenderit quaerat vitae animi, eligendi cum velit beatae sed voluptatem rem molestias earum blanditiis maxime error? Eaque dolor sed, soluta repellat totam fugit vitae sapiente saepe, nostrum commodi dicta, nisi ipsa excepturi vel distinctio quibusdam neque inventore. Placeat.</p>
			</div>
	
		</div>
		<!-- 		start of section section -->
	</div>
</section>
<!-- End main content section -->



<?php get_footer();?>