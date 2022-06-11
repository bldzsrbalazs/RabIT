<?php
    //Require database.php to access database and get table values
    require_once 'database.php';
?>
<head>
    <!--Charset utf-8 for proper display-->
    <meta charset="utf-8">
    <!--The edited stylesheet imported to the page -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <!-- Insert navbar.php and routing.php -->
        <!-- Navbar.php after loaded, the navigation menu items are visible and able to acccess the USERS and ADVERTISEMENTS page -->
        <nav><?php require_once 'navbar.php';?></nav>
        <!-- The content of the page -->
        <content><?php require_once 'routing.php'; ?></content>
</body>