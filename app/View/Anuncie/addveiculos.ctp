		<?php echo $this->Html->css(array('modal')); ?>
		<?php echo $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js', 'modal'));?>

		<div class="container">
			<span class="aba_left"></span>
			<span class="aba_right"></span>
			<h1>
				Anuncie Seu Ve&iacute;culo - Dados do Ve&iacute;culo | passo 2 - 4
				<a href="#" class="close">X</a><br />
			</h1>
			<?php echo $this->Form->create('Anuncie', array('class' => 'form-modal')); ?>
				<ol class="metade-espaco">
					<li>
						<?php 
							echo $this->Form->input('modelo', array(
								'options' => array(1, 2, 3, 4, 5),
								'empty' => '(choose one)'
							));
						?>
					</li>
					<li>
						<label>Marca:</label>
						<select>
							<option></option>
						</select>
					</li>
					<li>
						<label>Ano:</label>
						<select>
							<option></option>
						</select>
					</li>
					<li>
						<label>Porta:</label>
						<select>
							<option></option>
						</select>
					</li>
					<li>
						<label>Cor:</label>
						<input type="text"/>
					</li>
					<li>
						<label>Combust&iacute;vel:</label>
						<select>
							<option></option>
						</select>
					</li>
					<li>
						<label>C&acirc;mbio:</label>
						<select>
							<option></option>
						</select>
					</li>
					<li>
						<label>C&acirc;mbio:</label>
						<select>
							<option></option>
						</select>
					</li>
					<li>
						<label>Estilo:</label>
						<input type="text"/>
					</li>
				</ol>
				<ol class="todo-espaco">
					<li>
						<label>Detalhes:</label>
						<textarea></textarea>
					</li>
				</ol>
				<div class="bt-form">
					<div>
						<a href="#" class="close cancelar">Cancelar</a>
						<a href="#" class="continuar">Continuar</a>
						<?php echo $this->Form->end('ENVIAR'); ?>
					</div>
				</div>
			<?php echo $this->Form->end(); ?>
		</div>
