<?php

require_once 'connection.php';

try {
    $pdo = new PDO($attr , $user , $pass , $opts );
} catch ( PDOException $e ){
    return new PDOException( $e->getMessage() );
}

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $q = $pdo->prepare("INSERT INTO users (NAME, EMAIL, PASSWORD ) VALUES (?, ?, ?)");
    $q->execute([ $name , $email , $password ]);


    echo "welcome to our web page";


?>