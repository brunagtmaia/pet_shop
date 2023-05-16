<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' OR $_SERVER['REQUEST_METHOD'] === 'POST') {
    //pegando o id do usuário 
    $id_usuario_atual = $_GET['id'];
    
}else{
    ?>
    <script>alert("erro");</script>
    <?php
}
?>

<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Spectral by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

		<link rel="stylesheet" href="style/home_page.css" />

		
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">
                <!-- menu -->
				<nav class="nav_menu">
					<div>
						<div id="conteudo">
							<div>Cantinho do Cão</div>
							<button id="showMenu" type="button" value="Menu"><img src="img_geral\icon_abrir_menu.png" width="35px" height="35px"></button>
						</div>
						<div id="nav">
							<button id="hideMenu" type="button" value="Ocultar Menu"><img src="img_geral\icon_fechar_menu.png" width="20px" height="20px" style="text-align: end; margin:0; padding-right:5px;">Fechar menu</button>
							<ul id="nav_list">
								<li ><a class="nav_item" id="campos_divinopolis" href="index2.php">HOME</a></li>
								<hr class="menu_divisor">

								<li><a class="nav_item" id="cursos" href="index2.php">SERVIÇOS</a></li>
								<hr class="menu_divisor">

								<li ><a class="nav_item" id="alunos" href="agendamento.php?id=<?php echo $id_usuario_atual; ?>">AGENDAMENTO</a></li>
								<hr class="menu_divisor">

								<li ><a class="nav_item" id="pais" href="login.php">LOGIN</a></li>
								<hr class="menu_divisor">

								<li ><a class="nav_item" id="servidor" href="cadastro.php">CADASTRO</a></li>
								<hr class="menu_divisor">

								<li ><a class="nav_item" id="servidor" href="nossos_pets.html">NOSSOS CLIENTES</a></li>
								<hr class="menu_divisor">
							</ul>
						</div>
					</div>
    			</nav>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2 class="title">CANTINHO DO CÃO</h2>
							<p class="subtitle">Seu cãozinho em boas mãos</p>
						</div>
						<div id="ler_mais">
							<a href="#one" class="more scrolly">Ler mais</a>
							<img src="img_geral\seta-para-baixo (1).png"width="30px" height="30px">
						</div>
					</section>

				<!-- SOBRE NÓS -->
					<section id="sobre_nos" class="">
						<div class="sobre_nos_conteudo">
							<header class="major">
								<h2 class="title1">SOBRE NÓS</h2>

								<p>Um pet shop Cantinho do Cão, localizado em Divinópolis que foi criado com muito amor e dedicação pelos donos Ana e Moisés. Decidiram empreender e alugar um espaço comercial em julho de 2018 para oferecer um lugar acolhedor e divertido para animais e seus donos.</p>

								<p>Com muito trabalho e empenho, prepararam a loja com produtos de qualidade, uma decoração agradável e contrataram uma equipe dedicada. Depois de meses de preparação, finalmente agosto de 2021, abriram as portas do Cantinho do Cão pela primeira vez.</p>
									
								<p>Desde então, o Cantinho do Cão tornou-se um ponto de encontro popular para donos de animais de estimação da região. Ana que já trabalhava no Pet Shop comprado por eles da antiga proprietária, e Moisés deixou seu trabalho na VLI para seguir seu sonho de empreender, estavam orgulhosos do que haviamos construído.</p>
									
								<p>Para eles, o Cantinho do Cão é muito mais do que apenas uma loja. É um lugar onde animais e humanos podem se divertir e ser felizes juntos. Se você está procurando um lugar especial para cuidar do seu bichinho, o Cantinho do Cão é o lugar perfeito para você. Venha conhecer e fazer parte dessa história de amor pelos animais!.</p>
							</header>

							<ul class="icons_sb">
								<li><span class="icones_sobre_nos"><span class="label"><img class="icon_img" src="img_geral\cachorro.png" width="40px" height="40px"></span></span></li>

								<li><span class="icones_sobre_nos"><span class="label"><img class="icon_img" src="img_geral\gato.png" width="40px" height="40px"style="padding-left:15px;"></span></span></li>

								<li><span class="icones_sobre_nos"><span class=""><img class="icon_img" src="img_geral\passaro.png" width="40px" height="40px"style="padding-left:15px;"></span></span></li>
							</ul>
						</div>
					</section>

					<section id="nossos_serviços">
						<h2 class="title1" style="color:#1f2d8d; border-color:#1877f2;margin:0;padding-top:20px;">NOSSOS SERVIÇOS</h2>
						<div class="container">
							<div class="panel active" style="background-image: url('banho.jpeg')">
								<h3>Banho - <a>Agende agora</a></h3>
							</div>
							<div class="panel" style="background-image: url('tosa.jpeg')">
								<h3>Tosa - <a>Agende agora</a></h3>
							</div>
							<div class="panel" style="background-image: url('transporte.jpeg');background-position:25%;margin:0;">
								<h3>Transporte - <a href="#agendamento">Agende agora</a></h3>
							</div>
						</div>
					</section>

				<!-- Three -->
					<section id="planos" >
						<h2 class="title1" style="border-color:#1877f2;color:#1f2d8d;">NOSSOS PLANOS</h2>
						<div style="display:flex; flex-direction:row;flex-wrap:wrap;justify-content: center;align-items: center;">

							<div class="card">
								<div class="card-front">
									<h2 class="title1" style="font-size:20px;border:none">Banho de Porte Pequneno</h2>
								</div>
								<div class="card-back">
									<p class="conteudo_card_planos" style="color:white">Incluindo tosa higiênica, limpeza do ouvido, corte de unhas, aparações específicas de franja, perto dos olhos e arredondamento de patas.</p>
									<p class="preco_planos">R$40,00</p>
								</div>
							</div>

							<div class="card">
								<div class="card-front">
									<h2 class="title1" style="font-size:20px;border:none">Tosa na máquina</h2>
								</div>
								<div class="card-back">
									<p class="conteudo_card_planos">Incluindo tosa higiênica, limpeza do ouvido, corte de unhas, aparações específicas de franja, perto dos olhos e arredondamento de patas.</p>
									<p class="preco_planos">R$60,00</p>
								</div>
							</div>

							<div class="card">
								<div class="card-front">
									<h2 class="title1" style="font-size:20px;border:none">Tosa na tesoura</h2>
								</div>
								<div class="card-back">
									<p class="conteudo_card_planos">Incluindo tosa higiênica, limpeza do ouvido, corte de unhas, aparações específicas de franja, perto dos olhos e arredondamento de patas.</p>
									<p class="preco_planos">R$80,00</p>
								</div>
							</div>
						</div>
					</section>

			<footer id="contato">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3745.8164100704685!2d-44.89515208987232!3d-20.14170544485648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa0a5836182079b%3A0x6cf1b5e632bbd287!2sR.%20Rio%20de%20Janeiro%2C%20787%20-%20Centro%2C%20Divin%C3%B3polis%20-%20MG%2C%2035500-005!5e0!3m2!1spt-BR!2sbr!4v1682635420232!5m2!1spt-BR!2sbr" width="200" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="padding-left:20px"></iframe>
				
				<div id="telefone">
					<p>Rio de Janeiro 787, Divinópolis, MG</p>
					<p>telefone: (37) 3213-0508</p>
					<a href="https://instagram.com/cantinhodocaopetshop?igshid=MTIyMzRjYmRlZg=="><img src="img_geral\instagram.png" width="25px" height="25px" style="padding: 0; margin: 0;"></a>
				</div>
			</footer>
			<footer id="creditos">
				<p>© Anny Duarte, Bruna Gontijo, Bruno de Santana e Eduarda Leandra</p>
			</footer>
            <script type="text/javascript" src="js/script_menu.js"></script>
	</body>
</html>