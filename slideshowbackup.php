
<?php get_header();?>

<?php
$args = array(
	'post_type' => 'slides',
// 'orderby' => 'menu_order',
	// 'posts_per_page' => -1,

);
$slides = new WP_Query($args);
if ($slides->have_posts()): ?>

<section id='slideshow'>
<div class="container">
<br>
<?php while ($slides->have_posts()): $slides->the_post();?>
			        <div id="myCarousel" class="carousel slide" data-ride="carousel">
			        <!-- Indicators -->
			        <ol class="carousel-indicators">
			          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			          <li data-target="#myCarousel" data-slide-to="1"></li>
			          <li data-target="#myCarousel" data-slide-to="2"></li>
			        </ol>

			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
		<div class='slide'>
			          <div class="item active">
			        <?php the_post_thumbnail('large', $attr);?>
			            <div class="carousel-caption">
		                 <div class='copy'>
			              <h3><?php the_title();?></h3>
			              <p><?php the_content();?></p>
			            </div>
		            </div>
			          </div>
		</div>

			        </div>

			        <!-- Left and right controls -->
			        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			          <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			          <span class="sr-only">Next</span>
			        </a>
			        </div>
			        </div>
			</section>

		<?php endwhile;?>

<?php endif;?>

