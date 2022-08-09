<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

get_header();
setPostViews(get_the_ID());
?>

<div class="container">
	
	<div class="row g-0 g-mg-5">
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
						Last update <?php the_modified_date();?> by <?php the_author(); ?>
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
					//if ( comments_open() || get_comments_number() ) :
					//	comments_template();
					//endif;
					
					?>
					<div id="disqus_thread"></div>
					<script>
						/**
						*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
						*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
						/*
						var disqus_config = function () {
						this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
						this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
						};
						*/
						(function() { // DON'T EDIT BELOW THIS LINE
						var d = document, s = d.createElement('script');
						s.src = 'https://inside-of-code.disqus.com/embed.js';
						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
						})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
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
