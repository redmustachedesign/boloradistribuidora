<?php get_header();?>
	<!--SLIDER-->
	<div class="container" id="slide-box">
		<ul class="bxslider">
				<li><img src="<?php bloginfo('template_directory'); ?>/images/teste-slide.png" /></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/images/teste-slide.png" /></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/images/teste-slide.png" /></li>
			</ul>
	</div>
	<!-- QUEM SOMOS -->
	<div class="container content-areas" id="quem-somos">
		<h1>Bolora Distribuidora</h1>
		<p class="col-md-10 col-md-offset-1">Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		<button type="button" class="btn btn-success btn-areas" >
  			Download do catálogo
		</button>
	</div>
	<!-- PRODUTOS-->
	<div class="container content-areas" id="nossos-produtos">
		<h1>Nossos Produtos</h1>
		<div class="row">
			<?php query_posts('showposts=6');?>
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
		</div>
			<div class="btn-produtos">
				<?php $id_da_categoria = get_cat_id('produtos'); $link_da_categoria = get_category_link($id_da_categoria); ?>
				<a href="<?php echo $link_da_categoria;?>"><button type="button" class="btn btn-success btn-areas" >Veja a lista completa</button></a>
			</div>
	</div>
	<!-- FALE CONOSCO-->
<?php include (TEMPLATEPATH . '/fale-conosco.php'); ?>
	<?php get_footer();?>
