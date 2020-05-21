<!DOCTYPE html>
<html>
<body>
<h1>TP n°6</h1>
<h2>Exercice n°3</h2>

<form method="post" >
    Nom : <input type="text" name="nom"><br>
    Prenom : <input type="text" name="prenom"><br>
    Mail : <input type="text" name="mail"><br>
    Age : <select name="age" id="age">
        <option value="">--Age--</option>
        <option value="0-20">0-20</option>
        <option value="21-40">21-40</option>
        <option value="41-60">41-60</option>
        <option value="60+">60+</option>
    </select><br>
    <label for="monsieur">Monsieur</label>
    <input type="radio" id="monsieur" name="civilite" value="monsieur">
    <label for="madame">Madame</label>
    <input type="radio" id="madame" name="civilite" value="madame"><br>
    <input type="submit">
</form>
<?php
include('Exercice3Class.php');

if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['age']) && !empty($_POST['civilite'])){
    $result = new recuperation();
    $result->display();
}


?>
</body>
</html>