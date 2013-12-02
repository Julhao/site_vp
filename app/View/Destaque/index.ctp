		<?php $this->Html->addCrumb('Destaque', '/destaque', array('escape' => false));?>
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
						<input type="text" class="campo_texto pie" value="Usuário" id="usuario"/>
						<input type="text" class="campo_texto pie" value="Senha" id="senha"/>
						<input type="submit" value=" " class="bnt_enviar"/>
					</form>
				</div>
				<div class="grid_4 links_uteis pie">
					<h2>Revendas</h2>
					<form>
						<input type="text" class="campo_texto pie" value="Usuário" id="usuario_rv"/>
						<input type="text" class="campo_texto pie" value="Senha" id="senha_rv"/>
						<input type="submit" value=" " class="bnt_enviar"/>
					</form>
				</div>
			</div>
			<div class="grid_6 conteudo_internas">
				<h1>Destaque</h1>
				<div class="grid_4 box_carros box_carros-destaque">
					<script language="JavaScript"> function abrir(URL) {  var width = 1050;  var height = 730;  var left = 99;  var top = 99;  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no'); } </script> 
					<?php // echo $this->Html->link($this->Html->image("miniatura_carro.jpg", array('class' => 'pie' )), "javascript:abrir('destaque/interna');", array('escape' => false));
						echo $this->Html->image("miniatura_carro.jpg", array(
							"alt" => "Brownies", 'class' => 'pie',
							'url' => array('controller' => '')
						));
					?>
					<ul>
						<li><span>Carro:</span> Ranger Cab. Estendida</li>
						<li><span>Modelo:</span></li>
						<li><span>Ano:</span> 2001/2001</li>
						<li><span>Tipo:</span></li>
						<li><strong>R$ 35.000,00</strong></li>
					</ul>
				</div>
				<div class="grid_4 box_carros box_carros-destaque">
					<script language="JavaScript"> function abrir(URL) {  var width = 1050;  var height = 730;  var left = 99;  var top = 99;  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no'); } </script> 
					<?php // echo $this->Html->link($this->Html->image("miniatura_carro.jpg", array('class' => 'pie' )), "javascript:abrir('destaque/interna');", array('escape' => false));
						echo $this->Html->image("miniatura_carro.jpg", array(
							"alt" => "Brownies", 'class' => 'pie',
							'url' => array('controller' => '')
						));
					?>
					<ul>
						<li><span>Carro:</span> Ranger Cab. Estendida</li>
						<li><span>Modelo:</span></li>
						<li><span>Ano:</span> 2001/2001</li>
						<li><span>Tipo:</span></li>
						<li><strong>R$ 35.000,00</strong></li>
					</ul>
				</div>
				<div class="grid_4 box_carros box_carros-destaque">
					<?php // echo $this->Html->link($this->Html->image("miniatura_carro.jpg", array('class' => 'pie' )), "javascript:abrir('destaque/interna');", array('escape' => false));
						echo $this->Html->image("miniatura_carro.jpg", array(
							"alt" => "Brownies", 'class' => 'pie',
							'url' => array('controller' => '')
						));
					?>
					<ul>
						<li><span>Carro:</span> Ranger Cab. Estendida</li>
						<li><span>Modelo:</span></li>
						<li><span>Ano:</span> 2001/2001</li>
						<li><span>Tipo:</span></li>
						<li><strong>R$ 35.000,00</strong></li>
					</ul>
				</div>
				<div class="grid_4 box_carros box_carros-destaque">
					<?php // echo $this->Html->link($this->Html->image("miniatura_carro.jpg", array('class' => 'pie' )), "javascript:abrir('destaque/interna');", array('escape' => false));
						echo $this->Html->image("miniatura_carro.jpg", array(
							"alt" => "Brownies", 'class' => 'pie',
							'url' => array('controller' => '')
						));
					?>
					<ul>
						<li><span>Carro:</span> Ranger Cab. Estendida</li>
						<li><span>Modelo:</span></li>
						<li><span>Ano:</span> 2001/2001</li>
						<li><span>Tipo:</span></li>
						<li><strong>R$ 35.000,00</strong></li>
					</ul>
				</div>
				<div class="grid_4 box_carros box_carros-destaque">
					<?php // echo $this->Html->link($this->Html->image("miniatura_carro.jpg", array('class' => 'pie' )), "javascript:abrir('destaque/interna');", array('escape' => false));
						echo $this->Html->image("miniatura_carro.jpg", array(
							"alt" => "Brownies", 'class' => 'pie',
							'url' => array('controller' => '')
						));
					?>
					<ul>
						<li><span>Carro:</span> Ranger Cab. Estendida</li>
						<li><span>Modelo:</span></li>
						<li><span>Ano:</span> 2001/2001</li>
						<li><span>Tipo:</span></li>
						<li><strong>R$ 35.000,00</strong></li>
					</ul>
				</div>
				<div class="grid_4 box_carros box_carros-destaque">
					<?php // echo $this->Html->link($this->Html->image("miniatura_carro.jpg", array('class' => 'pie' )), "javascript:abrir('destaque/interna');", array('escape' => false));
						echo $this->Html->image("miniatura_carro.jpg", array(
							"alt" => "Brownies", 'class' => 'pie',
							'url' => array('controller' => '')
						));
					?>
					<ul>
						<li><span>Carro:</span> Ranger Cab. Estendida</li>
						<li><span>Modelo:</span></li>
						<li><span>Ano:</span> 2001/2001</li>
						<li><span>Tipo:</span></li>
						<li><strong>R$ 35.000,00</strong></li>
					</ul>
				</div>
				<div class="grid_4 box_carros box_carros-destaque">
					<?php // echo $this->Html->link($this->Html->image("miniatura_carro.jpg", array('class' => 'pie' )), "javascript:abrir('destaque/interna');", array('escape' => false));
						echo $this->Html->image("miniatura_carro.jpg", array(
							"alt" => "Brownies", 'class' => 'pie',
							'url' => array('controller' => '')
						));
					?>
					<ul>
						<li><span>Carro:</span> Ranger Cab. Estendida</li>
						<li><span>Modelo:</span></li>
						<li><span>Ano:</span> 2001/2001</li>
						<li><span>Tipo:</span></li>
						<li><strong>R$ 35.000,00</strong></li>
					</ul>
				</div>
				<div class="grid_4 box_carros box_carros-destaque">
					<?php // echo $this->Html->link($this->Html->image("miniatura_carro.jpg", array('class' => 'pie' )), "javascript:abrir('destaque/interna');", array('escape' => false));
						echo $this->Html->image("miniatura_carro.jpg", array(
							"alt" => "Brownies", 'class' => 'pie',
							'url' => array('controller' => '')
						));
					?>
					<ul>
						<li><span>Carro:</span> Ranger Cab. Estendida</li>
						<li><span>Modelo:</span></li>
						<li><span>Ano:</span> 2001/2001</li>
						<li><span>Tipo:</span></li>
						<li><strong>R$ 35.000,00</strong></li>
					</ul>
				</div>
				<ul class="paginacao">
					<li><a href="" class="pri-pag"><<</a></li>
					<li class="divisao_pag"><a href="" class="nav_prev"><</a></li>
					<li class="pags"><a href="">1</a></li>
					<li class="pags"><a href="">2</a></li>
					<li class="pags"><a href="">3</a></li>
					<li class="pags"><a href="">4</a></li>
					<li class="pags"><a href="">5</a></li>
					<li class="pags"><a href="">6</a></li>
					<li class="pags"><a href="">7</a></li>
					<li class="pags"><a href="">8</a></li>
					<li class="pags"><a href="">9</a></li>
					<li class="pags"><a href="">10</a></li>
					<li class="divisao_pag-right"><a href="" class="nav_next">></a></li>
					<li><a href="" class="ult-pag">>></a></li>
				</ul>
			</div>
		</div>					
		<div class="sidebar-right grid_4">
			<img src="img/banner.jpg" class="pie"/>
			<img src="img/banner.jpg" class="pie"/>
		</div>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					