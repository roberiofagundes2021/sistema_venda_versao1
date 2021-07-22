<?php
	require_once 'class/DB_Itensvenda.php';

abstract class CrudItensVendas extends DB_Itensvenda
{
		protected $tabela;
		public $idvenda;
		public $idproduto;
		public $quantidade_itens;
		public $valor;
		public $desconto;

	public function setIdItensVenda($iditensvendas){
		$this->iditensvendas = $iditensvendas;
	}

	public function getIdItensVenda(){
		return $this->iditensvendas;
	} 

	public function setIdVenda($idvenda){
		$this->idvenda=$idvenda;
	}

	public function getIdCliente(){
		return $this->idvenda; 
	}

	public function setIdProduto($idproduto){
		$this->idproduto=$idproduto;
	}

	public function getIdProduto(){
		return $this->idproduto;
	}

	public function setQuantidade($quantidade_itens){
		$this->quantidade_itens=$quantidade_itens;
	}

	public function getQuantidade(){
		return $this->quantidade_itens;
	}

	public function setValorVenda($valor){
		$this->valor=$valor;
	}

	public function getValorVenda(){
		return $this->valor;
	}

	public function setDesconto($desconto){
		$this->desconto=$desconto;
	}

	public function getDesconto(){
		return $this->desconto;
	}

	

}








?>