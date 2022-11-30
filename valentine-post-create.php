<?php

$pixelColors = json_decode($_POST['pixelColors']);
$vReceiver = $_POST['receiver'];
$vGrade = $_POST['grade'];
$vTitle = $_POST['title'];
$vContent = $_POST['content'];
$vReceiver = explode(' ', $vReceiver);

include_once('connection.php');

$query = $db->prepare("INSERT INTO walentynki (title, firstName, lastName, class, message, creationDate) VALUES(?, ?, ?, ?, ?, CURDATE());");
$query->bind_param('sssss', $vTitle, $vReceiver[0], $vReceiver[1], $vGrade, $vContent);
$query->execute();

$insertedRecordID = $db->insert_id;

unset($query);

$query = $db->prepare("INSERT INTO pixels VALUES(null, ?, ?);");

foreach ($pixelColors as $tile) {
    $query->bind_param('is', $insertedRecordID, $tile);
    $query->execute();
}
$db->close();

?>