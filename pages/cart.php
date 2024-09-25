<section class="cart">

		<h1 class="cart-message">Complete todos os campos!<div class="cart-message-loading"></div></h1>
	
	<div class="container flex">
		
		<div class="w50">
			
			<form id="cart-form">
				
				<h1>Informações Pessoais</h1>

				<label>Nome Completo:</label>
				<input type="text" name="nome" placeholder="Digite seu nome completo..." />

				<label>E-mail:</label>
				<input type="email" name="email" placeholder="Digite seu e-mail..." />

				<label>CPF:</label>
				<input type="text" name="cpf" placeholder="Digite seu cpf..." />

				<label>Data de Nascimento:</label>
				<input type="date" name="data" placeholder="Digite sua data de nascimento..." />

				<label>Whatsapp:</label>
				<input type="text" name="whatsapp" placeholder="Digite seu whatsapp..." />

				<input class="buttonSubmit" type="submit" name="acao" value="Enviar" />

			</form>

		</div><!--w50-->

		<div class="w50">
			
			<div class="box-informacoes">
				
				<h1>Informações do Plano</h1>

				<h3>Plano:<span id="box-plano" style="text-transform: capitalize;">Plano</span></h3>

				<h3>Tamanho:<span id="box-pacote">00 mega</span></h3>

				<h3>Download:<span id="box-download">00 mbps</span></h3>

				<h3>Upload:<span id="box-upload">00 mbps</span></h3>

				<div class="w100 flex">
					
					<h2 id="box-preco">R$ 00,00 /mês</h2>

					<a href="<?php echo INCLUDE_PATH ?>">Alterar Plano</a>

				</div><!--w100-->

			</div><!--box informacoes-->

		</div><!--w50-->

	</div><!--container-->

</section><!--cart-->