<?php
    if(isset($_GET['q']))
    $vID = $_GET['q'];

    include_once("connection.php");
    $results = $db->query("SELECT *, DATE_FORMAT(creationDate, '%d-%c-%Y %T') AS dateFormatted FROM walentynki WHERE ID=".$vID.";");
    if (!($row = $results->fetch_assoc())) {
        header("Location: list.php");
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Złota szkoła | Walentynki</title>
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="css/loading-screen.css"> -->
    <script src="https://kit.fontawesome.com/5834cec5b8.js" crossorigin="anonymous"></script>
    <script src="js/envelope-animation.js"></script>
</head>
<body class="preload">
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
        <script src="js/loading-screen.js"></script>
        <header>
            <div id="header-left">
                <img src="img/logo.png" alt="Logo aplikacji">
                <h3>Walentynki</h3>
            </div>
            <div id="header-right">
                <div id="home">
                    <i class="menu-element fa-solid fa-house-chimney"></i>
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
        <div class="valentine-main-container">
            <div class="envelope-container"> 
                <div class="envelope-triangle triangle-left"></div>
                <div class="envelope-triangle triangle-right"></div>
                <div class="envelope-triangle triangle-bottom"></div>
                <div class="envelope-triangle triangle-top"></div>
                <div class="letter-pixelart"></div>
                <div class="letter letter-text">
                    <p class="vReceiver"><?php echo $row['firstName']." ".$row['lastName']; ?></p>
                    <p class="vDate"><?php echo $row['dateFormatted']; ?></p>
                    <p class="vTitle"><?php echo $row['title']; ?></p>
                    <p class="vContent"><?php echo $row['message']; ?></p>
                </div>
                <button type="button" class="envelope-seal">
                    <img src="img/zlota-logo.png" class="seal-logo">
                </button>
            </div>
            <div class="pixelart-grid pixelart-show">
                <?php
                    $results = $db->query("SELECT 1 FROM walentynki WHERE ID=".$vID." AND pixelartIncluded=1;");
                    if ($results->num_rows <= 0) {
                        return;
                        $db->close();
                    }
                    $results = $db->query("SELECT pixelColor FROM pixels WHERE valentineID=".$vID.";");
                    while ($row = $results->fetch_assoc()) {
                        ?>
                            <div class="tile no-border" style="background-color: #<?php echo $row['pixelColor']; ?>;"></div>
                            <?php
                    }
                    $db->close();
                    ?>
                    <p class="wip-info">Podgląd, work in progress</p>
            </div>
        </div>
    </div>
</body>