<?php get_header();?>
<?php //define('WP_USE_THEMES', false); //get_header();?>

<section class="container">
	<div class="row">

<?php

if (have_posts()) {
	while (have_posts()) {

		the_post();?>

<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<div class="main-post">
<h3 class="post-title">
	<!-- <a href="<?php //the_permalink();?>" rel="bookmark" title="Permanent Link to <?php //the_title_attribute();?>"><?php //the_title();?></a> -->
	<br><br> 
	<a class="btn btn-default btn-lg" href="/blog"> <i class="fa fa-angle-left" aria-hidden="true"></i>
Go back</a>
	<br><br>



	<?php the_title();?>
</h3>



<!-- Post Thumbnail -->

<?php the_post_thumbnail('', array([

			'class' => 'img-responsive img-thumbnail']));

		?>


<p class="post-content">
	<?php the_content();?>
</p>
<hr>
<span class="post-author">
	 <i class="fa fa-user" aria-hidden="true"></i> Author: <?php the_author_posts_link();?>
</span>&nbsp;&nbsp;

<span class="post-date">&nbsp;
 <i class="fa fa-calendar" aria-hidden="true"> </i>&nbsp;
<?php the_time('F jS, Y');?>
</span>&nbsp;&nbsp;

<i class="fa fa-comment-o" aria-hidden="true"></i>
<span class="post-comment">
	<?php comments_popup_link('0 comments ', '1 comment', '% comments', 'comments-link', 'Comments are off for this post');?>

</span>&nbsp;&nbsp;











<span class="categories">
	<i class="fa fa-tag" aria-hidden="true"></i>
	<?php the_category(', ');?>
</span>

</div>


</div>

<section class="mobilecash-sidebar">
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<h2 class="text-center">LATEST NEWS</h2> 
	<?php if (is_active_sidebar('main-sidebar')) {?>
		<ul id="main-sidebar"  class = "list-unstyled"> 
			<?php dynamic_sidebar('main-sidebar');?>
		</ul> 

		<?php }?>
</div>
</section>




<?php

	} // end of the while() loop at the begining
} // end if() loop at the begining
?>







</div>
</section>










<!-- <section class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="main-post">
				<h3 class="post-title">Post Title</h3>
			<i class="fa fa-user" aria-hidden="true"></i>
<span class="post-author">Mahmoud, </span>
			<i class="fa fa-calendar" aria-hidden="true"></i>
<span class="post-date">8, 10, 2018, </span>
			<i class="fa fa-comment-o" aria-hidden="true"></i>
<span class="post-comment">30 comments</span>
			<img src="https://source.unsplash.com/user/erondu/400x200" alt="" class="img-reponsive img-thumbnail">
			<p class="post-content">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, nobis culpa ullam sunt veritatis provident minus earum nihil consequuntur aut alias, quos autem iure, eius magni pariatur tempore. Sit neque, magnam, expedita amet ad odio at inventore tenetur enim error consequatur, earum eveniet commodi doloremque eum! Excepturi error quas, adipisci voluptas reiciendis ullam quidem repellendus dolore minus deserunt quod dolor perferendis quae cum in accusamus at, dolores laudantium earum autem harum totam, cupiditate. Autem, maxime, perspiciatis? Officia saepe recusandae repellat molestias quod harum cum sunt at dolore, hic voluptas quas voluptates nostrum dolorum! Necessitatibus, amet at fugit incidunt beatae commodi.
			</p>
			<hr>
<p class="categories">
	HTML5, CSS5, Javascript, PHP,  SAAS
</p>

			</div>
		</div>
		<div class="col-sm-6">
			<div class="main-post">
				<h3 class="post-title">Post Title</h3>
			<span class="post-author">Mahmoud</span>
			<span class="post-date">8, 10, 2018</span>
			<span class="post-comment">30 comments</span>
		<img src="https://source.unsplash.com/user/water/400x200" alt="" class="img-reponsive img-thumbnail">
			<p class="post-content">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, nobis culpa ullam sunt veritatis provident minus earum nihil consequuntur aut alias, quos autem iure, eius magni pariatur tempore. Sit neque, magnam, expedita amet ad odio at inventore tenetur enim error consequatur, earum eveniet commodi doloremque eum! Excepturi error quas, adipisci voluptas reiciendis ullam quidem repellendus dolore minus deserunt quod dolor perferendis quae cum in accusamus at, dolores laudantium earum autem harum totam, cupiditate. Autem, maxime, perspiciatis? Officia saepe recusandae repellat molestias quod harum cum sunt at dolore, hic voluptas quas voluptates nostrum dolorum! Necessitatibus, amet at fugit incidunt beatae commodi.
			</p>
			<hr>
<p class="categories">
	HTML5, CSS5, PHP,  SAAS
</p>

			</div>
		</div>


	</div>
</section>
 -->






<?php get_footer();?>