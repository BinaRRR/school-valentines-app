<?php
    session_start();
    if (!isset($_GET['q'])) {
        header("Location: list.php");
    }
    $vID = $_GET['q'];
    include_once("connection.php");
    if ($_SESSION['admin'] == false) {
        $query_string = sprintf("SELECT ID FROM walentynki WHERE ID=%d AND verified=1;", $vID);
        $results = $db->query($query_string);
        if ($results->num_rows <= 0) {
            $db->close();
            header("Location: list.php");
        }
    }
    $results = $db->query("SELECT *, DATE_FORMAT(creationDate, '%d-%c-%Y %T') AS dateFormatted FROM walentynki WHERE ID=".$vID.";");
    if ($results->num_rows <= 0) {
        $db->close();
        header("Location: list.php");
    }
    $row = $results->fetch_assoc();
?>

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
    <script src="js/envelope-animation.js"></script>
    
</head>
<body class="preload">
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
        <div class="valentine-main-container">
            <div class="envelope-container"> 
                <div class="envelope-triangle triangle-left"></div>
                <div class="envelope-triangle triangle-right"></div>
                <div class="envelope-triangle triangle-bottom"></div>
                <div class="envelope-triangle triangle-top"></div>
                <div class="letter letter-text">
                    <p class="vReceiver"><?php echo $row['firstName']." ".$row['lastName']; ?></p>
                    <p class="vDate"><?php echo $row['dateFormatted']; ?></p>
                    <p class="vTitle"><?php echo $row['title']; ?></p>
                    <p class="vContent"><?php echo $row['message']; ?></p>
                </div>
                    <?php
                        $results = $db->query("SELECT 1 FROM walentynki WHERE ID=".$vID." AND pixelartIncluded=1;");
                        if ($results->num_rows > 0) {
                            echo "<div class='letter letter-pixelart'>";
                            echo "<p>Pixelart od Twojego adoratora</p>";
                            echo "<div class='pixelart-grid pixelart-show'>";
                            $results = $db->query("SELECT pixelColor FROM pixels WHERE valentineID=".$vID.";");
                            while ($row = $results->fetch_assoc()) {
                                ?>
                                    <div class="tile no-border" style="background-color: #<?php echo $row['pixelColor']; ?>;"></div>
                                    <?php
                            }
                            echo "</div>";
                            echo "</div>";
                        }
                    ?>
                <?php
                $results = $db->query("SELECT 1 FROM walentynki WHERE ID=".$vID." AND fileIncluded=1;");
                if ($results->num_rows > 0) {
                    echo "<div class='letter letter-pixelart'>";
                    echo "<p>Obraz od adoratora</p>";
                    $regexToSearch = "u".$vID."_*.*";
                    chdir("user-images");
                    $fileName = glob($regexToSearch);
                    echo "<img id='valentine-image' src='user-images/".$fileName[0]."'>";
                    echo "</div>";
                }
                $db->close();
                ?>
                <button type="button" class="envelope-seal">
                    <img src="img/zlota-logo.png" class="seal-logo">
                </button>
            </div>
        </div>
    </div>
</body>