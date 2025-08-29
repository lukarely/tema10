<?php
// Definindo a classe Torcedor
class Torcedor
{
    public $nome;
    public $time;
    public $idade;

    // Construtor para inicializar o objeto
    public function __construct($nome, $time, $idade)
    {
        $this->nome = $nome;
        $this->time = $time;
        $this->idade = $idade;
    }

    // Método para exibir informações
    public function exibir()
    {
        echo "Torcedor: {$this->nome} {$this->time} ({$this->idade})<br>";
    }
}

// Criando objetos (instâncias)
$torcedor1 = new Torcedor("Lucas", "Flamengo", 22);
$torcedor2 = new Torcedor(nome: "Rafael",time: "Cruzeiro", idade: 24);
$torcedor3 = new Torcedor(nome: "Gabriel",time:"Palmeiras", idade: 32);

// Usando métodos
$torcedor1->exibir();
$torcedor2->exibir();
$torcedor3->exibir();