<?php
// Definindo a classe Carro
class Carro
{
    public $marca;
    public $modelo;
    public $ano;

    // Construtor para inicializar o objeto
    public function __construct($marca, $modelo, $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    // Método para exibir informações
    public function exibir()
    {
        echo "Carro: {$this->marca} {$this->modelo} ({$this->ano})<br>";
    }
}

// Criando objetos (instâncias)
$carro1 = new Carro("Fiat", "Uno", 2010);
$carro2 = new Carro("Toyota", "Corolla", 2020);
$carro3 = new Carro("Volkswagen", "Gol", 2015);


// Usando métodos
$carro1->exibir();
$carro2->exibir();
$carro3->exibir();

?>
