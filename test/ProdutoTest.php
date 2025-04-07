<?php

use Murph\SolidCarrinhoCompras\Produtos;
use PHPUnit\Framework\TestCase;

class ProdutoTest extends TestCase
{
    public function testConstructProduto()
    {
        $produto = new Produtos();

        $this->assertEquals('', $produto->getDescricao());
        $this->assertEquals(0, $produto->getValor());
    }

}