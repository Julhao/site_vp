<!DOCTYPE html PUBLIC "-/W3C/DTD XHTML 1.0 Strict/EN" "http:/www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xml:lang="en" xmlns="http:/www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title></title>
		<?php echo $this->Html->css(array('grid/reset','grid/960','popup','plugins')); ?>
	    <?php echo $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js','pluginsjs/jquery-1.5.min','pluginsjs/jquery.main')); ?>

	</head>
	<body>
		<div class="interna_destaque">
			<div class="header_internas">
				<h1>
					<?php echo $html->image('icone_w.jpg', array('class' => 'pie'))?>
					Tiguan 2.0 Turbo
				</h1>
				<ul>
					<li><?php echo $this->Html->link('Adicionar aos favoritos', '/', array('escape' => false, 'class' => 'link_add')); ?></li>
					<li><?php echo $this->Html->link('Enviar Proposta', '/', array('escape' => false, 'class' => 'link_enviar')); ?></li>
					<li><?php echo $this->Html->link('Indique a um amigo', '/', array('escape' => false, 'class' => 'link_amigo')); ?></li>
				</ul>
			</div>
			<div class="conteudo_internas">
				<div class="carousel-holder">
					<div class="social">
						<!-- Place this tag where you want the +1 button to render. -->
						<div class="g-plusone" data-size="medium"></div>

						<!-- Place this tag after the last +1 button tag. -->
						<script type="text/javascript">
						  window.___gcfg = {lang: 'pt-BR'};

						  (function() {
							var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
							po.src = 'https://apis.google.com/js/plusone.js';
							var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
						  })();
						</script>
						<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Flocalhost%2FVp%2Fdestaque%2Finterna&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
					</div>
					<div class="box style-2">
						<ul class="large-img">
							<li><?php echo $this->Html->link($this->Html->image('img_carro.jpg'),'#',array('escape'=>false,'alt'=>'Image'));?></li>
							<li><?php echo $this->Html->link($this->Html->image('img_carro.jpg'),'#',array('escape'=>false,'alt'=>'Image'));?></li>
							<li><?php echo $this->Html->link($this->Html->image('img_carro.jpg'),'#',array('escape'=>false,'alt'=>'Image'));?></li>
							<li><?php echo $this->Html->link($this->Html->image('img_carro.jpg'),'#',array('escape'=>false,'alt'=>'Image'));?></li>
							<li><?php echo $this->Html->link($this->Html->image('img_carro.jpg'),'#',array('escape'=>false,'alt'=>'Image'));?></li>
							<li><?php echo $this->Html->link($this->Html->image('img_carro.jpg'),'#',array('escape'=>false,'alt'=>'Image'));?></li>
							<li><?php echo $this->Html->link($this->Html->image('img_carro.jpg'),'#',array('escape'=>false,'alt'=>'Image'));?></li>
							<li><?php echo $this->Html->link($this->Html->image('img_carro.jpg'),'#',array('escape'=>false,'alt'=>'Image'));?></li>
						</ul>
						<div class="carousel">
							<a href="#" class="link-prev">Previous</a>
							<div class="holder">
								<ul>
									<li class="active"><?php echo $this->Html->link($this->Html->image('img_carro.jpg'),'#',array('escape'=>false,'alt'=>'Image'));?></li>
									<li><?php echo $this->Html->link($this->Html->image('img_carro.jpg'),'#',array('escape'=>false,'alt'=>'Image'));?></li>
									<li><?php echo $this->Html->link($this->Html->image('img_carro.jpg'),'#',array('escape'=>false,'alt'=>'Image'));?></li>
									<li><?php echo $this->Html->link($this->Html->image('img_carro.jpg'),'#',array('escape'=>false,'alt'=>'Image'));?></li>
									<li><?php echo $this->Html->link($this->Html->image('img_carro.jpg'),'#',array('escape'=>false,'alt'=>'Image'));?></li>
									<li><?php echo $this->Html->link($this->Html->image('img_carro.jpg'),'#',array('escape'=>false,'alt'=>'Image'));?></li>
									<li><?php echo $this->Html->link($this->Html->image('img_carro.jpg'),'#',array('escape'=>false,'alt'=>'Image'));?></li>
									<li><?php echo $this->Html->link($this->Html->image('img_carro.jpg'),'#',array('escape'=>false,'alt'=>'Image'));?></li>
								</ul>
							</div>
							<a href="#" class="link-next">Next</a>
						</div>
					</div>
				</div>
				<div class="conteudo_right">
					<h2>R$ 95.000,00</h2>
					<ul>
						<li>
							<span>Modelo:</span> Tiguan
						</li>
						<li>
							<span>C&oacute;digo:</span> <strong>559539</strong>
						</li>
						<li>
							<span>Porta:</span> <strong>4</strong>
						</li>
						<li>
							<span>Combust&iacute;vel:</span><strong> Gasolina</strong>
						</li>
						<li>
							<span>Estilo:</span> utilit&aacute;rio Esportivo
						</li>
					</ul>
					<ul>
						<li>
							<span>Marca:</span> Volkswagen
						</li>
						<li>
							<span>Ano:</span><strong> 2012/2011</strong>
						</li>
						<li>
							<span>Cor:</span><strong> Preto</strong>
						</li>
						<li>
							<span>C&acirc;mbio:</span><strong> Autom&aacute;tico</strong>
						</li>
					</ul>
					<div class="box_detalhe">
						<h3>Detalhes do Ve&iacute;culos</h3>
						<div class="pie">
							<p>
								CD Player com 6 cds.<br>
								21.000km.<br>
								Teto Skywill (Teto Solar)<br>
								Carro de n&atilde;o fumante.<br>
								Park Asist. (Estaciona Sozinha).<br>
								Camer&acirc; de R&eacute;.
							</p>
						</div>
					</div>
					<span class="span_proprietario">Arnaldo</span>
					<span class="span_cidade">S&atilde;o Jos&eacute; dos Rio Preto - SP</span>
					<small class="small_telefone">(17) 8101.0081</small>
				</div>
			</div>
			<div class="footer_internas">
				<?php echo $html->image('banner_rodape.jpg', array('class' => 'pie'))?>
			</div>
		</div>
		<div class="sidebar_interna">
			<h2>
				Mais Ofertas:
				<?php echo $this->Html->link('www.vpmotors.com.br', '/', array()); ?>
			</h2>
			<?php echo $html->image('logo_pg_internas.jpg', array('class' => 'pie logo_pg_internas'))?>
			<div class="mais_ofertas">
				<?php echo $html->image('img_ofertas.jpg', array('class' => 'pie'))?>
				<ul>
					<li><span>Volkswagen</span></li>
					<li>Tiguan</li>
					<li>2013 / 2012</li>
					<li>Gasolina</li>
				</ul>
			</div>
			<div class="mais_ofertas">
				<?php echo $html->image('img_ofertas.jpg', array('class' => 'pie'))?>
				<ul>
					<li><span>Volkswagen</span></li>
					<li>Tiguan</li>
					<li>2013 / 2012</li>
					<li>Gasolina</li>
				</ul>
			</div>
			<div class="mais_ofertas">
				<?php echo $html->image('img_ofertas.jpg', array('class' => 'pie'))?>
				<ul>
					<li><span>Volkswagen</span></li>
					<li>Tiguan</li>
					<li>2013 / 2012</li>
					<li>Gasolina</li>
				</ul>
			</div>
			<h3>
				Ve&iacute;culos da mesma<br>
				categoria
			</h3>
			<ul class="carros_categoria">
				<li class="bg_cinza">
					Volkswagem Tiguan<br>
					Preto<br>
					<strong>R$ 95.000,00</strong>
				</li>
				<li>
					Volkswagem Tiguan<br>
					Preto<br>
					<strong>R$ 95.000,00</strong>
				</li>
				<li class="bg_cinza">
					Volkswagem Tiguan<br>
					Preto<br>
					<strong>R$ 95.000,00</strong>
				</li>
				<li>
					Volkswagem Tiguan<br>
					Preto<br>
					<strong>R$ 95.000,00</strong>
				</li>
			</ul>
			<?php echo $this->Html->link('Carros Usados', '/', array('class' => 'carros_usados')); ?>
		</div>
	</body>
</html>
