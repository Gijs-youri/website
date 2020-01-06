<?php require("../private/initialize.php") ?>
<?php require(SHARED_PATH . "/header.php");?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

}
else{

}
?>
<link rel="stylesheet" href="Inloggen&Registreren.css">
<div class="login" id="content">

    <div id="inloggen">

    <h2>Inloggen</h2>
    <p>Hier kunt u later inloggen.</p>

    <form action="<?php echo url_for('login.php');?>" method="post">
        <h1>Maak een nieuw profiel</h1>
        <div id="voornaam">
            <label id="Voornaam:"></label>
            <input type="text" name="voornaam" placeholder = "Voornaam">   
        </div> 

        <div id="achternaam">
            <label id="Achternaam:"></label>
            <input type="text" name="achternaam" placeholder = "Achternaam">   
        </div> 

        <div id="email">
            <label id="E-mail:"></label>
            <input type="text" name="email" placeholder = "E-mail">   
        </div> 

        <div id="Password">
            <label id="Wachtwoord:"></label>
            <input type="text" name="wachtwoord" placeholder = "Wachtwoord">   
        </div> 
    </form>
    </div>

    <div id="registreren">

    <h2>Registreren</h2>
    <p>Hier kunt u later registreren.</p>
    
    <form action="<?php echo url_for('login.php');?>" method="post">
            
    <div id="voornaam">
            <label id="Voornaam:"></label>
            <input type="text" name="voornaam" placeholder = "Voornaam">   
        </div> 

        <div id="achternaam">
            <label id="Achternaam:"></label>
            <input type="text" name="achternaam" placeholder = "Achternaam">   
        </div> 

        <div id="email">
            <label id="E-mail:"></label>
            <input type="text" name="email" placeholder = "E-mail">   
        </div> 

        <div id="Password">
            <label id="Wachtwoord:"></label>
            <input type="text" name="wachtwoord" placeholder = "Wachtwoord">   
        </div> 
        
    </form>

    </div>
</div>


<?php require(SHARED_PATH . "/footer.php");?>