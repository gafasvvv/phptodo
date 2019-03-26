<?php

    /*
    * DBの接続情報を設定
    */

    //設定内容を変数に格納
    $host = 'localhost';
    $dbName = 'todo';
    $charset = 'utf8';
    $user = 'root';
    $password = 'password';
    $unix_socket = 'unix_socket=/tmp/mysql.sock';

    //定数を設定
    define("DSN","mysql:host=$host;dbname=$dbName;charset=$charset;$unix_socket");
    define("DB_USER",$user);
    define("DB_PASSWORD",$password);

?>