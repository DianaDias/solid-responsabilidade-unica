<?php 
namespace Murph\SolidCarrinhoCompras;

class CarrinhoComprasSemSolid 
{
    private $itens;
    private $status;
    private $valorTotal;

    public function __construct() {
        $this->itens = [];
        $this->status = "";
        $this->valorTotal = 0;
    }

    public function inserirItens($itenInsert) {
        array_push($this->itens, $itenInsert);
        
    }

    public function exibirItens() {
        return $this->itens;
    }

    public function exibirStatus() {
        return $this->status;
    }

    public function alterarStatus(string $novoStatus) {
        $this->status = $novoStatus;
    }

    public function calculaValorTotalCarrinho(array $itens) {
       $total = 0;
        foreach($itens as $item):
            $total = $total + $item["valor"];
        endforeach;

        return $this->valorTotal = $total;
    }

    public function enviarEmail(string $status) {
        if($status != "Concluido")
            return "Email não enviado";
        
        return "Email Enviado";
    }
}