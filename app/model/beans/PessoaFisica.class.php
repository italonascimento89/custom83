<?php

class PessoaFisica extends Usuario {
    private $cpf = null;
    private $rg;
    private $INSTANCE_PESSOA_FISICA = null;

    public function __construct(){}

    public static function getInstancePessoaFisica() {
      if (empty($INSTANCE_PESSOA_FISICA)) { $INSTANCE_PESSOA_FISICA = new PessoaFisica(); }
      return $INSTANCE_PESSOA_FISICA;
    }

    public function getCpf(){ return $this->cpf; }
    public function setCpf($cpf){ $this->cpf = $cpf; }

    public function getRg(){ return $this->rg; }
    public function setRg($rg){ $this->rg = $rg; }
}
