<?php
    class RAF_DZ01 {

        public $ime = '';
        public $prezime = '';
        public $brojIndexa = 0;

        public function __construct($ime, $prezime, $brojIndexa)
        {
            echo 'Ime: ' . $ime . '<br>';
            echo 'Prezime:' . $prezime . '<br>';
            echo 'Broj indeksa: S' . $brojIndexa . '/16 <br>';
        }
    }

    new RAF_DZ01('Ime', 'Prezime', 5);
    
?>