<?php
define("PRIVATE_PATH", dirname(__File__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . ('/public'));
define("SHARED_PATH", PRIVATE_PATH . ('/shared'));
?>


<?php require_once("functions.php");?>
<?php $page_title = "GC Festival Tickets";?>
<?php require(SHARED_PATH . "/header.php");?>
<div id="content">
    <div id = "main-menu">
        <h2>Main Menu</h2>
        <ul>
            <li><a href="../public/index.php">Hoofdpagina</a></li>
        </ul>
    </div>
</div>
<?php require(SHARED_PATH . "/footer.php");?>