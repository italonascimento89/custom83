<?php

class Produto {

    private $categoria = array();
    private $nome;
    private $preco;
    private $quantidade;
    private $promocao;
    private $inicio_promocao;
    private $fim_promocao;
    private $descricao;

    private $INSTANCE_PRODUTO = null;

    public function __construct(){}

    public static function getInstancePessoaFisica() {
      if (empty($INSTANCE_PRODUTO)) { $INSTANCE_PRODUTO = new Produto(); }
      return $INSTANCE_PRODUTO;
    }

    public function getCategoria(){ return $this->categoria; }
    public function setCategoria($categoria){ array_push($this->categoria, $categoria); }

    public function getNome(){ return $this->nome; }
    public function setNome($nome){ $this->nome = $nome; }

    public function getPreco(){ return $this->preco; }
    public function setPreco($preco){ $this->preco = $preco; }

    public function getQuantidade(){ return $this->quantidade; }
    public function setQuantidade($quantidade){ $this->quantidade = $quantidade; }

    public function getPromocao(){ return $this->promocao; }
    public function setPromocao($promocao){ $this->promocao = $promocao; }

    public function getInicioPromocao(){ return $this->inicio_promocao; }
    public function setInicioPromocao($inicio_promocao){ $this->inicio_promocao = $inicio_promocao; }

    public function getFimPromocao(){ return $this->fim_promocao; }
    public function setFimPromocao($fim_promocao){ $this->fim_promocao = $fim_promocao; }

    public function getDescricao array_push($this->telefone, $telefone);(){ return $this->descricao; }
    public function setDescricao array_push($this->telefone, $telefone);($descricao){ $this->descricao = $descricao; }
}
