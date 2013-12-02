		
		<?php $this->Html->addCrumb('Anuncie Seu Ve&iacute;culo', '/anuncie', array('escape' => false));?>
	
		<div class="box_left grid_10 alpha box_left-internas">
			<div class="grid_4 alpha omega sidebar-left">
				<!-- 
					<div class="grid_4 links_uteis pie">
						<h1>Links &Uacute;teis</h1>
						<ul>
							<li><?php echo $this->Html->link('Empregos em Rio Preto', '/', array('escape' => false)); ?></li>
							<li><?php echo $this->Html->link('Multas de Tr&acirc;nsito', '/', array('escape' => false)); ?></li>
							<li><?php echo $this->Html->link('Pontos na Carteir', '/', array('escape' => false)); ?>a</li>
							<li><?php echo $this->Html->link('IPVA', '/', array('escape' => false)); ?></li>
							<li><?php echo $this->Html->link('Tabela Fipe', '/', array('escape' => false)); ?></li>
							<li><?php echo $this->Html->link('Produtos e Servi&ccedil;o', '/', array('escape' => false)); ?>s</li>
							<li><?php echo $this->Html->link('Depoimentos', '/', array('escape' => false)); ?></li>
							<li><?php echo $this->Html->link('Eventos', '/', array('escape' => false)); ?></li>
							<li><?php echo $this->Html->link('Noticias', '/', array('escape' => false)); ?></li>
							<li><?php echo $this->Html->link('Compre Auto Celula', '/', array('escape' => false)); ?>r</li>
							<li><?php echo $this->Html->link('Fale Conosco', '/', array('escape' => false)); ?></li>
						</ul>
					</div>
				-->
				<div class="grid_4 links_uteis pie">
					<h2>Minha VP Motors</h2>
					<form>
						<input type="text" class="campo_texto pie" value="Usu&aacute;rio" id="usuario"/>
						<input type="text" class="campo_texto pie" value="Senha" id="senha"/>
						<input type="submit" value=" " class="bnt_enviar"/>
					</form>
				</div>
				<div class="grid_4 links_uteis pie">
					<h2>Revendas</h2>
					<form>
						<input type="text" class="campo_texto pie" value="Usu&aacute;rio" id="usuario_rv"/>
						<input type="text" class="campo_texto pie" value="Senha" id="senha_rv"/>
						<input type="submit" value=" " class="bnt_enviar"/>
					</form>
				</div>
			</div>
			<div class="grid_6 pag_anuncie">
				<h1>Venda o Seu Carro</h1>
				<p>
					<strong>Lorem Ipsum</strong> has been the industry's standard dummy text ever since the
					1500s, when an unknown printer took a galley of type and scrambled it to
					make a type specimen book.
				</p>
				<div class="tipo_anuncio pie">
					<h2>
						An&uacute;ncio
						<span>Standard</span>
					</h2>
					<?php echo $this->Html->image('anuncio_standard.jpg', array('alt' => ''));?>
					<ul>
						<li>Lorem Ipsum</li>
						<li>Lorem Ipsum</li>
						<li>Lorem Ipsum</li>
					</ul>
					<small>
						<center>
							R$
							<span>35</span>
						</center>
					</small>
					<?php echo $this->Html->link('', '/', array('class' => 'bnt_anuncio', 'name' => 'modal')); ?>
				</div>
				<div class="tipo_anuncio pie">
					<h2>
						An&uacute;ncio
						<span>Standard</span>
					</h2>
					<?php echo $this->Html->image('anuncio_destaque.jpg', array('alt' => ''));?>
					<ul>
						<li>Lorem Ipsum</li>
						<li>Lorem Ipsum</li>
						<li>Lorem Ipsum</li>
					</ul>
					<small>
						<center>
							R$
							<span>70</span>
						</center>
					</small>
					<?php echo $this->Html->link('', '/', array('class' => 'bnt_anuncio')); ?>
				</div>
				<div class="tipo_anuncio pie">
					<h2>
						An&uacute;ncio
						<span>Standard</span>
					</h2>
					<?php echo $this->Html->image('anuncio_destaque.jpg', array('alt' => ''));?>
					<ul>
						<li>Lorem Ipsum</li>
						<li>Lorem Ipsum</li>
						<li>Lorem Ipsum</li>
					</ul>
					<small>
						<center>
							R$
							<span>99</span>
						</center>
					</small>
					<?php echo $this->Html->link('', '/', array('class' => 'bnt_anuncio')); ?>
				</div>
				<p>
					<strong>Lorem Ipsum</strong> has been the industry's standard dummy text ever since the
					1500s, when an unknown printer took a galley of type and scrambled it to
					make a type specimen book.
				</p>
				
				<h1>Veja como ficar&aacute; o an&uacute;ncio</h1>
				<?php echo $this->Html->image('exemplo_anuncio.jpg', array('class' => 'exemplo_anuncio'));?>
				<h1>Depoimentos de Clientes</h1>
				<div class="depoimento">
					<h2>Lorem Ipsum </h2>
					<p>
						Has been the industry's standard dummy text ever since the 1500s, when
						an unknown printer took a galley of type and scrambled it to make
						a type specimen book.
					</p>
				</div>
				<div class="depoimento">
					<h2>Lorem Ipsum </h2>
					<p>
						Has been the industry's standard dummy text ever since the 1500s, when
						an unknown printer took a galley of type and scrambled it to make
						a type specimen book.
					</p>
				</div>
				
				<h1>Formas de Pagemento e Seguran&ccedil;a</h1>
				<?php echo $this->Html->image('formas_pagamento.jpg', array('class' => 'exemplo_anuncio'));?>

			</div>
		</div>					
		<div class="sidebar-right grid_4">
			<?php echo $this->Html->image('banner.jpg', array('class' => 'pie'));?>
			<?php echo $this->Html->image('banner.jpg', array('class' => 'pie'));?>
		</div>
		
		
		
	<div id="boxes">
		<div id="dialog" class="window"> </div>
		<!-- Máscara para cobrir a tela -->
		<div id="mask"></div>
	</div>
