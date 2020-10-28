<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- header -->

<?php include("template/entete.php")?>

<!-- corps -->

<body>
    <h2>Convertisseur d'unités</h2>

<!-- convertir la valeur dans l'unité demandée -->

    <form action="traitement.php" method="post">
    <label for="nb"> Valeur :</label>
    <input type="number" name="nb" id="nb">
    <label for="unit">Unité :</label>
    <Select name="unite" size="1">
    <option value="mm">mm</option>
    <option value="cm">cm<cm/option>
    <option value="dm">dm<cm/option>
    <option value="m">m<cm/option>
    <option value="dam">dam<cm/option>
    <option value="hm">hm<cm/option>
    <option value="km">km<cm/option>
    </Select>
    <br><br>
    <label for="unit">Unité voulue :</label>
    <Select name="newUnite" size="1">
    <option value="mm">mm</option>
    <option value="cm">cm<cm/option>
    <option value="dm">dm<cm/option>
    <option value="m">m<cm/option>
    <option value="dam">dam<cm/option>
    <option value="hm">hm<cm/option>
    <option value="km">km<cm/option>
    </Select>
    <input type="submit" value="convertir">
    </form>

    <?php 
    if (isset($mesure))
    {
        echo "<p>",$mesure->getValeur() ," ",$mesure->getUnite()," donne en ",$newunite," : ",$newMesure,"</p>";
    }
    ?>
</body>

<!-- footer -->

<?php include("template/pied.php")?>

</html>