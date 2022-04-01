<?php

include "header.php";

$sql = mysqli_query($conexao, "SELECT c.Id, c.CProduto, c.Quantidade, c.Valorunico, c.Valor, c.NCliente, p.Descricao, p.img FROM carrinho as c INNER JOIN produto as p where c.CProduto = p.Id and c.NCliente = ".$_SESSION['Id']);

$sumcar = mysqli_query($conexao, "SELECT SUM(Valor) as total FROM carrinho where NCliente = " . $_SESSION['Id']);
$sum = mysqli_fetch_assoc($sumcar);

$total = $sum['total'];

$date = date("y-m-d H:m:s");
?>

<body class="background-contato">
	<section>
		<div id="carrinho">
			<h2 style="color: white">Carrinho</h2>
		<?php
		while($con = mysqli_fetch_assoc($sql)){	
		?>
			<div class="car car-template-columns-1" style="border-bottom: 1px solid white; padding-bottom: 2%; margin-bottom: 2%;">
				<div class="img">
					<img src="Imagens/Produtos/<?php echo $con['img']?>" style="max-width: 50%">
				</div>

				<div class="item-car" style="font-size: 18px">

					<?php echo $con['Descricao'] . "<br/>Valor Unitário: $ " . number_format($con['Valorunico'],2) . "<p>"; ?>

				</div>
				<div class="item-car">

					<?php echo "Quantidade: " . $con['Quantidade']; 
						echo "<br/>";
					?>

					<a href="exc_car.php?prod=<?php echo $con['Id']; ?>" style="color: white">Excluir</a><br/>

				</div>
				<div class="item-car">
					<center>
						<span>Total</span>
						<?php echo "<p class=>$ " . number_format($con['Valor'],2) . "</p>";?>
					</center>
				</div>
			</div>


		<?php } ?>
			<form method="POST" action="carrinho.php?act=final">
				<input type="submit" value="Finalizar">
			</form>
				<button style="cursor:pointer"><a href="index.php">Comprar</a></button>
<?php
if($_GET['act']=="final"){
    $sql3 = mysqli_query($conexao, "INSERT INTO pedido (Data, Total, NCliente) VALUES ('" . $date . "' ," . $total . ", ". $_SESSION['Id']. ")");
    $ped = mysqli_insert_id($conexao);

    // select dos produtos no carrinho
    $car = mysqli_query($conexao, "SELECT Quantidade, Valorunico, valor, " . $ped . ", CProduto, " . $_SESSION['Id'] ." FROM carrinho WHERE NCliente = " . $_SESSION['Id']);

    while($con2 = mysqli_fetch_assoc($car)){

    	$itens= mysqli_query($conexao, "INSERT INTO itens (Quantidade, Valorunico, Valor, NPedido, CProduto, NCliente) 
                                      VALUES (".$con2['Quantidade'].",".$con2['Valorunico'].",".$con2['valor'].",".$ped.",".$con2['CProduto'].",".$_SESSION['Id'].")");
	}

    $sql5 = mysqli_query($conexao, "SELECT p.Id as prodId, p.Quantidade as prodQtd, c.Quantidade as carQtd, c.NCliente FROM produto as p INNER JOIN carrinho as c where c.CProduto = p.Id and c.NCliente = ".$_SESSION['Id']);
    //echo $sql5;

    while($result5 = mysqli_fetch_assoc($sql5)){

      $upest = mysqli_query($conexao, "UPDATE produto set Quantidade = Quantidade - " . $result5['carQtd'] . " where Id = " . $result5['prodId']);
      
    } 

    $sql4 = mysqli_query($conexao, "DELETE FROM carrinho where NCliente = " . $_SESSION['Id']);
    //echo $query5
    header("location: index.php");

}
?>
			</div>
	</section>		
</body>