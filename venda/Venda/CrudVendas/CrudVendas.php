<?php
	include "class/DB.php"; 

abstract class CrudVendas extends DB
{
		protected $tabela;
		public $idvenda;
		public $idcliente;
		public $datavenda;
		public $valortotal;
	    
		
    public function setIdvenda($idvenda){
		$this->idvenda=$idvenda;
	}

	public function getIdvenda(){
		return $this->idvenda; 
	}


	public function setIdCliente($idcliente){
		$this->idcliente=$idcliente;
	}

	public function getIdCliente(){
		return $this->idcliente; 
	}


	public function setDataVenda($datavenda){
		$this->datavenda=$datavenda;
	}

	public function getDataVenda(){
		return $this->datavenda;
	}

	

	public function getValortotal(){
		
		return $this->valortotal;
	}

	public function setValortotal($valortotal){
		$this->valortotal = $valortotal;
	}

}


?>