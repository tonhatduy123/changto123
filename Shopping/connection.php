<?php
    $conn = pg_connect("postgres://qmgevydxsfgltq:c6c6fc5ac66b45af44dd246f77b6cf277a15588564850d63107995876970651d@ec2-3-229-166-245.compute-1.amazonaws.com:5432/da81ls5l9q534c");
    if(!$conn){
        die("Can not connect database");
    } 
?>