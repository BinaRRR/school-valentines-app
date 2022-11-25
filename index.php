<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Złota szkoła | Walentynki</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/loading-screen.css">
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
                <h3>Walentynki 2023</h3>
            </div>
            <div id="header-right">
                <div id="home">
                    <i class="menu-element fa-solid fa-house-chimney"></i>
                    <img src="img/slash.png" alt="">
                </div>
                <nav>
                    <a class="menu-element" href="choose.php">
                        <i class="fa-solid fa-circle-plus"></i>
                        <p>Kreator walentynek</p>
                    </a>
                    <a class="menu-element">
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

        <div id="main-container">
            <div class="main-top">
                <img src="img/zlota-logo.png" alt="Logo szkoły">
                <p>Podziel się z kimś miłością</p>
                <p>Kto zostanie Twoją walentynką?</p>
            </div>

            <div class="main-buttons">
                <a class="create-valentine" href="choose.php">Stwórz swoją anonimową walentynkę</a>
                <a class="show-valentines" href="#valentines-category-title">Przejrzyj wysłane walentynki</a>
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
    // class char(2) NOT NULL,
    // message TEXT NOT NULL,
    // date DATETIME NOT NULL);");


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

    mysqli_close($db);
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
            <div class="valentine-card featured">
                <div class="valentine-receiver">
                    <i class="fa-regular fa-user"></i>
                    <p>Liliana Troczyńska 3B</p>
                </div>
                <div class="valentine-card-right">
                    <div class="valentine-info">
                        <div class="valentine-date">Dzisiaj, 17:25</div>
                        <div class="valentine-title">
                            Lorem ipsum dolor sit amet consectetur.
                        </div>
                    </div>
                    <div class="valentine-type-info">
                        <p class="v-type-text"><i class="fa-regular fa-keyboard"></i> Tekst</p>
                        <p class="v-type-pixelart"><i class="fa-solid fa-paint-roller"></i> Pixel art</p>
                        <p class="v-type-image"></p>
                    </div>
                </div>
            </div>
            <div class="valentine-card">
                <div class="valentine-receiver">
                    <i class="fa-regular fa-user"></i>
                    <p>Hubert Kubicki 3B</p>
                </div>
                <div class="valentine-card-right">
                    <div class="valentine-info">
                        <div class="valentine-date">Dzisiaj, 03:37</div>
                        <div class="valentine-title">
                            Lorem ipsum dolor sit amet consectetur.
                        </div>
                    </div>
                    <div class="valentine-type-info">
                        <p class="v-type-text"><i class="fa-regular fa-keyboard"></i> Tekst</p>
                        <p class="v-type-pixelart"></p>
                        <p class="v-type-image"><i class="fa-regular fa-file"></i> Plik</p>
                    </div>
                </div>
            </div>
            <div class="valentine-card">
                <div class="valentine-receiver">
                    <i class="fa-regular fa-user"></i>
                    <p>Hubert Kubicki 3B</p>
                </div>
                <div class="valentine-card-right">
                    <div class="valentine-info">
                        <div class="valentine-date">Wczoraj, 21:58</div>
                        <div class="valentine-title">
                            Lorem ipsum dolor sit amet consectetur.
                        </div>
                    </div>
                    <div class="valentine-type-info">
                        <p class="v-type-text"><i class="fa-regular fa-keyboard"></i> Tekst</p>
                        <p class="v-type-pixelart"></p>
                        <p class="v-type-image"><i class="fa-regular fa-file"></i> Plik</p>
                    </div>
                </div>
            </div>
            <div class="valentine-card">
                <div class="valentine-receiver">
                    <i class="fa-regular fa-user"></i>
                    <p>Hubert Kubicki 3B</p>
                </div>
                <div class="valentine-card-right">
                    <div class="valentine-info">
                        <div class="valentine-date">Przedwczoraj, 14:05</div>
                        <div class="valentine-title">
                            Lorem ipsum dolor sit amet consectetur.
                        </div>
                    </div>
                    <div class="valentine-type-info">
                        <p class="v-type-text"><i class="fa-regular fa-keyboard"></i> Tekst</p>
                        <p class="v-type-pixelart"></p>
                        <p class="v-type-image"><i class="fa-regular fa-file"></i> Plik</p>
                    </div>
                </div>
            </div>
            <div class="valentine-card">
                <div class="valentine-receiver">
                    <i class="fa-regular fa-user"></i>
                    <p>Hubert Kubicki 3B</p>
                </div>
                <div class="valentine-card-right">
                    <div class="valentine-info">
                        <div class="valentine-date">Przedwczoraj, 14:02</div>
                        <div class="valentine-title">
                            Lorem ipsum dolor sit amet consectetur.
                        </div>
                    </div>
                    <div class="valentine-type-info">
                        <p class="v-type-text"><i class="fa-regular fa-keyboard"></i> Tekst</p>
                        <p class="v-type-pixelart"></p>
                        <p class="v-type-image"><i class="fa-regular fa-file"></i> Plik</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="show-all-button-container">
            <a href="" class="show-valentines" id="show-all-button">Przeglądaj wszystkie</a>
        </div>
    </div>
</body>
</html>