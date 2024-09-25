<?php include('config.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH ?>css/global.css">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH ?>css/home.css">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH ?>css/cart.css">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH ?>css/login.css">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH ?>css/page404.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Russo+One&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>PBLink - Conectando você com o mundo!</title>

</head>
<body>

	<?php 

		$url = isset($_GET['url']) ? $_GET['url'] : 'home';

	?>

	<section <?php if($url == 'login') echo "class='none'"?> class="subheader">
		
		<div class="container">
			
			<h2>A Melhor Conexão do Nordeste!</h2>

		</div><!--container-->

	</section><!--subheader-->

	<header <?php if($url == 'login') echo "class='none'"?>>
		
		<div class="container flex">
			
			<div class="w50">
				
				<img src="<?php echo INCLUDE_PATH ?>images/logo/logored.png"></img>

			</div><!--w50-->

			<div class="w50">

					<i class="fa-solid fa-bars icon-menu"></i>
				
				<nav 
					<?php if($url == 'cart' || $url != 'regioes' && $url != 'planos' && $url != 'contato' && $url != 'home' && $url != '' && $url != 'login'){

						echo 'class="header-desktop header-desktop2"';

					}  else {

						echo 'class="header-desktop"';

					} ?> 
				>

					<ul>
						
						<li><a href="<?php echo INCLUDE_PATH ?>">Início</a></li>
						<li><a href="<?php echo INCLUDE_PATH ?>#planos">Planos</a></li>
						<li><a href="<?php echo INCLUDE_PATH ?>#regioes">Regiões</a></li>
						<li><a href="<?php echo INCLUDE_PATH ?>#contato">Contato</a></li>

						<a href="<?php echo INCLUDE_PATH ?>login"><button class="btn1">Área do Cliente</button></a>

					</ul>

					<ul class="desktop-ul2">
						
						<li>
							<a href="<?php echo INCLUDE_PATH?>">
								Voltar <i class="fa-solid fa-right-from-bracket"></i>
							</a>
						</li>

					</ul>

				</nav><!--header desktop-->

				<nav 
				<?php 
				
					if($url == 'cart' || $url != 'regioes' && $url != 'contato' && $url != 'planos' && $url != 'home' && $url != '' && $url != 'login'){

						echo "class='header-mobile header-mobile2'";

					} else {

						echo 'class="header-mobile"';

					}

				?>>
					
					<div class="center-y">

							<i class="fa-solid fa-x icon-menu"></i><!--icon-->

						<ul>
							
							<li><a href="<?php echo INCLUDE_PATH ?>">Início</a></li>
							<li><a href="<?php echo INCLUDE_PATH ?>#planos">Planos</a></li>
							<li><a href="<?php echo INCLUDE_PATH ?>#regioes">Regiões</a></li>
							<li><a href="<?php echo INCLUDE_PATH ?>#contato">Contato</a></li>

							<a href="<?php echo INCLUDE_PATH ?>login"><button class="btn1">Área do Cliente</button></a>

						</ul>

						<ul class="mobile-ul2">
							
							<li>
								<a href="<?php echo INCLUDE_PATH?>">
									Voltar <i class="fa-solid fa-right-from-bracket"></i>
								</a>
							</li>

						</ul>

					</div>

				</nav><!--header desktop-->

			</div><!--w50-->

		</div><!--container-->

	</header>

	<?php 

		if(file_exists('pages/'.$url.'.php')){

			include('pages/'.$url.'.php');

		} else {

			if($url != 'regioes' && $url != 'planos' && $url != 'contato'){

				$pagina404 = true;
				include('pages/page404.php');

			} else {

				include('pages/home.php');

			}


		}

	?>

	<footer id="contato"
		<?php 

			if($url == 'cart'){
				
				echo "class='footer-cart'";

			} 

			if($url == 'login'){

				echo "class='none'";

			} 

			if(isset($pagina404) && $pagina404 == true){

				echo "class='footer-404'";
			}

		?>>
		
		<div class="container">
			
			<div class="footer-box flex">
				
				<div class="w33">
					
					<img src="<?php echo INCLUDE_PATH ?>images/logo/logowhite.png"></img>

					<p>A número 1 em conexão, qualidade,segurança e atendimento em todo o nordeste.</p>

					<div class="footer-box-social">
						
						<a href=""><i class="fa-brands fa-instagram"></i></a>

						<a href=""><i class="fa-brands fa-facebook-f"></i></a>

						<a href=""><i class="fa-brands fa-whatsapp"></i></a>

					</div><!--footer box social-->

				</div><!--w33-->

				<div class="w33">

					<h2>Endereço</h2>

					<p>Rua Santo Antônio - 20</p>

					<p>CNPJ: 0000.000.000.00</p>

					<p>Whatsapp: (00) 0 0000-0000</p>

				</div><!--w33-->

				<div class="w33">

					<h2>Acesse</h2>

					<p><a href="">Área do Cliente</a></p>

					<p><a href="">Empresas</a></p>

					<p><a href="">Pessoal</a></p>

				</div><!--w33-->

			</div><!--footer-box-->

			<div class="subfooter">
				
				<div class="subfooter-line"></div><!--line-->

				<h2>Todos os Direitos Reservados.</h2>
				<h5>Desenvolvido por @eoluskeira</h5>

			</div><!--subFooter-->

		</div><!--container-->

	</footer>

	<!--

	- Responsivo X

	- Header mobile X

	- Sistema de scroll no header X

	- Área do Cliente X

	- Hover X

	- Adicionar mais planos X

	- Pagina de compra de planos X

	- API com estados do nordeste X

	- SVG do Mapa brasileiro X

	- Criar speed test X

	- Slide de Depoimentos X

	- Completar o FAQ X

	- estilizar ScrollBar X

	- adicionar links no footer X

	- banner mobile X

	-->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><!--jquery-->
	<script src="<?php echo INCLUDE_PATH ?>js/menu.js"></script><!--menu-->
	<script src="<?php echo INCLUDE_PATH ?>js/planos.js"></script><!--planos-->
	<script src="<?php echo INCLUDE_PATH ?>js/estados.js"></script><!--estados-->
	<script src="<?php echo INCLUDE_PATH ?>js/speedtest.js"></script><!--speedtest-->
	<script src="<?php echo INCLUDE_PATH ?>js/faq.js"></script><!--faq-->
	<script src="<?php echo INCLUDE_PATH ?>js/slide.js"></script><!--slide-->
	<script src="<?php echo INCLUDE_PATH ?>js/scrollmenu.js"></script><!--scrollmenu-->
	<script src="<?php echo INCLUDE_PATH ?>js/cart.js"></script><!--cart-->
	<script src="<?php echo INCLUDE_PATH ?>js/login.js"></script><!--login-->

</body>
</html>