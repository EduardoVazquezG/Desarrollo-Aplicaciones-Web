<?php
function connectTo2DB() : mysqli {
    $db = mysqli_connect("localhost","root","","bienesraices3e", 3306);
    if($db){
        echo "Conectado";
    } else {
        echo "No conectado";
    }
    return $db;
}
?>