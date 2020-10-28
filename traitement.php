<?php 
require('modele/conversion.php');
    
$mesure = new Conversion($_POST['nb'],$_POST['unite']);
$newunite = $_POST['newUnite'];

//$newMesure = $mesure->Convert2M($mesure->getValeur(),$mesure->getUnite());
$newMesure = $mesure->Convert($mesure->Convert2M($mesure->getValeur(),$mesure->getUnite()),$newunite);

require('index.php');

