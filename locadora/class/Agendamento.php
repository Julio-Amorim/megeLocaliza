<?php

use Illuminate\Support\Facades\Date;

require_once "Pessoa.php";
require_once "Carro.php";

class Agendamento extends Carro{
    //ATRIBUTOS
    private $localRetirada;
    private $dataRetirada;
    private $horaRetirada;
    private $localDevolucao;
    private $dataDevolucao;
    private $horaDevolucao;
    private $totDias;
    private $precoTotal;

    //MÉTODOS
    public function __construct($localRetirada, $dataRetirada, $horaRetirada, $localDevolucao, $dataDevolucao, $horaDevolucao){
        $this->localRetirada = $localRetirada;
        $this->dataRetirada = $dataRetirada;
        $this->horaRetirada = $horaRetirada;
        $this->localDevolucao = $localDevolucao; 
        $this->dataDevolucao = $dataDevolucao; 
        $this->horaDevolucao = $horaDevolucao;
    } 
    //Teste
    public function alugar($grupo, $modelo, $marca, $preco, $codigo, $cor, $potencia, $arcondicionado){
        parent::__construct($grupo, $modelo, $marca, $preco, $codigo, $cor, $potencia, $arcondicionado);

        $this->calcularDias();
        $this->calcularPreco($preco);

        echo "<br><br>=============Informações do Carro================<br><br>";
        echo "Modelo: " . $this->getModelo() . "<br>Marca: " . $this->getMarca() . "<br>Cor: " . $this->getCor() . "<br>Potência: " . $this->getPotencia() . "<br>Arcondicionado: " . $this->getArCondicionado() . "<br>Diária: " . $this->getPreco() . "<br>Preço Total: " . 
        $this->getPrecoTotal() . "<br><br>";
        
        echo "<br><br>=======Informações de Retirada e Devolução=======<br><br>";
        echo "Local de Retirada: " . $this->getLocalRetirada() . "<br>Data de Retirada: " . $this->getDataRetirada() . "<br>Hora de Retirada: " . $this->getHoraRetirada() . "<br>Local de Devolucao: " . $this->getLocalDevolucao() . "<br>Data de Devolucao: " . $this->getDataDevolucao() . "<br>Hora de Devolucao: " . $this->getHoraDevolucao() . "<br>Dias Alugados: " . $this->getTotDias() . "<br><br>";
    }

    //Teste
    public function confirmar($nome, $cpf, $idade, $email, $telefone){
        echo "==========================================================================";
        if ($idade >= 18) {
            echo "<br><br>=============Informações Pessoais================<br><br>";
            echo "Nome: " . $nome . "<br>CPF: " . $cpf .  "<br>Idade: " . $idade . "<br>Email: " . $email . "<br>Telefone: " . $telefone;

            $this->calcularPreco($this->getPreco());
            echo "<br><br>=============Informações do Carro================<br><br>";
            echo "Modelo: " . $this->getModelo() . "<br>Marca: " . $this->getMarca() . "<br>Cor: " . $this->getCor() . "<br>Potência: " . $this->getPotencia() . "<br>Arcondicionado: " . $this->getArCondicionado() . "<br>Diária: " . $this->getPreco() . "<br>Preço Total: " . $this->getPrecoTotal();

            $this->calcularDias();
            echo "<br><br>=======Informações de Retirada e Devolução=======<br><br>";
            echo "Local de Retirada: " . $this->getLocalRetirada() . "<br>Data de Retirada: " . $this->getDataRetirada() . "<br>Hora de Retirada: " . $this->getHoraRetirada() . "<br>Local de Devolucao: " . $this->getLocalDevolucao() . "<br>Data de Devolucao: " . $this->getDataDevolucao() . "<br>Hora de Devolucao: " . $this->getHoraDevolucao() . "<br>Dias Alugados: " . $this->getTotDias() . "<br><br>"; 
            
            echo "Carro Alugado com Sucesso!<br><br><br>";
        } else {
            echo "<br><br><br>Verifique as Informações.<br><br><br>";
            }
        
    }

    //Calcular total de dias
    public function calcularDias() {
        // transforma a data do formato BR para o formato americano ANO-MES-DIA
        $data1 = implode('-', array_reverse(explode('/', $this->getDataRetirada())));
        $data2 = implode('-', array_reverse(explode('/', $this->getDataDevolucao())));
        // converte as datas para o formato timestamp
        $d1 = strtotime($data1); 
        $d2 = strtotime($data2);
        // verifica a diferença em segundos entre as duas datas e divide pelo número de segundos que um dia possui
        $dataFinal = ($d2 - $d1) /86400;
        // caso a data 2 seja menor que a data 1, multiplica o resultado por -1
        if($dataFinal < 0)
            $dataFinal *= -1; 
        $this->totDias = $dataFinal;
        return $this->totDias;
    }

    //Calcular o preço total de acordo com o total de dias
    public function calcularPreco($preco){
        $this->calcularDias();
        $variable = $preco;
        $preco = floatval($variable);
        $variable = $this->getTotDias();
        $this->totDias = floatval($variable);
        $this->precoTotal =  $preco * $this->getTotDias();
        return $this->precoTotal;
    }

    //Calcula a parcela de 10x 
    public function parcela(){
        $desconto = $this->precoTotal / 10;
        return $desconto;
    }

    //MÉTODOS ESPECIAIS
    function setLocalRetirada($localRetirada) {
         $this->localRetirada = $localRetirada; 
    }

    function getLocalRetirada() {
         return $this->localRetirada; 
    }

    function setDataRetirada($dataRetirada) {
         $this->dataRetirada = $dataRetirada; 
    }

    function getDataRetirada() {
         return $this->dataRetirada; 
    }

    function setHoraRetirada($horaRetirada) {
         $this->horaRetirada = $horaRetirada; 
    }

    function getHoraRetirada() {
         return $this->horaRetirada; 
    }

    function setLocalDevolucao($localDevolucao) {
         $this->localDevolucao = $localDevolucao; 
    }

    function getLocalDevolucao() {
         return $this->localDevolucao; 
    }

    function setDataDevolucao($dataDevolucao) {
         $this->dataDevolucao = $dataDevolucao; 
    }

    function getDataDevolucao() {
         return $this->dataDevolucao; 
    }

    function setHoraDevolucao($horaDevolucao) {
         $this->horaDevolucao = $horaDevolucao; 
    }

    function getHoraDevolucao() {
         return $this->horaDevolucao; 
    }
    
    private function getTotDias(){
        return $this->totDias;
    }

    function setCarro($carro){
        $this->carro = $carro;
    }
    
    function getCarro(){
        return $this->carro;
    }
    
    function getPrecoTotal(){
        return $this->precoTotal;
    }
}
