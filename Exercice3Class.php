<?php


class recuperation{
    private $nom ;
    private $prenom ;
    private $mail ;
    private $age ;
    private $civilite ;
    function __construct(){
        $this->nom = $this->getnom();
        $this->prenom = $this->getprenom();
        $this->mail = $this->getmail();
        $this->age = $this->getage();
        $this->civilite = $this->getcivilite();
    }
    function getnom(){
        return $_POST['nom'];
    }
    function getprenom(){
        return $_POST['prenom'];
    }
    function getmail(){
        return $_POST['mail'];
    }
    function getage(){
        return $_POST['age'];
    }
    function getcivilite(){
        return $_POST['civilite'];
    }
    function display(){
        echo "Les informations entrées dans le formulaire sont : $this->nom $this->prenom $this->mail $this->age $this->civilite";
    }
}