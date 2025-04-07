<?php

namespace Murph\SolidCarrinhoCompras;

class Pedido
{
    private $status;
    private $carrinhoCompra;
    private $email;

    public function __construct()
    {
        $this->status = 'Aberto';
        $this->carrinhoCompra = new CarrinhoCompras();
        $this->email = new EmailService();
    }

    function setStatus(string $status)
    {
        $this->status = $status;
        return true;
    }

    function getStatus()
    {
        return $this->status;
    }

    function getCarrinho()
    {
        return $this->carrinhoCompra;
    }

    function confirmaPerdido()
    {
        $conf = $this->carrinhoCompra->validarCarrinho();
        if($conf == 'Carrinho criado'){
            $this->setStatus('Confirmado');
            return true;
        }

        return false;
    }
    
    function enviaEmail()
    {
        return $this->email->enviaEmail();
    }
}