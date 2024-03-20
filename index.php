<?php 
require_once "classes/DBC.php";
require_once "classes/User.php";
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hlavní stránka</title>
</head>
<style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            margin: 20px;
            flex-grow: 1;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .animal-img {
            width: 50%; /* Přizpůsobte velikost podle potřeby */
            height: auto; /* Přizpůsobte velikost podle potřeby */
        }


    </style>
<body>
    <?php include 'header.php'; ?>
    
    <div class="content">
        <h1>Základní informace</h1>
        <h4><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. In convallis. </p></h4>
        <h4><p>Integer in sapien. Donec iaculis gravida nulla. </p></h4>
        <h4><p>Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p></h4>
        <h4><p>Nullam at arcu a est sollicitudin euismod. Nulla non arcu lacinia neque faucibus fringilla. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Etiam neque.</p></h4>
    </div>
    <div class="center">
        <img src="fishless.jfif" alt="Kočka" class="animal-img">
    </div>
<p></p>
<p></p>
    <?php include 'footer.php'; ?>
</body>
</html>
