<?php
    session_start();
    $dsn='mysql:dbname=reviewsite;charset=utf8';
    $user='root';
    $pass='yukino1371';
    $dbh = new PDO($dsn,$user,$pass);

    if(isset($_POST['users'])) {
        $id = $_POST['user_id'];
        $name = $_POST['user_name'];
        $mail = $_POST['user_email'];
        password_hash($_POST['user_password'], PASSWORD_DEFAULT);

        if(isset($_POST['users'])) {
            $id = $_POST['user_id'];
            $name = $_POST['user_name'];
            $mail = $_POST['user_email'];
            password_hash($_POST['user_password'], PASSWORD_DEFAULT);

            if(isset($_POST['users'])) {
                $id = $_POST['user_id'];
                $name = $_POST['user_name'];
                $mail = $_POST['user_email'];
                password_hash($_POST['user_password'], PASSWORD_DEFAULT);
            }
        }
    }
