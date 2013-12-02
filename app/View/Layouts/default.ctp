<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
	<head>
		<?php
		mb_internal_encoding("UTF-8");
		mb_http_output( "iso-8859-1" ); 
		ob_start("mb_output_handler");   
		header("Content-Type: text/html; charset=ISO-8859-1",true);
		?>
		<title><?php echo $title_for_layout ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8;" />
		
		<?php echo $this->Html->css(array('cake.generic', 'grid/reset','grid/960','default','slider')); ?>
		<?php echo $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js','http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js', 'slides.min.jquery','jquery_contato'));?>
		
		<!--[if IE]>
			<?php echo $this->Html->css('somente_ie'); ?>
		<![endif]-->
		
		<!--[if lt IE 9]>
			<?php echo $this->Html->script('PIE');?>
		<![endif]-->
		<script>
			// perform JavaScript after the document is scriptable.
			$(function() {
				// setup ul.tabs to work as tabs for each div directly under div.panes
				$("ul.tabs").tabs("div.panes > div");
			});
			
			// Slider Home
			$(function(){
				$('#slides').slides({
					preload: true,
					generateNextPrev: false,
					play: 5000
				});
			});
		</script>
	</head>
	<body>
		<div id="header">
			<div class="container_16">
				<div class="grid_16 topo">
					<div class="grid_4 logo omega">
						<?php echo $this->Html->link($this->Html->image("logo2.png", array()), "/", array('escape' => false) );?>
					</div>
					<div class="grid_12 banner_topo omega">
						<?php echo $this->Html->image('banner_topo2.png', array('class' => 'pie'));?>
					</div>
				</div>
				<div class="grid_16 container_menu">
					<span class="aba_left"></span>
					<ul>
						<li class="bnt_home"><?php echo $this->Html->link($this->Html->image("bnt_home.jpg", array()), "/", array('escape' => false) );?></li>
						<li><?php echo $this->Html->link('Quem Somos', '/quemsomos', array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link('Anuncie Seu Ve&iacute;culo', '/anuncie', array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link('Revendas', '/revendas', array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link('Cidades Atendidas', '/cidade', array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link('Destaques', '/destaque', array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link('Contato', '/contato', array('escape' => false)); ?></li>
					</ul>
					<span class="aba_right"></span>
				</div>
			
			</div>
		</div>
		<div id="content">
			<div class="container_16">
				<div class="grid_16 conteudo">
					<div class="grid_16 navegacao">
						Voc&ecirc; est&aacute; em: <span><?php echo $this->Html->getCrumbs(' > ','Home');?></span>
					</div>
					<?php echo $content_for_layout ?>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="container_16">
				<div class="container_footer grid_16">
					<span class="aba_left"></span>
						<div class="conteudo grid_16">
							<div class="grid_6 alpha box_news omega">
								<h2>Cadastre-se e Receba Ofertas</h2>
								<form class="pie">
									<ol>
										<li>
											<label>Nome:</label>
											<input type="" class="campo_texto pie"/>
										</li>
										<li>
											<label>E-mail:</label>
											<input type="" class="campo_texto pie"/>
										</li>
										<li>
											<label>Celular:</label>
											<input type="" class="ddd pie"/>
											<input type="" class="tel pie"/>
										</li>
										<li>
											<input type="submit" value=" " class="bnt_enviar"/>
										</li>
									</ol>
								</form>
							</div>
							<div class="grid_3 endereco_footer">
								<h2>Empresa</h2>
								<p>
									Lorem Ipsum has been the
									industry's standard dummy text
									ever since the 1500s, when an
									unknown printer took a galley
									of type and scrambled.
								</p>
								<h2>Redes Sociais:</h2>
								<?php echo $this->Html->link($this->Html->image("icone_fc.png", array()), "/", array('escape' => false) );?>
								<?php echo $this->Html->link($this->Html->image("icone_tw.png", array()), "/", array('escape' => false) );?>
							</div>
							<div class="grid_3 contato_footer omega">
								<h2>Informa&ccedil;&otilde;es de Contato</h2>
								<p>
									Rua Prudente M Moraes, 302 - Vila Adyana
									S&atilde;o Jos&eacute; dos Campos - Cep: 12243-750
								</p>
								<h2>Telefone:</h2>
								<p>
									(12) 3911.7090
								</p>
								<h2>E-mail:</h2>
								<p>
									contato@vpmotors.com.br
								</p>
							</div>
						</div>
						<div class="rodape grid_5">
							VP Motors - <?php echo date ('Y'); ?><br />
							Todos os Direitos Reservados.
						</div>
						<?php echo $this->Html->link($this->Html->image("logo_identica.png", array()), "/", array('escape' => false, 'class' => 'logo_identica') );?>
					<span class="aba_right"></span>
				</div>
			</div>
		</div>
		<script>
			$(function(){
				if (window.PIE) {
					$('.pie').each(function() {
						PIE.attach(this);
					});
				}
			});
		</script>
	</body>
</html>
