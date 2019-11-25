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
    <link rel="stylesheet" media="all" href="stylesheets/main.css" />
</head>

<body>

<header>
    <h1>GC Festival Tickets</h1>
</header>

<navigation>
    <ul>
        <li><a href="<?php echo WWW_ROOT . "/index.php"; ?>">Menu</a></li>
    </ul>
</navigation>
