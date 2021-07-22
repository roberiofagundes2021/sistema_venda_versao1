<?php

require_once('../Venda/Venda.php');


$venda = new Vendas;


	$venda->findAll();
echo $venda->lastInsertId();
?> 


