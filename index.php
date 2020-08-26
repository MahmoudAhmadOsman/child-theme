<?php get_header();?>
<?php define('WP_USE_THEMES', false);

//get_header();?>

<!-- default page ' must have page-->


<!--Start of Main Content section -->


<section class="container">
	<div class="row">

<?php

if (have_posts()) {
	while (have_posts()) {

		the_post();

		?>
<!-- This section is for reqular pages and you don't need to print the title with a hyper link like blog posts tibles -->

<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<div class="main-content">
<h1 class="main-content-post-title">

<!-- php //the_title(); -->


</h1>



<!-- Post Thumbnail -->

<?php the_post_thumbnail('', array([

			'class' => 'img-responsive img-thumbnail']));

		?>


<p class="main-page-content">
	<?php the_content();?>
</p>
<hr>
<!-- <span class="post-author">
	 <i class="fa fa-user" aria-hidden="true"></i>  Author:   the_author_posts_link();>
</span>&nbsp;&nbsp; -->

 <!-- <span class="post-date">&nbsp;
<i class="fa fa-calendar" aria-hidden="true"> </i>&nbsp;
<? //the_time('F jS, Y');?>
</span>&nbsp;&nbsp;-->

<!--  <i class="fa fa-comment-o" aria-hidden="true"></i> -->
<!--  <span class="post-comment">
	<comments_popup_link('0 comments ', '1 comment', '% comments', 'comments-link', 'Comments Disabled!');>

</span>&nbsp;&nbsp;
 -->










<!-- <span class="categories">
	<i class="fa fa-tag" aria-hidden="true"></i>
 	<the_category(', ');>
</span>
 -->
</div>


</div>


<!-- start of sidebar section -->
<section class="mobilecash-sidebar">

	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
<!-- 	<div class="search-header">
  			 get_search_form();
	</div> -->


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

<!--End of Main Content section -->

<?php get_footer();?>
