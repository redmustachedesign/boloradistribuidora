<?php get_header();?>
	<!-- CATEGORY-POST-->
	<div class="container content-areas" id="category-post">
		<div id="category">
			<?php if (have_posts()): while (have_posts()) : the_post();?>
				<div class="col-md-4 produtos">
					<div class="thumbnail produtos-thumb">
						<a href="<?php the_Permalink()?>">
							<div class="img-circle produtos-img">
								<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
								<img src="<?php echo $url; ?>">
							</div>
							<h3><?php the_title();?></h3>
							<p><?php the_excerpt_rereloaded(15);?></p>
						</a>
					</div>
			</div>
			<?php endwhile; else:?>
			<?php endif;?>
			<div class="paginator">
				<?php wp_pagenavi(); ?>
			</div>
		</div>

	</div>
	<!-- FALE CONOSCO-->
	<?php include (TEMPLATEPATH . '/fale-conosco.php'); ?>
	<?php get_footer();?>
