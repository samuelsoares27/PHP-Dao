<?php

class Usuario{
	//Classe usuário com Get e Set
	private $idusuario;
	public function getIdusuario(){
		return $this->idusuario;
	}
	public function setIdusuario($value){
		$this->idusuario = $value;
	}

	private $deslogin;
	public function getDeslogin(){
		return $this->deslogin;
	}
	public function setDeslogin($value){
		$this->deslogin = $value;
	}

	private $dessenha;
	public function getDessenha(){
		return $this->dessenha;
	}

	public function setDessenha($value){
		$this->dessenha = $value;
	}

	private $dtcadastro;
	public function getDtcadastro(){
		return $this->getDescadastro;
	}
	public function setDtcadastro($value){
		$this->dtcadastro = $value;
	}
}

?>