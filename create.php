<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Złota szkoła | Walentynki</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/creator-style.css">
    <script src="https://kit.fontawesome.com/5834cec5b8.js" crossorigin="anonymous"></script>
    <script src="js/submit-form.js"></script>
</head>
<body>
    <!-- <div class="loading-screen-container">
        <div class="zlota-logo-container">
            <img src="img/zlota-logo.png" alt="">
        </div>
        <div class="loading-bar-container">
            <img src="img/logo.png" alt="">
            <div class="loading-bar-border">
                <div class="loading-bar"></div>
            </div>
        </div>
    </div> -->
    <div class="page-container">
        <!-- <script src="js/loading-screen.js"></script> -->
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
                    <a class="menu-element">
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
        <div class="text-section">
            <form id="form" method="POST">
                <div class="text-section-grid">
                    <div class="grid-item item1">
                        <label class="input-container">
                            <input type="text" name="receiver" id="receiver" placeholder=" " required maxlength=60>
                            <span class="input-label">Do kogo zaadresowana jest walentynka?</span>
                        </label>
                    </div>
                    <div class="grid-item item2">
                        <label class="input-container">
                            <select name="grade" id="grade" required >
                                <option value="" disabled selected hidden>
                                <option value="1A"></option>
                                <option value="2A"></option>
                                <option value="3A"></option>
                                <option value="4A"></option>
                                <option value="5A"></option>
                                <option value="1B"></option>
                                <option value="2B"></option>
                                <option value="3B">3B</option>
                                <option value="4B"></option>
                                <option value="5B"></option>
                                <option value="1C"></option>
                                <option value="2C"></option>
                                <option value="3C"></option>
                                <option value="4C"></option>
                                <option value="5C"></option>
                                <option value="4E">4E</option>
                            </select>
                            <span class="input-label">Klasa</span>
                        </label>
                    </div>
                    <div class="grid-item item3">
                        <label class="input-container">
                            <input type="text" name="title" id="title" placeholder=" " required maxlength=60>
                            <span class="input-label">Tytuł walentynki</span>
                        </label>
                    </div>
                    <div class="grid-item item4">
                        <label class="input-container">
                            <textarea name="content" id="content" cols="30" rows="10" placeholder=" "></textarea>
                            <span class="input-label">Najgorętsze życzenia</span>
                        </label>
                    </div>
                </div>
        </div>
        <div class="pixelart-section">
            <div class="pixelart-top-bar">
                <button type="button" class="btn-clear-pixels hide-on-resize">
                    <div class="btn-clear-pixels-left-circle hide-on-resize">Wyczyść piksele</div>
                    <div class="btn-clear-pixels-right-circle hide-on-resize">
                        <i class="fa-solid fa-eraser"></i>
                    </div>
                </button>
                <div class="pixelart-top-bar-right">
                    <div class="btn-circle zoom-in">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </div>
                    <div class="btn-circle zoom-out">
                        <i class="fa-solid fa-magnifying-glass-minus"></i>
                    </div>
                    <div class="color-picker-container">
                        <label for="color"><i class="fa-solid fa-paint-roller"></i></label>
                        <div class="btn-color-picker">
                           <input type="color" name="color" id="color-picker">
                        </div>
                    </div>
                </div>
            </div>

            <div class="pixelart-grid-container">
                <div class="pixelart-grid">
                    <script src="js/pixelart-grid.js"></script>
                </div>
            </div>
        </div>

        <div class="upload-section">
        </div>
        <input type="submit" value="Wyślij (test)">
        </form>
    </div>
</body>