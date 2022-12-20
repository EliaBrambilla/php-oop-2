<?php 

    include_once __DIR__ . '/prodotto.php';

    class Cibo extends Prodotto{
        public $pesonetto;
        public $ingredienti;
        
        public function __construct(
            String $immagine,
            String $nome,
            Float $prezzo,
            Categorie $category,
            Float $pesonetto,
            String $ingredienti

            ) {
            $this->pesonetto = $pesonetto;
            $this->ingredienti = $ingredienti;
            parent ::__construct($immagine, $nome, $prezzo, $category);
                  
  }

}


?>