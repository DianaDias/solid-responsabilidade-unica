<?php

use Murph\SolidCarrinhoCompras\Produtos;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class ProdutoTest extends TestCase
{
    public function testRetornoConstructProduto()
    {
        $produto = new Produtos();

        $this->assertEquals('', $produto->getDescricao());
        $this->assertEquals(0, $produto->getValor());
    }

    public function testSucessoGetValorProduto() : void
    {
        $valor = 2000.00;
        $produto = new Produtos();

        $produto->setValor($valor);

        $this->assertEquals(2000.00, $produto->getValor());
    }
    
    public function testSucessoSetValorProduto() : void
    {
        $valor = 2000.00;
        $produto = new Produtos();

        $this->assertEquals(null, $produto->setValor($valor));
    }
    
    public function testSucessoGetDescricaoProduto() : void
    {
        $descricao = 'Lavadoura';
        $produto = new Produtos();

        $produto->setDescricao($descricao);

        $this->assertEquals('Lavadoura', $produto->getDescricao());
    }
    
    public function testSucessoSetDescricaoProduto() : void
    {
        $descricao = 'Lavadoura';
        $produto = new Produtos();

        $this->assertEquals(null, $produto->setDescricao($descricao));
    }

    #[DataProvider('dataDescricao')]
    public function testSucessoMultSetDescricaoProduto($descricao) : void
    {
        $produto = new Produtos();

        $this->assertEquals(null, $produto->setDescricao($descricao));
    }

    #[DataProvider('dataDescricao')]
    public function testSucessoMultGetDescricaoProduto($descricao) : void
    {
        $produto = new Produtos();

        $produto->setDescricao($descricao);

        $this->assertEquals($descricao, $produto->getDescricao());
    }

    public static function dataDescricao() : array
    {
        return [['Teste'], ['1'], [0]];
    }
}