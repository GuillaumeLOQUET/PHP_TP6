<?php

include("formulaire.php");

$formul1 = new formulaire("post", "testformulaire.php");
$formul1->ajouterZoneText("nom");
$formul1->ajouterZoneText("code");
$formul1->ajouterBouton();
$formul1->getForm();


if (isset($_POST['nom']) && isset($_POST['code'])) {
    echo $_POST['nom'] . "<br>";
    echo $_POST['code'] . "<br>";
}

