<?php

class joueur {

    //déclaration des variables
    private $_nomJoueur;

    //Initialisation de notre class
    public function __construct ($joueur) {
        echo "Le constructeur a été créé ! <br>";
        $this->_nomJoueur = $joueur;
        //var_dump($this);
    }

    //déclaration des méthodes
    public function creer(){
        echo "Le joueur a été créé <br>";
        echo "Le joueur est : " .$this->_nomJoueur;
    }    
    
}
?>