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


// Usando métodos
$torcedor1->exibir();
