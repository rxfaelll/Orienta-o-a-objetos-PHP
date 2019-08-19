<?php
class Produto{
    private $nomeProduto;
    private $precoProduto;
    private $valorPago;    

    public function setNomeProduto($nomeProduto){
        $this->nome = $nomeProduto;
    }

    public function setPrecoProduto($precoProduto){
        $this->precoProduto = $precoProduto;
    }

    public function setValorPago($valorPago){
        $this->setValorPago = $valorPago;
    }

    public function getCalculaTroco(){
        return $this->valorPago -  $this->precoProduto;
    }
}