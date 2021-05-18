<?php

require_once './User.php';
require_once './Products.php';

try {
    $newuser = new User('pippo', 'password', 'via fasulla', "123456789101112", '11-2018', 256);
} catch (Exception $e) {
    echo "Errore: " . $e->getMessage();
}

var_dump($newuser);
?>