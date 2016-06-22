<?php get_header();?>
	<!--SLIDER-->
	<div class="container" id="slide-box">
		<ul class="bxslider">
				<li><img src="<?php bloginfo('template_directory'); ?>/images/teste-slide.png" /></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/images/img02.jpeg" /></li>
			</ul>
	</div>
	<!-- QUEM SOMOS -->
	<div class="container content-areas" id="quem-somos">
		<h1>Bolora Distribuidora</h1>
		<div class="col-md-10 col-md-offset-1">
			<p><strong>A Boloroa Distribuidora</strong> iniciou suas atividades a mais de cinco anos. Consolidou-se e vem conquistando espaço para se tornar uma das principais distribuidoras na Região Centro Oeste.</p>
			<p>O foco da empresa é a distribuição de produtos como ferramentas, antenas, tomadas, cabos, acessórios, peças, produtos para integração, áudio e vídeo e muito mais, para Revendedores, Integradores e Varejistas.</p>
			<p>A Bolora oferece uma ampla varieade de produtos para os segmentos Corporativo, Consumer, Componentes, Automação Comercial, Suprimentos, TV&Imagem, Conectividade, Acessórios, de vários fabricantes renomados.</p>
			<button type="button" class="btn btn-success btn-areas" >
	  			Download do catálogo
			</button>
		</div>
	</div>
	<!-- PRODUTOS-->
	<div class="container content-areas" id="nossos-produtos">
		<h1>Nossos Produtos</h1>
		<div id="row-produtos" class="row">
			<?php query_posts('showposts=6'. '&orderby=rand');?>
			<?php if (have_posts()): while (have_posts()) : the_post();?>
				<div class="col-md-4 col-xs-6 produtos">
					<div class="thumbnail produtos-thumb">
						<a href="<?php the_Permalink()?>">
							<div class="produtos-img">
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
	<?php get_footer();?>
