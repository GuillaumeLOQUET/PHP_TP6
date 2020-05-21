<!DOCTYPE html>
<html>
<body>
<h1>TP n°6</h1>
<h2>Exercice n°1</h2>


<?php
class Equipe{
    private $nom ;
    private $nbrtitre ;
    const textnbreq = "Nombre d'équipe : ";
    static $nbreq = 0;
    public function display(){
        echo "L'équipe $this->nom a $this->nbrtitre titres";
    }
    public function setterNom($n){
        $this->nom = $n ;
    }
    public function setterNbr($n){
        $this->nbrtitre = $n ;
    }
    public function getterNom(){
        return $this->nom ;
    }
    public function getterNbr(){
        return $this->nbrtitre ;
    }
    function __construct($nom,$nbrtitre) {
        $this->nom = $nom ;
        $this->nbrtitre = $nbrtitre ;
        $this::$nbreq += 1 ;
    }
    static function displayNbreq(){
        echo self::textnbreq.self::$nbreq ;
    }
    function __destruct()
    {
        echo "Destructor : ".$this->nom;
        echo "<br>";
        $this::$nbreq -= 1 ;
    }

}
//Partie 2
/*$nantes = new Equipe();
$nantes->nom = "Nantes";
$nantes->nbrtitre = 99 ;
$nantes->display();*/

//Partie 5
/*$nantes = new Equipe();
$nantes->setterNom("Nantes");
$nantes->setterNbr(9);
$nantes->display();*/

//Partie 7
echo "<br>";
$nantes = new Equipe("Nantes",9);
$nantes->display();
echo "<br>";
Equipe::displayNbreq();
echo "<br>";
$paris = new Equipe("Paris",4);
$paris->display();
echo "<br>";
$lyon = new Equipe("Lyon",1);
$lyon->display();
echo "<br>";
$papeete = new Equipe("Papeete",99);
$papeete->display();
echo "<br>";
Equipe::displayNbreq();
echo "<br>";
$paris->__destruct();
Equipe::displayNbreq();
echo "<br>";



?>
</body>
</html>