		<?php $this->Html->addCrumb('Contato', '/contato', array('escape' => false));?>
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
				<div class="grid_8 alpha"><?php echo $this->Session->flash();?></div>
				<?php //echo $this->Form->create('Contato', array('class' => 'pie grid_5 alpha contato')); ?>
				<?php echo $this->Form->create(array('Controller' => 'contato', 'action' => 'index', 'class' => 'pie grid_5 alpha contato'));?>
					<h1>Contato</h1><ol>
						<li>
							<?php echo $this->Form->input('nome-contato', array('id' => 'nome-contato', 'div' => false, 'label' => false, 'class' => 'campo_texto pie', 'placeholder' => 'Nome:'));?>
							<!-- <input type="" value="Nome:" class="campo_texto pie" id="nome-contato"/> -->
						</li>
						<li>
							<?php echo $this->Form->input('ddd-contato', array('id' => 'ddd-contato', 'div' => false, 'label' => false, 'class' => 'ddd pie', 'placeholder' => 'DDD:'));?>
							<?php echo $this->Form->input('tel-contato', array('id' => 'tel-contato', 'div' => false, 'label' => false, 'class' => 'tel pie', 'placeholder' => 'Telefone:'));?>
							<!--
							<input type="" value="DDD:" class="ddd pie" id="ddd-contato"/>
							<input type="" value="Telefone:" class="tel pie" id="tel-contato"/>
							-->
						</li>
						<li>
							<?php echo $this->Form->input('email-contato', array('id' => 'email-contato', 'div' => false, 'label' => false, 'class' => 'campo_texto pie', 'placeholder' => 'E-mail'));?>
							<!--<input type="" value="E-mail:" class="campo_texto pie" id="email-contato"/>-->
						</li>
						<li>
							<?php echo $this->Form->input('cidade-contato', array('id' => 'cidade-contato', 'div' => false, 'label' => false, 'class' => 'campo_cidade pie', 'placeholder' => 'Cidade:'));?>
						
							<!-- <input type="" value="Cidade:" class="campo_cidade pie" id="cidade-contato"/> -->
							<?php echo $this->Form->input('estado', array(
									'options' => array(
										'AC' => 'AC',
										'AL' => 'AL',
										'AM' => 'AM',
										'AP' => 'AP',
										'BA' => 'BA',
										'CE' => 'CE',
										'DF' => 'DF',
										'ES' => 'ES',
										'GO' => 'GO',
										'MA' => 'MA',
										'MG' => 'MG',
										'MS' => 'MS',
										'MT' => 'MT',
										'PA' => 'PA',
										'PB' => 'PB',
										'PE' => 'PE',
										'PI' => 'PI',
										'PR' => 'PR',
										'RJ' => 'RJ',
										'RN' => 'RN',
										'RO' => 'RO',
										'RR' => 'RR',
										'RS' => 'RS',
										'SC' => 'SC',
										'SE' => 'SE',
										'SP' => 'SP',
										'TO' => 'TO'),
									'empty' => 'UF',
									'label' => false,
									'div' => false,
									'class' => 'select-uf pie'
								));
							?>
						</li>
						<li>
							<?php echo $this->Form->input('mensagem-contato', array('id' => 'mensagem-contato', 'type' => 'textarea', 'div' => false, 'label' => false, 'class' => 'textarea pie', 'placeholder' => 'Mensagem:'));?>
							<!-- <textarea class="textarea pie" id="mensagem-contato">Mensagem:</textarea> -->
						</li>
						<li>
							<input type="image" src="img/bnt_enviar.jpg" class="bnt_enviar"/>
						</li>
					</ol>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>					
		<div class="sidebar-right grid_4">
			<img src="img/banner.jpg" class="pie"/>
			<img src="img/banner.jpg" class="pie"/>
		</div>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					