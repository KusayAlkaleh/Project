<?php

$kullanci = 'b211210566@sakarya.edu.tr';
$sifre = 'b211210566';

if(isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username == $kullanci && $password == $sifre){
        echo 'Hoşgeldiniz Qusay ALKLAEH.';
    } 
    else {
        echo 'HATA, Kullancı adı veya şifre hatalı.';
    }
}

?>