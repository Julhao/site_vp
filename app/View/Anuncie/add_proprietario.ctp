		<div class="container">
			<span class="aba_left"></span>
			<span class="aba_right"></span>
			<h1>
				Anuncie Seu Veículo - Identificação | passo 3 - 4
				<a href="#" class="close">X</a><br />
			</h1>
			
			<?php echo $this->Form->create('Anuncie', array('class' => 'form-modal')); ?>
				<ol class="metade-espaco">
					<li>
						<label>Nome:</label>
						<input type="text"/>
					</li>
					<li>
						<label>Rg:</label>
						<input type="text"/>
					</li>
					<li>
						<label>CPF:</label>
						<input type="text"/>
					</li>
					<li>
						<label>Data Nascimento:</label>
						<input type="text"/>
					</li>
					<li>
						<label>Sexo:</label>
						<select>
							<option></option>
						</select>
					</li>
					<li>
						<label>Tel:</label>
						<input type="text"/>
					</li>
					<li>
						<label>Endereço:</label>
						<input type="text"/>
					</li>
					<li>
						<label>Bairro:</label>
						<input type="text"/>
					</li>
					<li>
						<label>Cep:</label>
						<input type="text"/>
					</li>
					<li>
						<label>Estado:</label>
						<select>
							<option></option>
						</select>
					</li>
					<li>
						<label>Cidade:</label>
						<select>
							<option></option>
						</select>
					</li>
					<li>
						<label>E-mail:</label>
						<input type="text"/>
					</li>
					<li>
						<label>Confirmar E-mail:</label>
						<input type="text"/>
					</li>
					<li>
						<label>Senha:</label>
						<input type="text"/>
					</li>
					<li>
						<label>Confimar Senha:</label>
						<input type="text"/>
					</li>
				</ol>
				<div class="bt-form">
					<div>
						<a href="#" class="close voltar">Voltar</a>
						<a href="#" class="continuar">Continuar</a>
					</div>
				</div>
			<?php echo $this->Form->end(); ?>
		</div>
