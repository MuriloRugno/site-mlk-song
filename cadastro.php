<?php
include "header.php";
?>


<body class="background-cadastro">
		<section>
			<!--Texto para descrever os botões de acessibilidade-->
			<div id="modo">	<!-- MODO CONTRASTE -->
					<h1 id="noturnoau" class="noturnocadastro">Modo Contraste</h1>
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
					<p id="fonte-cadastro">Aumento e Diminuição da Fonte</p>
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
			
			<form name="registro" method="POST" action="cadastramento.php">

				<div id="campo-de-cadastro">
					<!--Div com o texto indicativo de cadastro-->
					<div id="container-cadastrar">
						<h1 id="cadastraae" class="cadastrar">Cadastrar</h1>
					</div>
					<!--Parte digitável, para preencher com o email do usuário-->
					<input class="email-registro" type="text" name="email" id="email" placeholder="Email" required>
					<!--Parte digitável, para preencher com o nome do usuário-->
					<input class="nome-completo-registro" type="text" name="nomecompleto" id="nomecompleto" placeholder="Nome Completo" required>
					<!--Parte digitável, para preencher com o nick name do usuário-->
					<input class="nome-usuario-registro" type="text" name="usuario" id="nomeusuario" placeholder="Nome de Usuário" required>
					<!--Parte digitável, para preencher com a senha  do usuário-->
					<input class="senha-registro" type="password" name="senhac" id="senha_registrar" placeholder="Senha" required>
				</div>

				<div id="container-enviar-limpar-cadastro">
					<!--Botão de envio de cadastro-->
					<input id="enviardd-cadastro" onclick="registrar();" type="submit" class="enviar-dados-cadastro" name="botao"
					 value="Enviar Dados">
					<!--Botão de  apagar os registros de todo o cadastro-->
					<input id="resetdd-cadastro" type="reset" class="limpar-dados-cadastro"name="Resetar" value="Limpar Dados">
				</div>
			</form>

			<form action="login.php" method="POST">
				<div id="container-entrar-cadastro">

					<div id="container-entrar">
						<!--Texto idicativo de login do site-->
						<h1 id="entraae" class="entrar">Entrar</h1>
					</div>
					<!--Parte digitável, para preencher com o nome  do usuário-->
					<input class="nome-usuario-login" type="text" name="nome" id="nome_usuario_login" placeholder="Nome de Usuário" required>
					<!--Parte digitável, para preencher com a senha  do usuário-->
					<input class="senha-login" type="password" name="pass" id="senha_login" placeholder="Digite sua Senha" required>
				</div>
				<!--Botão para entrar no site-->
				<div id="container-botao-logar">
					<input id="logar-cadastro" onclick="login();" type="submit" class="efetuar-login" name="botao" value="Efetuar Login">
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