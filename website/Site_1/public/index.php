<?php require("../private/initialize.php") ?>
<?php require(SHARED_PATH . "/header.php");?>

<div id="content">
    <div id = "main-menu">
        <h2>Hoofdmenu</h2>
        <ul>
            <li><a href="<?php echo url_for('/index.php'); ?>">Hoofdpagina</a></li>
            <li><a href="<?php echo url_for('/login.php'); ?>">Inloggen</a></li>
            <li><a href="<?php echo url_for('/tickets.php'); ?>">Tickets</a></li>
            <li><a href="<?php echo url_for('/profiel.php'); ?>">Profiel</a></li>


<!--            <li><a href="--><?php //echo url_for('/contact.php'); ?><!--">Contact</a></li>-->
<!--            <li><a href="--><?php //echo url_for('/about.php'); ?><!--">About</a></li>-->

        </ul>
    </div>
</div>

<?php require(SHARED_PATH . "/footer.php");?>
