<?php require("../private/initialize.php") ?>
<?php require(SHARED_PATH . "/header.php");?>

<div id="content">
    <h2>Tickets Bestellen: </h2>
    <form method="POST">
        Voornaam: <br>
        <input type="text" name="voornaam"><br><br>
        Achternaam: <br>
        <input type="text" name="achternaam"><br><br>
        Email: <br>
        <input type="email" name="email"><br><br>
        Aantal Tickets: <br>
        <input type="number" name="aantal"><br><br>
        Type Ticket: <br><br>
        <input type="radio" name="type"> Basic<br><br>
        <input type="radio" name="type"> Premium<br><br>
        <input type="radio" name="type"> VIP<br><br>
        <input type="submit" name="submit" value="Versturen">
    </form>

</div>

<?php require(SHARED_PATH . "/footer.php");?>
