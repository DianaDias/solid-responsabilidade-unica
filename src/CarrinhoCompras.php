<?php

namespace Murph\SolidCarrinhoCompras;

class CarrinhoCompras
{
    private $produtos;

    function __construct()
    {
        $this->produtos = [];
    }

    function adicionaItens(Produtos $produto)
    {        
        array_push($this->produtos, $produto);

        return true;
    }

    function getProdutos()
    {
        return $this->produtos;
    }

    function validarCarrinho()
    {
        if(count($this->produtos) > 0)
            return 'Carrinho criado';
        
        return 'Carrinho inexistente';
    }
}