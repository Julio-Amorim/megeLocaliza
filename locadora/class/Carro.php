<?php

class Carro {
    //ATRIBUTOS
    private $grupo;
    private $modelo;
    private $marca;
    private $cor;
    private $potencia;
    private $arcondicionado;
    private $preco;
    private $codigo;

    //MÉTODOS
    public function __construct($grupo, $modelo, $marca, $preco, $codigo, $cor, $potencia, $arcondicionado) {
        $this->grupo = $grupo;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->preco = $preco;
        $this->codigo = $codigo;
        $this->cor = $cor;
        $this->potencia = $potencia;
        $this->arcondicionado = $arcondicionado;
    }

    //MÉTODOS ESPECIAIS
    function setModelo($modelo) { 
        $this->modelo = $modelo; 
    }

    function getModelo() { 
        return $this->modelo; 
    }

    function setMarca($marca) { 
        $this->marca = $marca; 
    }

    function getMarca() { 
        return $this->marca; 
    }

    function setCor($cor) { 
        $this->cor = $cor; 
    }

    function getCor() { 
        return $this->cor; 
    }

    function setPotencia($potencia) { 
        $this->potencia = $potencia; 
    }

    function getPotencia() { 
        return $this->potencia; 
    }

    function setArcondicionado($arcondicionado) { 
        $this->arcondicionado = $arcondicionado; 
    }

    function getArcondicionado() { 
        return $this->arcondicionado; 
    }

    function getPreco() {
        return $this->preco; 
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo; 
    }

    function getCodigo() {
        return $this->codigo; 
    }

    function setGrupo($grupo) {
        $this->grupo = $grupo; 
    }

    function getGrupo() {
        return $this->grupo; 
    }
}