<?php get_header();?>
	<!-- SINGLE-POST-->
	<div class="container content-areas" id="single-post">
		<div id="single">
			<?php if (have_posts()): while (have_posts()) : the_post();?>
				<div id="row-produtos-single" class="row">
					<div class="col-md-6">
						<div class="produtos-single">
							<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
							<img src="<?php echo $url; ?>">
						</div>
					</div>
					<div class="col-md-6">
						<h1><?php the_title();?></h1>
						<p><?php the_content();?></p>
						<p><strong>Código: <?php $key="code";echo get_post_meta($post->ID,$key,true);?></strong></p>
					</div>
				</div>
				<div class="single-tags">
					<?php if (function_exists('the_tags'))the_tags();?>
				</div>
			<?php endwhile; else:?>
			<?php endif;?>
			<div class="exemplo-prod">
				<p>Insira o código do produto e a quantidade separados por um "-"</p>
				<p><span>Exemplo: 123456 - 20 unidades</span></p>
			</div>
			<?php
				$product=$_POST['product'];
				if(strlen($product)>=1){
					array_push($_SESSION['cart'],$product); // Items added to cart
				}
			?>
			<form id="form-prod-single" method="post">
				<input type='text' name="product" class="col-md-3" placeholder='Escreva o código + quantidade'>
				<button type="submit" class=" btn btn-primary col-md-2">Adicionar produto</button>
			</form>
			<div class="itens-cart-single">Você já adicionou <span class="quant-cart"><?php echo sizeof($_SESSION['cart']);?></span><a href="<?php echo get_settings('home'); ?>/pedidos"> à sua lista</a>
			</div>
		</div>
	</div>
	<?php get_footer();?>
