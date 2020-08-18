<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simon Lowther</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel='stylesheet' href='/css/portfolio.css'>
</head>

<body>

    <?php

    if (!isset($_SESSION['page'])) {
        die('Silence is Golden');
    } else {
        $page = $_SESSION['page'];
    }

    require_once("Includes/Header.php");

    if ($page == 'resume') {
        require_once("Includes/Resume_Body.php");
    } elseif ($page == 'code') {
        require_once("Includes/Code_Body.php");
    } elseif ($page == 'contact') {
        require_once('Includes/Contact_Body.php');
    } else {
        echo ('Error - Please advise the programmer that things are not well!');
    }

    require_once("Includes/Footer.php");
    ?>


</body>

</html>