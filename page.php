<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Miniva
 */

get_header();
?>

<main id="single-article" class="container mt-4" role="main">
	<h1 class="title">
		<?php
		the_title();
		?>
	</h1>

	<div class="d-flex justify-content-between mb-3 align-items-center">
		<div class="date-time-author">
			Last update <date><?php the_modified_date(); ?></date> by <?php the_author(); ?>
		</div>
		<div class="dropdown open p-0 sharebutton-single">
			<a class="btn dropdown-toggle p-0 m-0" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true">
				<i class="fa fa-share" aria-hidden="true"></i>
			</a>
			<div class="dropdown-menu" aria-labelledby="triggerId">
				<a class="dropdown-item" href="https://facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>">
					<i class="fab fa-facebook me-2" aria-hidden="true"></i> Facebook
				</a>
				<a class="dropdown-item" href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>">
					<i class="fab fa-twitter me-2" aria-hidden="true"></i> Twitter
				</a>
				<a class="dropdown-item" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php echo get_the_title(); ?>&summary=&source=">
					<i class="fab fa-linkedin me-2" aria-hidden="true"></i> LinkedIn
				</a>
			</div>
		</div>
	</div>
	<div class="content">
		<?php
		the_content();
		?>
	</div>

	<div class="post-navigate row mt-5">
		<div class="prev col-md-6 ">
			<span class="text-gray d-block" style="font-size: 14px;">
				Previous
			</span>
			<?php
				previous_post_link( '%link', '%title' );
			?>
		</div>
		<div class="next col-md-6 ">
			<?php
			if(get_next_post_link( '%link', '%title' )):
			?>
			<span class="text-gray d-block" style="font-size: 14px;">
				Next
			</span>
			<?php
				echo get_next_post_link( '%link', '%title' );
			endif;
			?>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();
