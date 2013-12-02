		<?php $this->Html->addCrumb(' ', '');?>
		<div class="grid_6 filter_auto pie">
			<!-- the tabs -->
			<ul class="tabs">
				<li><a href="#">Ve&iacute;culos</a></li>
				<li><a href="#">Revendas</a></li>
			</ul>
			 
			<!-- tab "panes" -->
			<div class="panes">
				<div class="pie">
					<form class="">
						<ol>
							<li>
								<label>Marca: </label>
								<select class="select_busca">
									<option></option>
								</select>
							</li>
							<li>
								<label>Modelo:</label>
								<select class="select_busca">
									<option></option>
								</select>
							</li>
							<li>
								<a href="">Incluir + um modelo na busca</a>
							</li>
							<li>
								<label>Ano:</label>
								<select class="select_de">
									<option></option>
								</select>	
								<select class="select_ate">
									<option></option>
								</select>
							</li>
							<li>
								<label>Pre&ccedil;o:</label>
								<select class="select_de">
									<option></option>
								</select>	
								<select class="select_ate">
									<option></option>
								</select>
							</li>
							<li>
								<label>Estado:</label>
								<select class="select_busca">
									<option></option>
								</select>
							</li>
							<li>
								<label>Cidade:</label>
								<select class="select_busca">
									<option></option>
								</select>
							</li>
							<li>
								<label>Busca:</label>
								<select class="select_busca">
									<option></option>
								</select>
							</li>
						</ol>
						<?php echo $this->Html->link('busca detalhada', '/', array('escape' => false, 'class' => 'busca_detalhada')); ?>
						<input type="submit" value=" " class="busca_ofertas"/>
					</form>
				</div>
				<div class="pie">
					<form class="">
						<ol>
							<li>
								<span>Buscar ve&iacute;culos de revendas</span>
							</li>
							<li>
								<label>Cidade: </label>
								<select class="select_busca">
									<option></option>
								</select>
							</li>
							<li>
								<label>Revenda:</label>
								<select class="select_busca">
									<option></option>
								</select>
							</li>
							<li>
								<span>Buscar veículos de revendas</span>
							</li>
							<li>
								<label>Estado:</label>
								<select class="select_busca">
									<option></option>
								</select>
							</li>
							<li>
								<label>Cidade:</label>
								<select class="select_busca">
									<option></option>
								</select>
							</li>
						</ol>
						<?php echo $this->Html->link('busca detalhada', '/', array('escape' => false, 'class' => 'busca_detalhada')); ?>
						<input type="submit" value=" " class="busca_ofertas"/>
					</form>
				</div>
			</div>
		</div>
		<div class="grid_10 right_mediabox pie">
			<div class="pie">
				<div id="slides" class="pie">
					<div class="slides_container">
						<div>
							<img src="img/mediabox.jpg"/>
						</div>
						<div>
							<img src="img/mediabox.jpg"/>
						</div>
						<div>
							<img src="img/mediabox.jpg"/>
						</div>
						<div>
							<img src="img/mediabox.jpg"/>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="anuncie_cadastre grid_10">
			<div class="anuncie">
				<h1>Anuncie Seu Ve&iacute;culo</h1>
				<?php //echo $html->image('anuncie.jpg', array('class' => ''))
					echo $this->Html->image('anuncie.jpg', array('alt' => ''));
				?>
			</div>
			<div>
				<h1>Cadastre Sua Revenda</h1>
				<?php //echo $html->image('cadastre.jpg', array('class' => ''))
					echo $this->Html->image('cadastre.jpg', array('alt' => ''));?>
			</div>
		</div>
		<div class="box_left grid_10 alpha omega">
			<div class="grid_12">
				<h1>Destaques</h1>
				<form class="form_busca">
					<input type="text" class="compo_busca" value="Busca Rápida" id="busca_rapida"/>
					<input type="submit" class="bnt_busca" value=" "/>
				</form>
			</div>
			<div class="grid_4 box_carros">
				<?php echo $this->Html->image('miniatura_carro.jpg', array('class' => 'pie'));?>
				<ul>
					<li><span>Carro:</span> Ranger Cab. Estendida</li>
					<li><span>Modelo:</span></li>
					<li><span>Ano:</span> 2001/2001</li>
					<li><span>Tipo:</span></li>
					<li><strong>R$ 35.000,00</strong></li>
				</ul>
			</div>
			<div class="grid_4 box_carros">
				<?php echo $this->Html->image('miniatura_carro.jpg', array('class' => 'pie'));?>
				<ul>
					<li><span>Carro:</span> Ranger Cab. Estendida</li>
					<li><span>Modelo:</span></li>
					<li><span>Ano:</span> 2001/2001</li>
					<li><span>Tipo:</span></li>
					<li><strong>R$ 35.000,00</strong></li>
				</ul>
			</div>
			<div class="grid_4 box_carros">
				<?php echo $this->Html->image('miniatura_carro.jpg', array('class' => 'pie'));?>
				<ul>
					<li><span>Carro:</span> Ranger Cab. Estendida</li>
					<li><span>Modelo:</span></li>
					<li><span>Ano:</span> 2001/2001</li>
					<li><span>Tipo:</span></li>
					<li><strong>R$ 35.000,00</strong></li>
				</ul>
			</div>
			<div class="grid_4 box_carros">
				<?php echo $this->Html->image('miniatura_carro.jpg', array('class' => 'pie'));?>
				<ul>
					<li><span>Carro:</span> Ranger Cab. Estendida</li>
					<li><span>Modelo:</span></li>
					<li><span>Ano:</span> 2001/2001</li>
					<li><span>Tipo:</span></li>
					<li><strong>R$ 35.000,00</strong></li>
				</ul>
			</div>
			<div class="grid_4 box_carros">
				<?php echo $this->Html->image('miniatura_carro.jpg', array('class' => 'pie'));?>
				<ul>
					<li><span>Carro:</span> Ranger Cab. Estendida</li>
					<li><span>Modelo:</span></li>
					<li><span>Ano:</span> 2001/2001</li>
					<li><span>Tipo:</span></li>
					<li><strong>R$ 35.000,00</strong></li>
				</ul>
			</div>
			<div class="grid_4 box_carros">
				<?php echo $this->Html->image('miniatura_carro.jpg', array('class' => 'pie'));?>
				<ul>
					<li><span>Carro:</span> Ranger Cab. Estendida</li>
					<li><span>Modelo:</span></li>
					<li><span>Ano:</span> 2001/2001</li>
					<li><span>Tipo:</span></li>
					<li><strong>R$ 35.000,00</strong></li>
				</ul>
			</div>
			<div class="rodape_home">
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
				<div class="grid_6 revendas">
					<h1>Revendas</h1>
					<ul>
						<li>
							<?php echo $this->Html->image('img1.jpg', array('class' => ''));?>
							<a href="">.Com Motors</a>
						</li>
						<li>
							<?php echo $this->Html->image('img2.jpg', array('class' => ''));?>
							<a href="">100% Ve&iacute;culos Multimarcas</a>
						</li>
						<li>
							<?php echo $this->Html->image('img3.jpg', array('class' => ''));?>
							<a href="">14 Bis Ve&iacute;culos</a>
						</li>
						<li>
							<?php echo $this->Html->image('img1.jpg', array('class' => ''));?>
							<a href="">.Com Motors</a>
						</li>
						<li>
							<?php echo $this->Html->image('img4.jpg', array('class' => ''));?>
							<a href="">1&#176; Conceitos Ve&iacute;culos</a>
						</li>
						<li>
							<?php echo $this->Html->image('img5.jpg', array('class' => ''));?>
							<a href="">2001 Ve&iacute;culos</a>
						</li>
					</ul>
					
				</div>
			</div>
		</div>					
		<div class="sidebar-right grid_4 alpha">
			<?php echo $this->Html->image('banner.jpg', array('class' => 'pie'));?>
			<?php echo $this->Html->image('banner.jpg', array('class' => 'pie img_banner'));?>
		</div>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					