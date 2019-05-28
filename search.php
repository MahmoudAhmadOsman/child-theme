  <?php get_header();?>

<section class="search-wrapper">
  <div class="container">

	<div class="row">
		<h2>The Search Results: <span class="text-muted"><?php the_search_query()?></span></h2>

<?php

//Changes are made today 12/5/2018 add to the other files in localhost
$id = get_the_ID();

if (have_posts()) {
	while (have_posts()) {

		the_post();

		?>
<div class="search-result-image">
	
			
<div class="col-md-2">


<?php the_post_thumbnail('', array([

			'class' => 'img-responsive img-thumbnail img-thumbnail']));

		?>

</div>
<div class="col-md-10">

<a href="<?php $id?>">	<p class="search-content">
	<h3>
		<a href="<?php the_permalink();?>"> <?php the_title();?></a>
	</h3>
		 
			<p><a href="<?php the_permalink();?>"> <?php the_excerpt(); ?> </a>
		</p>
	 

	</p></a>

</div>
	</div>	
<?php
} // end of the while() loop braket
} // end if() loop at the begining
?>








</div> <!-- end of the row div -->
</div>
</section>


<?php get_footer();?>