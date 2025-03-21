<?php
require __DIR__."/vendor/autoload.php";

use Murph\SolidCarrinhoCompras\CarrinhoCompras;

$titulo = "CARRINHO DE PEDIDO SOLID";
$carrinho = new CarrinhoCompras();
$itens = ["tipo" => 'TV', "valor" => 3000];
$itens1 = ["tipo" => 'Microondas', "valor" => 300];
$itens2 = ["tipo" => 'Geladeira', "valor" => 2300];
 
$carrinho->inserirItens($itens);
$carrinho->inserirItens($itens1);
$carrinho->inserirItens($itens2);

$carrinhoAtual = $carrinho->exibirItens();
?>

<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
      if(isset($titulo)) {
        echo $titulo . ' | ';
      } 
    ?>
  </title>
</head>
<body>
    <h1>CARRINHO DE PEDIDOS</h1>
    <h2>ITENS</h2>
  <?php
    foreach($carrinhoAtual as $itensCarrinho):
        echo '<li>
        Produto:' .$itensCarrinho["tipo"]. ' Valor: '.$itensCarrinho["valor"].'</li><br>';
    endforeach; 
    $carrinho->alterarStatus("Novo");
    echo "<br> <b>Status Pedido: </b>".$carrinho->exibirStatus();
    echo "<br><b> Valor Total Compras:</b> ".$carrinho->calculaValorTotalCarrinho($carrinhoAtual);
    $carrinho->alterarStatus("Concluido");
    echo "<br><b> Status Pedido após análise: </b>".$carrinho->exibirStatus();
    echo "<br><b>".$carrinho->enviarEmail($carrinho->exibirStatus())."</b>";
 ?>
</body>
</html>