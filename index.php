<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>oop</title>
  </head>
  <body>

    <!-- GOAL:
    Definire la classe Magazzino e la classe Prodotto nel seguente modo:
    Magazzino: definire gli attributi per nome, location e prodotti contenuti (array); definire inoltre costruttore con solo nome e location obbligatori
    Prodotto: definire gli attributi per nome, peso e prezzo
    Generare alcune istanze di ogni classe, hai fini di test e per meglio comprendere i concetti -->

    <!-- Nome: Magazzino principale
    Location: Roma
    Dentro la tua classe avrai un array products che parte inizialmente vuoto..
    una volta inizializzata nella variabile la classe ($magazzino = new Magazzino...) aggiungerai nell'array products una serie di classi
    Prodotto istanziate che contengono il nome, quantità e quello che vuoi :wink: ($magazzino->products[] = new Prodotto..) -->

      <h1>
        <?php

            class Store{
              public $name;
              public $location;
              public $products;

              public function __construct($name, $location,$products = []){
                $this-> name = $name;
                $this-> location = $location;
                $this -> products = $products;
              }

            }

            class Product{
              public $name;
              public $quantity;

              public  function __construct($name, $quantity){
                  $this-> name = $name;
                  $this-> quantity = $quantity;
              }

            }

            // istanze
            $store1 = new Store("MondoUsato", "Napoli");
            $store2 = new Store("Spazio", "Torino");
            $store3 = new Store("CarFashion", "Roma");

            $productNa = new Product("Suv",50);
            // $productNa ->name = "Suv";
            // $productNa ->quantity = 50;

            $productTo = new Product("Crossover",20);
            // $productTo ->name = "Crossover";
            // $productTo ->quantity = 20;

            $productRo = new Product("Station Wagon", 33);
            // $productRo ->name = "station wagon";
            // $productRo ->quantity = 33;

            $store1 -> $products[] = $productNa;
            $store2 -> $products[] = $productTo;
            $store3 -> $products[] = $productRo;

            var_dump($store1);
        		echo "<br>";
        		var_dump($store2);
        		echo "<br>";
        		var_dump($store3);

        ?>
      </h1>



  </body>
</html>
