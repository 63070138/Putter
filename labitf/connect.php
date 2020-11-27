<?php
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'putterlnwza.mysql.database.azure.com', 'it63070138@putterlnwza', 'FXFlxm58', 'testitf', 3306);
    if(mysqli_connect_errno($conn)){
        echo "connect fail".mysqli_connect_error();
    }

?>
