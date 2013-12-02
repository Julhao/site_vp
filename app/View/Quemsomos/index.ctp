		<?php $this->Html->addCrumb('Quem Somos', '/quemsomos', array('escape' => false));?>
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
				<!--<h1>Quem Somos</h1>
				<p>
					Lorem Ipsum is simply dummy text of the printing and
					typesetting industry. Lorem Ipsum has been the
					industry's standard dummy text ever since the 1500s,
					when an unknown printer took a galley of type and
					scrambled it to make a type specimen book.
				</p>	 
				<p>	 
					It has survived not only five centuries, but also the
					leap into electronic typesetting, remaining 
					essentially unchanged.
				</p>	 
				<p>	 
					It was popularised in the 1960s with the release of Letraset
					sheets containing Lorem Ipsum passages, and more recently
					with desktop publishing software like Aldus PageMaker
					including versions of Lorem Ipsum.				
				</p>
			-->
				<?php
					$i=0;
					foreach ($quem_somos as $empresa): ?>
					
					<h1><?php echo h($empresa['QuemSomo']['titulo']); ?></h1>

					<p><?php echo h($empresa['QuemSomo']['conteudo']); ?></p>
				<?php $i++; endforeach; ?>
			</div>	
		</div>					
		<div class="sidebar-right grid_4">
			<?php
				echo $this->Html->image('banner.jpg', array('class' => 'pie'));
				echo $this->Html->image('banner.jpg', array('class' => 'pie'));
			?>
		</div>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					