<?php
    $file = $_POST['userImage']['name'];
    $location = "user-images/".$file;
    if (move_uploaded_file($_POST['userImage']['tmp_name'], $location)) {
        echo "Success";
    } else {
        echo "Failed";
    }

?>