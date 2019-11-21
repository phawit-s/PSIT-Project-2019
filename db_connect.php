<?php
    $db_connect=new mysqli('localhost', 'id11387127_projectpsit2019', 'Imnayeon1995', 'id11387127_psit');
    if($db_connect->connect_errno==true)
        echo "connection fail";
    else
        echo "Success";
    $db_connect->close();
?>