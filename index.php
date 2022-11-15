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
                    <div class="menu-element">
                        <i class="fa-solid fa-circle-plus"></i>
                        <p>Kreator walentynek</p>
                    </div>
                    <div class="menu-element">
                        <i class="fa-solid fa-rectangle-list"></i>
                        <p>Lista wysłanych</p>
                    </div>
                    <div class="menu-element">
                        <i class="fa-solid fa-circle-info"></i>
                        <p>Kontakt</p>
                    </div>
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
                <button id="create-valentine">Stwórz swoją anonimową walentynkę</button>
                <button id="show-valentines">Przejrzyj wysłane walentynki</button>
            </div>

            <div id="wave-line">
                <img src="img/wave.png" alt="">
            </div>

            <div class="main-stats">
                <div class="stats-left">
                    <p>
                        <?php #VALUE ?>17
                    </p>
                    <p>wyznań miłosnych dzisiaj</p>
                </div>
                <div class="stats-right">
                    <p>
                        <?php #VALUE ?>95
                    </p>
                    <p>poprawionych humorów ogółem</p>
                </div>
            </div>

            <div class="main-bottom">
                <p>Czas na Twój ruch. Anonimowo wyślij komuś walentynkę, wyznaj co czujesz bądź uczyń jego dzień lepszym!</p>
            </div>
        </div>
    </div>
</body>
</html>