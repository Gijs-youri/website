<?php
    if(!isset($page_title)) {
        $page_title = "Graafschap College Festival Website";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo $page_title; ?> </title>
    <link rel="stylesheet" media="all" href="<?php echo
    url_for('/stylesheets/main.css');?>" />
</head>

<body>

<header>
    <h1>GC Festival Tickets</h1>
</header>

<navigation>
    <ul>
        <li><a href="<?php echo url_for('/index.php'); ?>">Menu</a></li>
        <li><a href="<?php echo url_for('/login.php'); ?>">Inloggen</a></li>
        <li><a href="<?php echo url_for('/tickets.php'); ?>">Tickets</a></li>
        <li><a href="<?php echo url_for('/profiel.php'); ?>">Profiel</a></li>

    </ul>
</navigation>
