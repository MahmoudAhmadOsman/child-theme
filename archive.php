<?php

get_header();
?>

<section class="archive-page">
<div class="container">
	<div class="row">
		<div class="col-md-11">
<?php
if (have_posts()):

?>

	<h2><?php

if (is_category()) {
	single_cat_title();
} elseif (is_tag()) {
	single_tag_title();
} elseif (is_author()) {
	the_post();
	echo 'Author Archives: ' . get_the_author();
	echo "<hr>";
	rewind_posts();
} elseif (is_day()) {
	echo 'div class="get_the_date">';
	echo 'Daily Archives: ' . get_the_date();
	echo '</div>';
} elseif (is_month()) {
	echo 'Monthly Archives: ' . get_the_date('F Y');
} elseif (is_year()) {
	echo 'Yearly Archives: ' . get_the_date('Y');
} else {
	echo 'Archives:';
}

?></h2>

	<?php
while (have_posts()): the_post();?>

																		<article class="post">
																			<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

																			<p class="post-info"><?php the_time('F j, Y g:i a');?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author();?></a> | <b>Posted in</b>




																				<?php

	$categories = get_the_category();
	$separator = ", ";
	$output = '';

	if ($categories) {

		foreach ($categories as $category) {

			$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;

		}

		echo trim($output, $separator);

	}

	?>

		</p>


		<?php the_excerpt();?>
					<p class=’readmore’><a href="<?php the_permalink();?>"><b class="text-danger">Read more...</b></a> &raquo;</p>
											</article>

																														<?php endwhile;

else:
	echo '<p>No content found</p>';

endif;
?>
</div>
</div>
</div>
</section>

<?php
get_footer();

?>