<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Złota szkoła | Walentynki</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/creator-style.css">
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
                <p>Lista wszystkich walentynek</p>
                <p>Może któraś jest zaadresowana właśnie do Ciebie?</p>
            </div>
            <div class="main-list">
                <div class="main-list--options">
                    <div class="filter-options">
                        <i class="fa-solid fa-filter"></i>
                        <label class="input-container">
                            <input type="text" name="title" id="title" placeholder=" " required maxlength=60>
                            <span class="input-label">Imię</span>
                        </label>
                        <label class="input-container">
                            <input type="text" name="title" id="title" placeholder=" " required maxlength=60>
                            <span class="input-label">Nazwisko</span>
                        </label>
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
                    <div class="sort-options">
                        <i class="fa-solid fa-arrow-up-wide-short"></i>
                        <label class="input-container">
                            <select placeholder=" " required>
                                <option value="" disabled selected hidden>
                                <option value="za"></option>
                            </select>
                            <span class="input-label">Sortuj</span>
                        </label>
                    </div>
                </div>
                <div class="main-list--valentines">
                    <div class="valentines-header">
                        <div class="element">Odbiorca</div>
                        <div class="element">Tytuł</div>
                        <div class="element">Data</div>
                    </div>
                    <?php
                    include_once("connection.php");
                    if (empty($_GET['p'])) {
                        $pageNum = 0;
                    } else {
                        $pageNum = $_GET['p'];
                    }
                    $results = $db->query("SELECT ID, title, firstName, lastName, class, DATE_FORMAT(creationDate, '%d-%c-%Y %T') AS dateFormatted, fileIncluded, pixelartIncluded FROM walentynki ORDER BY creationDate DESC LIMIT 10 OFFSET ".($pageNum * 10).";");
                    if ($results->num_rows == 0) {
                        header("Location: list.php");
                    }
                    while ($row = $results->fetch_assoc()) {
                    ?>
                    <a href=<?php echo "'valentine.php?q=".$row['ID']."'"; ?> class="valentine-card featured">
                        <div class="valentine-receiver">
                            <i class="fa-regular fa-user"></i>
                            <p>
                                <?php echo $row['firstName'].' '.$row['lastName'].' '.$row['class']; ?>
                            </p>
                        </div>
                        <div class="valentine-card-right">
                            <div class="valentine-info">
                                <div class="valentine-date">
                                    <?php echo $row['dateFormatted']; ?>
                                </div>
                                <div class="valentine-title">
                                    <?php echo $row['title']; ?>
                                </div>
                            </div>
                            <div class="valentine-type-info">
                                <p class="v-type-text"><i class="fa-regular fa-keyboard"></i> Tekst</p>
                                <p class="v-type-pixelart"><?php echo($row['pixelartIncluded'] ? "<i class='fa-solid fa-paint-roller'></i> Pixelart" : ""); ?></p>
                                <p class="v-type-image"><?php echo($row['fileIncluded'] ? "<i class='fa-solid fa-file'></i> Plik" : ""); ?></p>
                            </div>
                        </div>
                    </a>

                <?php
                    }
                    $db->close();
                ?>
                    
                </div>
                <div class="main-list--pages">
                    <?php 
                    if ($pageNum != 0) {

                    echo "<a href='list.php?p=".($pageNum-1)."' class='page-change' id='previous'>< &nbsp;Poprzednia</a>";
                    }
                    echo "<a href='list.php?p=".($pageNum+1)."' class='page-change' id='next'>Następna &nbsp;></a>";
                    ?>
                    </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-left">

        </div>
        <div class="footer-middle">

        </div>
        <div class="footer-right">
            <a href="https://github.com/BinaRRR" target="_blank">BinaR</a>
        </div>
    </footer>
</body>