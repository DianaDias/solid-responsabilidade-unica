<?php

namespace Murph\SolidCarrinhoCompras;

class CriarPedido
{
    private $carrinho;
    private $pedido;

    public function __construct()
    {
        $this->carrinho = [];
        $this->pedido = new Pedido();
    }
    
    function index(array $produto)
    {
        foreach($produto as $item){
            $produtos = new Produtos();
            $produtos->setValor($item['valor']);
            $produtos->setDescricao($item['descricao']);

            $this->pedido->getCarrinho()->adicionaItens($produtos);
                    
        }
       
        return $this->pedido;
    }
}