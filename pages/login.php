<section class="login">

	
	
	<div class="container">
		
		<div class="w50">
			<h1 class="login-message">Complete todos os campos!<div class="login-message-loading"></div></h1>
				<form id="login-form" class="center-y">

					<div class="w100">
					
						<a href="<?php echo INCLUDE_PATH ?>">

							<img src="<?php echo INCLUDE_PATH ?>images/logo/logored.png">

						</a>

					</div><!--w100-->
					
					<h1>Acesse sua conta</h1>

					<label>Login:</label><br/>
					<input type="text" name="nome" placeholder="Digite seu login..."/>
					<br/>
					<label>Senha:</label><br/>
					<input type="password" name="senha" placeholder="Digite sua senha..." />

					<div class="w100 flex">

						<input type="submit" name="acao" value="Entrar" />

						<a href="">Problemas ao fazer login?</a>
					
					</div><!--w100-->


					<div class="login-social-box">
				
						<a href=""><i class="fa-brands fa-instagram"></i></a>

						<a href=""><i class="fa-brands fa-x-twitter"></i></a>

						<a href=""><i class="fa-brands fa-whatsapp"></i></a>

					</div><!--login-social-box-->

				</form>

		</div><!--w50-->

		<div class="w50">

			<div class="img-color"></div><!--overlay-->

		</div><!--w50-->

	</div><!--container-->

</section><!--login-->