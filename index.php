<?php

require 'Produto.class.php';

$produto = new Produto();
$produto->setNomeProduto("Coca Cola");
$produto->$setPrecoProduto(77.00);
$produto->$setValorPago(100.00);

echo $produto->getCalculaTroco();
