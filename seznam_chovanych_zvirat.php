<?php 

session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chovaná zvířata</title>
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
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .animal-img {
            width: 500px; 
            height: auto; 
            margin-bottom: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
        
<body>
    <?php include 'header.php'; ?>
    
    <div class="content">
        <h1>Základní informace</h1>
        <div>
            <p>Kočky:</p>
            <img src="kocka.jpg" alt="Kočka" class="animal-img">
        </div>
        <div>
            <p>Psi:</p>
            <img src="pes.jpg" alt="Pes" class="animal-img">
        </div>

    </div>
        <p><p>
    <?php include 'footer.php'; ?>
</body>
</html>
