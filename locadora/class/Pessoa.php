<?php


 class Pessoa {
    //ATRIBUTOS
    private $nome;
    private $cpf;
    private $idade;
    private $email;
    private $telefone;

    //MÉTODOS
    public function __construct($nome, $cpf, $idade, $email, $telefone) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    //MÉTODOS ESPECIAIS
    function getNome(){
        return $this->nome;
    } 
    function setNome($nome){
        $this->nome = $nome;
    }
    function getCpf(){
        return $this->cpf;
    }
    function setCpf($cpf){
        $this->cpf = $cpf;
    }
    function getIdade(){
        return $this->idade;
    }
    function setIdade($idade){
        $this->idade = $idade;
    }
    function getEmail(){
        return $this->email;
    }
    function setEmail($email){
        $this->email = $email;
    }
    function getTelefone(){
        return $this->telefone;
    }
    function setTelefone($telefone){
        $this->telefone = $telefone;
    }
}