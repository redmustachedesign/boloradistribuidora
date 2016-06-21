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
	<div class="list-page container">
		<?php $item=$_POST['item'];
			while (list ($key1,$val1) = @each ($item)) {
			unset($_SESSION['cart'][$val1]);
			}
			echo "<form method=post action=''><ul>";
			while (list ($key, $val) = each ($_SESSION['cart'])) {
			echo "<li><input type=text name=item[] value='$val'></li>";
			}?>
			</ul>
				<button type='submit' class='btn btn-danger col-md-4'>Excluir</button>
			</form>
		<div class="itens-cart-page">Você ainda tem <span class="quant-cart"><?php echo sizeof($_SESSION['cart']);?></span><a href="<?php echo get_settings('home'); ?>/pedidos"> na sua lista</a>
		</div>
		<button type='submit' class='btn btn-success col-md-4'>Enviar</button>
	</div>
</div>
<?php get_footer();?>
