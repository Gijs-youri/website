<?php require("../private/initialize.php") ?>
<?php require(SHARED_PATH . "/header.php");?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

}
else{

}
?>

<div id="content">
    <h2>Inloggen</h2>
    <p>Hier kunt u later inloggen.</p>

    <form method="POST">
        Voornaam: <br>
        <input type="text" name="voornaam"><br><br>
        Achternaam: <br>
        <input type="text" name="achternaam"><br><br>

        <input type="radio" name="geslacht" value="man" checked> Man<br>
        <input type="radio" name="geslacht" value="vrouw"> Vrouw<br>
        <input type="radio" name="geslacht" value="anders"> Anders<br><br>


    </form>
</div>

<?php require(SHARED_PATH . "/footer.php");?>