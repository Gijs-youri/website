<?php require("../private/initialize.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo $page_title; ?> </title>
    <link rel="stylesheet" media="all" href="stylesheets/main.css" />
</head>

<body>
<header>
    <h1>Inloggen</h1>
</header>

<navigation>
    <ul>
        <li><a href="<?php echo WWW_ROOT . "/index.php"; ?>">Menu</a></li>
        <li><a href="<?php echo WWW_ROOT . "/login.php"; ?>">Inloggen</a></li>
    </ul>
</navigation>

<div id="content">
    <h2>Inloggen</h2>
    <p>Hier kunt u later inloggen.</p>
</div>

<?php require(SHARED_PATH . "/footer.php");?>