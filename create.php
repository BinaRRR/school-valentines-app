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
    <link rel="stylesheet" href="css/loading-screen.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <script src="https://kit.fontawesome.com/5834cec5b8.js" crossorigin="anonymous"></script>
    <script src="js/submit-form.js"></script>
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
        
        <p class="section-headline">1. Część tekstowa</p>
        <div class="text-section">
            <form id="form" method="POST" onsubmit="return false">
                <div class="text-section-grid">
                    <div class="grid-item item1">
                        <label class="input-container">
                            <input type="text" name="firstName" id="firstName" placeholder=" " required maxlength=60>
                            <span class="input-label">Imię adresata</span>
                        </label>
                    </div>
                    <div class="grid-item item5">
                        <label class="input-container">
                            <input type="text" name="lastName" id="lastName" placeholder=" " required maxlength=60>
                            <span class="input-label">Nazwisko adresata</span>
                        </label>
                    </div>
                    <div class="grid-item item2">
                        <label class="input-container">
                            <select name="grade" id="grade" required >
                            <option value="" disabled selected hidden>
                                <option value="1A">1A</option>
                                <option value="1B">1B</option>
                                <option value="1C">1C</option>
                                <option value="1D">1D</option>
                                <option value="1E">1E</option>
                                <option value="2A">2A</option>
                                <option value="2B">2B</option>
                                <option value="2C">2C</option>
                                <option value="2D">2D</option>
                                <option value="2E">2E</option>
                                <option value="3A">3A</option>
                                <option value="3B">3B</option>
                                <option value="3C">3C</option>
                                <option value="3D">3D</option>
                                <option value="3E">3E</option>
                                <option value="4A">4A</option>
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
                            <textarea name="content" id="content" cols="30" rows="15" placeholder=" "></textarea>
                            <span class="input-label">Najgorętsze życzenia</span>
                        </label>
                    </div>
                </div>
        </div>
        <p class="section-headline">2. Kreator pixel artów <span class="optional-label">| Opcjonalne</span></p>
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
                           <input type="color" value="#000000" name="color" id="color-picker">
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

        <p class="section-headline">3. Przesyłanie pliku <span class="optional-label">| Opcjonalne</span></p>
        <div class="file-section">
            <div class="file-drop-zone">
                <p id="file-drop-zone-p">Przeciągnij i upuść plik, który chcesz dodać do walentynki</p>
            </div>
            <p>...lub prześlij za pomocą przycisku</p>
                <input type="file" id="fileUpload" accept="image/png, image/jpeg">
        </div>
        <div class="form-controls-section">
            <div class="controls-left">
                <button type="submit" id="submit-form" class="btn-clear-pixels red">
                    <div class="btn-clear-pixels-left-circle">Wyślij walentynkę</div>
                    <div class="btn-clear-pixels-right-circle red-darker">
                        <i class="fa-regular fa-paper-plane"></i>
                    </div>
                </button>
                <p>Anonimowo wysyła walentynkę w świat. Będzie ona dostępna dla każdego, bez Twojego śladu.</p>
            </div>
            <div class="controls-right">
            <button type="reset" class="btn-clear-pixels btn-smaller">
                    <div class="btn-clear-pixels-left-circle">Zresetuj formularz</div>
                    <div class="btn-clear-pixels-right-circle btn-smaller-right-circle">
                        <i class="fa-solid fa-delete-left"></i>
                    </div>
            </button>
            <p>Uwaga! Wyczyści to sekcje tesktową i przesłany plik (nie będzie miało wpływu na kreator pixel artów).</p>
            </div>
        </form>
    </div>
    <div class="state-card success">
        <div class="state-card-left"><i class="fa-solid fa-check"></i></div>
        <div class="state-card-right">Walentynka została przesłana!</div>
    </div>
    <div class="state-card in-progress">
        <div class="state-card-left"><div class="spinner"></div></div>
        <div class="state-card-right">Trwa przesyłanie walentynki...</div>
    </div>
    <div class="state-card failure">
        <div class="state-card-left"><i class="fa-solid fa-xmark"></i></div>
        <div class="state-card-right">Wystąpił błąd, spróbuj ponownie później</div>
    </div>
</body>