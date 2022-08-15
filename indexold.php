<?php

//This is just a sample php connection to the DB and pulling of data to ensure all works fine.

    $conn = new mysqli("db", "Fortuneod", "seyejames@123", "php_docker");

    $s="SELECT * FROM `expenses`";
    $r=$conn->query($s);
    while($v=$r->fetch_object())
    {
        echo "<p>". $v->comments ."</p>";
    }

    echo "<hr/>";

    //The part below enables to see Information about PHP

    phpinfo();

?>