<?php
class Formulaire{
    function __construct($meth, $url) {
        echo "<form method='$meth' action='$url'>";
    }
    function ajouterZoneText($var){
        echo " $var : Nom :<input type=\"text$var\" name=\"$var\" ><br>";
    }
    function ajouterBouton(){
        echo "<input type=\"submit\" >";
    }
    function getform() {
        echo "</form>";
    }
}