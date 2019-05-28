<?php get_header();?>

<section class="single-staff">
<div class="container">
	<div class="row">
<br>
	<a class="btn btn-default btn-lg" href="http://mobilecash.etechwebschool.com/staff/"> <i class="fa fa-angle-left" aria-hidden="true"></i>
Go back</a>
	<br>

<?php

if (have_posts()) {
	while (have_posts()) {

		the_post();

		?>

<div class="col-md-9">
<div class="staff-content">
<div class="sfaff-title">

<h1> <?php the_title();?></h1>

</div>
<!-- Post Thumbnail -->

<?php the_post_thumbnail('', array([

			'class' => 'img-responsive img-thumbnail']));

		?>


<p class="staff-content-page">

	<?php the_content();?>

</p>



</div>


</div>


<!-- start of sidebar section -->
<section class="mobilecash-sidebar">

	<div class="col-md-3">

	<h2 class="text-center">LATEST NEWS</h2>
	<?php if (is_active_sidebar('main-sidebar')) {?>
		<ul id="main-sidebar"  class = "list-unstyled">
			<?php dynamic_sidebar('main-sidebar');?>
		</ul>

		<?php }?>
</div>
</section>
<!-- End of sidebar section -->



<?php

	} // end of the while() loop braket
} // end if() loop at the begining
?>







</div>
</section>

<!--End of Single staff section -->

<?php get_footer();?>

</section>
</div>
</div>


