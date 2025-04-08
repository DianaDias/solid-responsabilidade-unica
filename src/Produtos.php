<?php

namespace Murph\SolidCarrinhoCompras;

class Produtos
{
    private $valor;
    private $descricao;

    public function __construct()
    {
        $this->valor = 0;
        $this->descricao = '';
    }

    function getValor()
    {
        return $this->valor;
    }

    function setValor(float $valor)
    {
        $this->valor = $valor;
    }

    function getDescricao()
    {
        return $this->descricao;
    }

    function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;
    }
}