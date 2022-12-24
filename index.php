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

        <div class="main-container">
            <div class="main-top">
                <img src="img/zlota-logo.png" alt="Logo szkoły">
                <p>Podziel się z kimś miłością</p>
                <p>Kto zostanie Twoją walentynką?</p>
            </div>

            <div class="main-buttons">
                <a class="primary-button" href="create.php">Stwórz swoją anonimową walentynkę</a>
                <a class="secondary-button" href="#valentines-category-title">Przejrzyj wysłane walentynki</a>
            </div>

            <div id="wave-line">
                <img src="img/wave.png" alt="">
            </div>
<?php
    include_once('connection.php');

    // mysqli_query($db, "CREATE TABLE IF NOT EXISTS walentynki
    // (ID INT NOT NULL auto_increment PRIMARY KEY,
    // title VARCHAR(64) NOT NULL,
    // firstName VARCHAR(32) NOT NULL,
    // lastName VARCHAR(64) NOT NULL,
    // class char(2) NOT NULL,
    // message TEXT,
    // creationDate DATETIME NOT NULL);");


    // mysqli_query($db, "CREATE TABLE IF NOT EXISTS pixels
    // (ID INT NOT NULL auto_increment PRIMARY KEY,
    // valentineID INT NOT NULL,
    // pixelColor char(6));");

    $results = mysqli_query($db, "SELECT 
    (SELECT COUNT(ID) FROM walentynki) AS allValentines,
    (SELECT COUNT(ID) FROM walentynki WHERE DATE(creationDate)=DATE(NOW())) AS todaysValentines
    FROM
    walentynki");
    $row = mysqli_fetch_row($results);
?>
            <div class="main-stats">
                <div class="stats-left">
                    <p>
                        <?php echo $row[1] ?>
                    </p>
                    <p>wyznań miłosnych dzisiaj</p>
                </div>
                <div class="stats-right">
                    <p>
                        <?php echo $row[0] ?>
                    </p>
                    <p>poprawionych humorów ogółem</p>
                </div>
            </div>
            <div class="main-bottom">
                <p>Czas na Twój ruch. Anonimowo wyślij komuś walentynkę, wyznaj co czujesz bądź uczyń jego dzień lepszym!</p>
                <img src="img/arrow.png" alt="">
            </div>
        </div>
        <h1 id="valentines-category-title">Najnowsze miłostki</h1>
        <div class="valentines-list">

        <?php
            $results = $db->query("SELECT ID, title, firstName, lastName, class, creationDate FROM walentynki ORDER BY creationDate DESC LIMIT 5;");
            while ($row = $results->fetch_assoc()) {
        ?>
            <a href= <?php echo "'valentine.php?q=".$row['ID']."'"; ?> class="valentine-card featured">
                <div class="valentine-receiver">
                    <i class="fa-regular fa-user"></i>
                    <p>
                        <?php echo $row['firstName'].' '.$row['lastName'].' '.$row['class']; ?>
                    </p>
                </div>
                <div class="valentine-card-right">
                    <div class="valentine-info">
                        <div class="valentine-date">
                            <?php echo $row['creationDate']; ?>
                        </div>
                        <div class="valentine-title">
                            <?php echo $row['title']; ?>
                        </div>
                    </div>
                    <div class="valentine-type-info">
                        <p class="v-type-text"><i class="fa-regular fa-keyboard"></i> Tekst</p>
                        <p class="v-type-pixelart"><i class="fa-solid fa-paint-roller"></i> Pixel art</p>
                        <p class="v-type-image"></p>
                    </div>
                </div>
            </a>

        <?php
            }
            $db->close();
        ?>
        </div>
        <div id="show-all-button-container">
            <a href="list.php" class="secondary-button thicker-btn">Przeglądaj wszystkie</a>
        </div>
    </div>
</body>
</html>