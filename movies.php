<?php


// Inizializzazione della classe
class Movie
{

    // variabili
    public $name;
    public $year;
    public $descriptions;
    public $genre;
    public $price;
    public $age;
    public $discount;

    // construct

    function __construct($name = 'Undefined')
    {
        $this->name = $name;
    }


    function setDiscount()
    {
        if ($this->age >= 30 && $this->age <= 50) {
            return $this->discount = 20;
        } elseif ($this->age > 51) {
            return $this->discount = 40;
        }
    }

    function setPrice()
    {
        if (!empty($this->discount)) {
            $sconto = $this->price * $this->discount / 100;
            return $this->price = $this->price - $sconto;
        }
    }
}

$film1 = new Movie('L’ultima onda');
$film1->year = '2021';
$film1->descriptions = 'Cambiamenti climatici, mutamenti di tempo e luce: questi ed altri insoliti eventi affliggono la città di Sydney. David Burton, un avvocato colpito anch’egli da strani fenomeni, decide di difendere un gruppo di aborigeni accusati dell’omicidio di un uomo.';
$film1->genre = 'Fantastico, drammatico';
$film1->price = 10;
$film1->setDiscount();
$film1->setPrice();




$film2 = new Movie('Vampiro a Brooklyn');
$film2->year = '1995';
$film2->descriptions = 'Maximillian, ultimo rappresentante dei vampiri superstiti, giunge a Brooklyn, perché sa che esiste qui Rita Veder, unica donna-vampiro in circolazione. Maximillian – sbarcato in città su di una misteriosa nave con a bordo molti morti dissanguati – è un essere potente che può trasformarsi in ciò che vuole ed è deciso a trovarla.';
$film2->genre = 'Commedia, Orrore';
$film2->age = 31;
$film2->price = 30;
$film2->setDiscount();
$film2->setPrice();


$film3 = new Movie('Star Wars: Episodio VI – Il ritorno dello Jedi');
$film3->year = '1983';
$film3->descriptions = 'Circa sei mesi dopo la cattura di uno dei comandanti dell’Alleanza Ribelle Ian Solo, la principessa Leila Organa, Luke Skywalker che ha ormai quasi concluso il suo apprendistato come Cavaliere Jedi, Chewbecca, Lando Calrissian, C1-P8 e D-3BO si recano sul pianeta Tatooine per salvare Ian, tenuto prigioniero in una lastra di grafite dal potente e malvagio criminale Jabba the Hutt nel suo palazzo. I primi a entrare nell’edificio sono C1-P8 e D-3BO ';
$film3->genre = 'Fantascienza, Avventura, Azione, Fantastico';
$film3->age = 55;
$film3->price = 20;
$film3->setDiscount();
$film3->setPrice();

$films = [$film1, $film2, $film3];
