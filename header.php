<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 15px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
        }

        .logout-btn {
            color: #fff;
            cursor: pointer;
        }

        .logout-btn:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Animal keeper</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php if (isset($_SESSION['user'])): ?>
                    <li><a href="seznam_zvirat">Seznam zvirat</a></li>
                    <li><a href="seznam_chovanych_zvirat">Seznam_chovanych_zvirat</a></li>
                    <li><span class="logout-btn" onclick="location.href='logout.php'">Logout</span></li>
                <?php else: ?>
                    <li><a href="register">Registrace</a></li>
                    <li><a href="login">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
</body>
</html>
