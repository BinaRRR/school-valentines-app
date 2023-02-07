<?php
    mysqli_report(MYSQLI_REPORT_OFF);
    $db = @mysqli_connect('#############', '#########', '##################', '###############');
    if ($db == null) {
        echo "CONNECTION ERROR. ".mysqli_connect_error();
        return;
    }
?>   
   