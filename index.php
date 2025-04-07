<?php
require __DIR__."/vendor/autoload.php";

use Murph\SolidCarrinhoCompras\CriarPedido;

$criarPedido = new CriarPedido();
//$itens = [];
$itens = [['valor' => 300, 'descricao' => 'Tv Samsung'], ['valor' => 1000, 'descricao' => 'Notebook'], ['valor' => 1500, 'descricao' => 'Lavadoura Consul']];
$pedido = $criarPedido->index($itens);
$carrinhoValidado = $pedido->getCarrinho()->validarCarrinho();

echo '<h1>Pedido:</h1> </br>';
echo '<Objeto pedido>';        
echo '<pre>';        
print_r($pedido->getCarrinho()->getProdutos());
echo '</pre>';

echo '<br><b> Validação do carrinho</b> <br>';
echo $carrinhoValidado;

// $pedido->confirmaPerdido();

echo '<br><br><b> Status do pedido </b><br>';
echo $carrinhoValidado == 'Carrinho criado' ? $pedido->getStatus() : 'Pedido não foi criado!';

$total = 0;

echo '<br><br><b> Itens do pedido </b><br>';
if($carrinhoValidado == 'Carrinho criado'){
    foreach($pedido->getCarrinho()->getProdutos() as $item){
        echo 'Produto: ' .$item->getDescricao(). ' Valor R$' .$item->getValor(). '<br>';
        $total += $item->getValor();
    }

} else {
    echo 'Pedido não foi criado!';
}

echo '<br><b> Valor total do pedido </b><br>';
echo 'R$' .$total;

echo '<br><br><b> Enviar email </b><br>';
echo $carrinhoValidado == 'Carrinho criado' ? $pedido->enviaEmail() : 'Pedido não foi criado para enviar email!';
