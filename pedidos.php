<?php

include "header.php";

$sql = mysqli_query($conexao, "SELECT * FROM pedido where NCliente = " . $_SESSION['Id']);

$det = "SELECT * FROM itens as itens INNER JOIN produto as produto where itens.CProduto = Produto.Id and NCliente = " . $_SESSION['Id'];

?>

<body onLoad="slide1(); slide3(); slide5();" class="background-home background">

	<section>
		<div id="carrinho">
			<h2 style="color: white">Meus Pedidos</h2>

			<?php
			while($rest = mysqli_fetch_assoc($sql)){?>

				<div class="ped ped-template-columns-1" style="border-bottom: 1px solid white; padding-bottom: 2%; margin-bottom: 2%;">
					<div class="item-car">
						<?php echo "Pedido " . $rest['Id'] . "<br/>";?>
					</div>

					<div class="item-car">
						<?php echo date("d/m/Y", strtotime($rest['Data'])) . "<br/>";?>
					</div>
					

					<div class="item-car">
						<a href="pedidos.php?act=detalhes&prod=<?php echo $rest['Id']?>" style="color: white">Detalhes</a><br/>
					</div>
				</div>
			
			<?php	
			}

			if($_GET["act"]=="detalhes" && !empty($_GET['prod'])){
				$prod = $_GET['prod'];

				$where = " and NPedido = " . $prod;

				$select = mysqli_query($conexao, $det . $where);

				?>
				<h3>Itens do pedido</h3>
			<?php
			}
				while($result = mysqli_fetch_assoc($select)){
					?>
					<div class="ped ped-template-columns-1" style="border-bottom: 1px solid white; padding-bottom: 2%; margin-bottom: 2%;">
					<div class="item-car">
						<?php echo "<img style='max-width: 100px;' src=Imagens/Produtos/".$result['img']."></img>";?>
					</div>

					<div class="item-car">
						<?php echo $result['Descricao'];?>
					</div>
					

					<div class="item-car">
						<?php echo "Valor : $ ". number_format($result['Valor'],2);?>
					</div>
				</div>


			<?php
				}
			?>


	
		</div>
	</section>


</body>