<?php /* Template Name: pedidos */ ?>
<?php get_header();?>
<div class="pages">
	<div class="container">
		<?php if (have_posts()): while (have_posts()) : the_post();?>
			<span class="titulo"><?php the_title();?></span>
			<?php the_content();?>
		<?php endwhile; else:?>
		<?php endif;?>
	</div>
	<div class="list-page page-pedidos container">
		<?php
			$item=$_POST['item'];
			while (list ($key1,$val1) = @each ($item)) {
			unset($_SESSION['cart'][$val1]);
			}
		?>
			<form method='post'>
			<ul>
				<?php while (list ($key, $val) = @each ($_SESSION['cart'])):?>
					<li><input type=checkbox name=item[] value='<?=$key?>'>  <?=$val?></li>
				<?php endwhile;?>
			</ul>
				<button type='submit' class='btn btn-danger col-md-4'>Excluir</button>
			</form>
			<button class='btn btn-warning col-md-4' onclick="location.href = '<?php echo get_settings('home'); ?>/checkout';">Finalizar compra</button>
		<div class="itens-cart-page">Você ainda tem <span class="quant-cart"><?php echo sizeof($_SESSION['cart']);?></span><a href="<?php echo get_settings('home'); ?>/pedidos"> na sua lista</a>
		</div>
	</div>
</div>
<?php get_footer();?>
