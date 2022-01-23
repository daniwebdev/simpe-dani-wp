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
		<div class="date-time-author">
			<?php
				the_date();
				echo ' · ';
				the_author();
			?>
		</div>
		<div class="content">
			<?php
				the_content();
			?>
		</div>

		<div class="post-navigate d-flex justify-content-between mt-5">


			<div class="prev">
				<?php
					previous_post_link( '%link', '<i class="fas fa-arrow-left"></i> %title' );
				?>
			</div>
			<div class="next">
				<?php
					next_post_link( '%link', '%title <i class="fas fa-arrow-right"></i>' );
				?>
			</div>
			
		</div>
	</main><!-- #main -->

<?php
get_footer();
