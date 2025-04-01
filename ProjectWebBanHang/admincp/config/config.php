<?php
    $conn = new mysqli('localhost','root','huy123','webbanhang');
    if($conn -> connect_errno){
        echo " Ket noi that bai ";
        exit();
    }
    
?>