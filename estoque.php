<?php

include "header.php";

if(isset($_POST['uploadfilesub'])) {

$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
$desc = $_POST['Descricao'];
$qtd = $_POST['qtd'];
$val = $_POST['val'];

$folder = 'Imagens/Produtos/';

move_uploaded_file($filetmpname, $folder.$filename);

$sql = "INSERT INTO produto (Descricao, Quantidade, Valor, img)  VALUES ('" .$desc."', '".$qtd."', '".$val."', '$filename')";
$qry = mysqli_query($conexao,  $sql);
if( $qry) {
//echo "</br>Produto cadastrado!"; 

	header("location: index.php");

}
}

?>

<body class="background-cadastro">
	<section>
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

<section class="prods_view"><center>
<form action="" method="post" enctype="multipart/form-data" >
<h2>Cadastro de produto</h2>
<br/>
	<table>
		<tr><td><label>Descrição:</label></td>
		<td><input type="text" name="Descricao" /></td></tr>

		<tr><td><label>Quantidade:</label></td>
		<td><input type="number" name="qtd" min="0"/></td></tr>

		<tr><td><label>Valor:</label></td>
		<td><input type="text" name="val" /></td></tr>
		
		<tr><td><input type="file" name="uploadfile"/></td></tr>
	</table>
	<br/>
	<input type="submit" name="uploadfilesub" value="Cadastrar"/>
</form>
</center></section>
		</section>
		</body>