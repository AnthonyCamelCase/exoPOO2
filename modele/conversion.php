<?php

class Conversion
{
    private $_valeur;
    private $_unite;
    
    //constructeur
    public function __construct($valeur, $unite){
        $this->setValeur($valeur);
        $this->setUnite($unite);
    }

    //getter
    public function getValeur(){
        return $this->_valeur;
    }
    public function getUnite(){
        return $this->_unite;
    }

    //setter
    private function setValeur($valeur){
        $this->_valeur = htmlspecialchars($valeur);
    }
    private function setUnite($unite){
        $this->_unite = htmlspecialchars($unite);
    }

    //fonction de conversion de unité de départ à m
    public function Convert2M($ancienneValeur,$uniteDepart)
    {
        switch($uniteDepart)
        {
            case "mm":
                return $ancienneValeur * 0.001;
                break;
            case "cm":
                return $ancienneValeur * 0.01;
                break;
            case "dm":
                return $ancienneValeur * 0.1;
                break;
            case "m":
                return $ancienneValeur * 1;
                break;
            case "dam":
                return $ancienneValeur * 10;
                break;
            case "hm":
                return $ancienneValeur * 100;
                break;
            case "km":
                return $ancienneValeur * 1000;
                break;
        }
    }


    //fonction de conversion de m à unité voulue.
    public function Convert($ancienneValeur,$newunite)
    {
        switch($newunite)
        {
            case "mm":
                return $ancienneValeur * 1000;
                break;
            case "cm":
                return $ancienneValeur * 100;
                break;
            case "dm":
                return $ancienneValeur * 10;
                break;
            case "dm":
                return $ancienneValeur * 10;
                break;
            case "m":
                return $ancienneValeur * 1;
                break;
            case "dam":
                return $ancienneValeur * 0.1;
                break;
            case "hm":
                return $ancienneValeur * 0.01;
                break;
            case "km":
                return $ancienneValeur * 0.001;
                break;
        }
    }

    
}