<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Złota szkoła | Walentynki</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/loading-screen.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <script src="https://kit.fontawesome.com/5834cec5b8.js" crossorigin="anonymous"></script>
</head>
    <body>
        <div class="loading-screen-container">
            <div class="zlota-logo-container">
                <img src="img/zlota-logo.png" alt="">
            </div>
            <div class="loading-bar-container">
                <img src="img/logo.png" alt="">
                <div class="loading-bar-border">
                    <div class="loading-bar"></div>
                </div>
            </div>
        </div>
        <div class="page-container">
            <script src="js/loading-screen.js"></script>
            <header>
                <div id="header-left">
                    <img src="img/logo.png" alt="Logo aplikacji">
                    <h3>Walentynki</h3>
                </div>
                <div id="header-right">
                <div id="home">
                        <a href="index.php" class="menu-element">
                            <i class="fa-solid fa-house-chimney"></i>
                        </a>
                        <img src="img/slash.png" alt="">
                    </div>
                    <nav>
                        <a class="menu-element" href="create.php">
                            <i class="fa-solid fa-circle-plus"></i>
                            <p>Kreator walentynek</p>
                        </a>
                        <a class="menu-element" href="list.php">
                            <i class="fa-solid fa-rectangle-list"></i>
                            <p>Lista wysłanych</p>
                        </a>
                        <a class="menu-element" href="kontakt.html">
                            <i class="fa-solid fa-circle-info"></i>
                            <p>Kontakt</p>
                        </a>
                    </nav>
                </div>
            </header>
            <form action="admin-panel.php" method="POST">
                <input type="password" name="password">
                <input type="submit" value="Zaloguj">
            </form>
        </div>
    </body>
</html>