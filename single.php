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

<div class="container">

	<div class="row g-5">
		<div class="col-md-9">
			<main id="single-article" class="" role="main">
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
							next_post_link( '%link', '%title <i class="fas fa-arrow-right"></i>', true );
						?>
					</div>
				</div>

				<div id="comment-section">
					<?php
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>
				</div>
			</main>
			<!-- #main -->
		</div>

		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>
	</div>

</div>	

<?php
get_footer();
