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
				<div class="breadcrumb">
					<ul>
						<li>
							<a href="<?=get_home_url();?>">Home</a>
						</li>
						<?php
						foreach(get_the_category() as $category) {
							echo '<li><a href="'.get_category_link($category).'">'.$category->name.'</a></li>';
						}?>
						<li><?=the_title();?></li>
					</ul>
				</div>

				<h1 class="title">
					<?php
						the_title();
					?>
				</h1>

				<div class="d-flex justify-content-between my-3 align-items-center">
					<div class="date-time-author">
						Last update <?php the_date();?> by <?php the_author(); ?>
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

				<?php if(get_the_post_thumbnail() != null): ?>

				<img class="mb-3" src="<?=get_the_post_thumbnail_url();?>" alt="<?=the_title();?>" style="width: 100%; border-radius: 20px">

				<?php endif; ?>

				<div class="content">

					<?php
						the_content();
					
						$tags = get_the_tags();
					?>


					<?php
					if($tags):
					?>
						<div class="post-tags">
							<ul>
								<?php
									foreach($tags as $tag):
										echo '<li><a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a></li>';
									endforeach;
								?>
							</ul>
						</div>
					<?php
					endif;
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

		<div class="col-md-3 pt-4">
			<?php get_sidebar(); ?>
		</div>
	</div>

</div>	

<?php
get_footer();
