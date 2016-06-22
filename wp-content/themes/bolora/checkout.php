<?php /* Template Name: checkout */ ?>
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
		<?php
			$item=$_POST['item'];
			while (list ($key1,$val1) = @each ($item)) {
			unset($_SESSION['cart'][$val1]);
			}
		?>
			<form method='post'>
			<ul>
				<?php while (list ($key, $val) = @each ($_SESSION['cart'])):?>
					<li><input type=text name=item[<?=$key?>] value='<?=$val?>'></li>
				<?php endwhile;?>
					<li><input type="text" name="Nome" value="" placeholder="Escreva seu nome"></li>
					<li><input type="text" name="Email" value="" placeholder="Escreva seu email"></li>
					<li><input type="tel" name="Telefone" value="" placeholder="Telefone"></li>
			</ul>
				<button type='submit' class='btn btn-success col-md-4'>Enviar</button>
			</form>
			<?php if ($_SERVER['REQUEST_METHOD'] == 'POST'):?>
			<?php
				$mensagem='Dados enviados via formulario-site:/n/n';
				$mensagem.='Nome:'.$_REQUEST['Nome'].'/n';
				foreach ($_SESSION['cart'] as $produtos) {
					$mensagem .='PRODUTO:'.$produtos.'/n';
				}
				$mensagem.='Email:'.$_REQUEST['Email'].'/n';
				$mensagem.='Telefone:'.$_REQUEST['Telefone'].'/n';

				$to='boloradistribuidora@boloradistribuidora.com.br';
				$subject='Pedido feito pelo site';
				$header='header: from:boloradistribuidora@boloradistribuidora.com.br';
				@mail($to, $subject, $mensagem,$header);
			?>
			<div class="alert alert-success" role="alert"> <strong>Parabéns</strong> seu email foi enviado com sucesso.</div>
			<?php unset($_SESSION['cart']);?>
			<?php else:?>
			<div class="alert alert-warning" role="alert"> <strong>Atenção</strong> Verfique todos os campos acima para formular seu pedido.</div>
			<?php endif;?>

		<div class="itens-cart-page">Você ainda tem <span class="quant-cart"><?php echo sizeof($_SESSION['cart']);?></span><a href="<?php echo get_settings('home'); ?>/pedidos"> na sua lista</a>
		</div>
	</div>
</div>
<?php get_footer();?>
