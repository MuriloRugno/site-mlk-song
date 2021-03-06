<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>MLK Song Music</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilocss/contraste.css">
	<script type="text/javascript" src="javascript/script-enviardados/enviardados.js"></script>
	<script type="text/javascript" src="javascript/script-acessibilidades/botão-acessivel.js"></script>
	<script type="text/javascript" src="javascript/script-acessibilidades/botão-acessivel2.js"></script>
</head>

<body class="background-cadastro background">
	<!--Aqui fica o menu do site-->
	<div>
		<header id="menufixo">
			<!--menu do site com a identidade visual e botao de carrinho de compras-->


			<!--<a href="audiosobreosite.php">audio acessivel sobre o site</a><br/>id="menufixo"

				<audio src="sobreosite.mp3" controls autoplay loop></audio>-->

			<nav>
				<!--Nesta parte fica o menu, onde contem as abas para determinada função-->

				<a href="home_page.php"><img class="mlksong" src="Imagens/vetores/logomlk.png" alt="imagem do logo mlk"></a>

				<a href="compras.php"><img class="loja" src="Imagens/vetores/compra.png" alt="carrinho de compra supermercado"></a>

				<div id="menu">

					<ul>

						<li><a id="homecadastro" href="home_page.php">Home</a></li>
						<li><a id="contatocadastro" href="contato.php">Contato</a></li>
						<li><a id="cadastrocadastro" href="cadastro.php">Cadastre-se</a></li>

					</ul>

				</div>
			</nav>

		</header>

		<section>
			<!--Texto para descrever os botões de acessibilidade-->

			<div id="modo">	<!-- MODO CONTRASTE -->
					<h1 id="noturnoau" class="noturno">Modo Contraste</h1>
				</div>

			<div id="container-botao-on-off">
				<!-- ATIVAR CONTRASTE -->
				<button>
					<a href="cadastro-contraste.php" title="Ativar contraste">ON</a>
				</button>
				<!-- DESATIVAR CONTRASTE -->
				<button>
					<a href="cadastro.php" title="Desativar contraste">OFF</a>
				</button>
			</div>

			<div id="textofonte-contato">
				<div id="aumentarfonte">
					<p id="fonte-contato">Aumento e Diminuição da Fonte</p>
				</div>
			</div>
			<!--Div que contém os dois botões de acessibilidade de aumento e diminuição de fonte-->
			<div id="estruturaacess-contato">
				<div class="botaoacess">
					<!-- AUMENTAR FONTE -->
					<button onclick="fontcadastromais();">
						<a class="aumentar" title="Aumentar Fonte" alt="Aumentar">A+</a>
					</button>
					<!-- DIMINUIR FONTE -->
					<button onclick="fontcadastromenos();">
						<a class="diminuir" title="Diminuir Fonte" alt="Diminuir">A-</a>
					</button>
				</div>
			</div>
			<!--Campo de cadastro, com suas respectivas funções-->
			<form name="registro" method="POST">

				<div id="campo-de-cadastro">
					<!--Div com o texto indicativo de cadastro-->
					<div id="container-cadastrar">
						<h1 id="cadastraae" class="cadastrar">Cadastrar</h1>
					</div>
					<!--Parte digitável, para preencher com o email do usuário-->
					<input class="email-registro" type="text" name="email" id="email" placeholder="Email">
					<!--Parte digitável, para preencher com o nome do usuário-->
					<input class="nome-completo-registro" type="text" name="Nome Completo" id="nomecompleto" placeholder="Nome Completo">
					<!--Parte digitável, para preencher com o nick name do usuário-->
					<input class="nome-usuario-registro" type="text" name="nome" id="nomeusuario" placeholder="Nome de Usuário">
					<!--Parte digitável, para preencher com a senha  do usuário-->
					<input class="senha-registro" type="password" name="senha" id="senha_registrar" placeholder="Senha">
				</div>

				<div id="container-enviar-limpar-cadastro">
					<!--Botão de envio de cadastro-->
					<input id="enviardd-cadastro" onclick="registrar();" type="button" class="enviar-dados-cadastro" name="botao"
					 value="Enviar Dados">
					<!--Botão de  apagar os registros de todo o cadastro-->
					<input id="resetdd-cadastro" type="reset" class="limpar-dados-cadastro" name="Resetar" value="Limpar Dados">
				</div>

				<div id="container-entrar-cadastro">

					<div id="container-entrar">
						<!--Texto idicativo de login do site-->
						<h1 id="entraae" class="entrar">Entrar</h1>
					</div>
					<!--Parte digitável, para preencher com o nome  do usuário-->
					<input class="nome-usuario-login" type="text" name="nome" id="nome_usuario_login" placeholder="Nome de Usuário">
					<!--Parte digitável, para preencher com a senha  do usuário-->
					<input class="senha-login" type="password" name="senha" id="senha_login" placeholder="Digite sua Senha">
				</div>
				<!--Botão para entrar no site-->
				<div id="container-botao-logar">
					<input id="logar-cadastro" onclick="login();" type="button" class="efetuar-login" name="botao" value="Efetuar Login">
				</div>
				<!--Marcação de # para utilizar na rede social instagram-->
				<a href="https://www.instagram.com/?hl=pt-br"><img class="icone-instagram" id="icon-insta-cadastro" src="Imagens/vetores/iconeinstagram.png"
					 alt="icone do instagram"></a>
				<h1 class="mlk2018" id="rashtagmlk">#MLK2018</h1>
				<!--Link no simbolo da rede social-->

				<!--Texto de explicação de concordancia de termos  de uso-->
				<p class="sobrese-cadastrar" id="sobre-o-cadastro">Ao se cadastrar você concorda com nosso Termos, Política de
					Dados e Política de Cookies.</p>
			</form>

			<p class="mini-borda-branca"></p>
			<!--Borda branca que separa a parte de cadastro da parte de
					entrar no site-->

		</section>
	</div>
</body>

</php>