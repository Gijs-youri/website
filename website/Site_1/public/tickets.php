<?php require("../private/initialize.php") ?>
<?php require(SHARED_PATH . "/header.php");?>

<div id="content">
    <h2>Tickets Bestellen: </h2>
    <form action="" method="POST">
        Voornaam: <br>
        <input type="text" name="voornaam" placeholder="vul hier uw voornaam in"><br><br>
        Achternaam: <br>
        <input type="text" name="achternaam" placeholder="vul hier uw achternaam in"><br><br>
        Email: <br>
        <input type="email" name="email" placeholder="vul hier uw e-mailadres in"><br><br>
        Aantal Tickets: <br>
        <input type="number" name="aantal" placeholder="kies het gewilde aantal tickets"><br><br>
        Type Ticket: <br><br>
        <input type="radio" name="type"> Basic<br><br>
        <input type="radio" name="type"> Premium<br><br>
        <input type="radio" name="type"> VIP<br><br>
        <input type="submit" name="submit" value="Versturen">
    </form>

</div>

<?php require(SHARED_PATH . "/footer.php");?>
