<?php
if (isset($_POST['pixelColors'])) {
    $pixelColors = json_decode($_POST['pixelColors']);
    $isPixelartIncluded = true;
} else {
    $isPixelartIncluded = false;
}
$vFirstName = $_POST['firstName'];
$vLastName = $_POST['lastName'];
$vGrade = $_POST['grade'];
$vTitle = $_POST['title'];
$vContent = $_POST['content'];

$isFileIncluded = isset($_FILES['userImage']);

include_once('connection.php');

$query = $db->prepare("INSERT INTO walentynki (title, firstName, lastName, class, message, creationDate, fileIncluded, pixelartIncluded) VALUES(?, ?, ?, ?, ?, NOW(), ?, ?);");
$query->bind_param('sssssii', $vTitle, $vFirstName, $vLastName, $vGrade, $vContent, $isFileIncluded, $isPixelartIncluded);
$query->execute();

$insertedRecordID = $db->insert_id;

unset($query);

if ($isPixelartIncluded) {
    $query = $db->prepare("INSERT INTO pixels VALUES(null, ?, ?);");
    
    foreach ($pixelColors as $tile) {
        $query->bind_param('is', $insertedRecordID, $tile);
        $query->execute();
    }
    $db->close();
}

if ($isFileIncluded) {
    $file = $_FILES['userImage']['name'];
    $location = "user-images/u".$insertedRecordID.'_'.$file;
    if (move_uploaded_file($_FILES['userImage']['tmp_name'], $location)) {
        echo "Success";
    } else {
        echo "Failed";
    }
    return;
}
echo "Success";
?> 