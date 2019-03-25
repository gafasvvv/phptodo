<?php

    class Model {

        public static function getDb(){
            //データベースに接続
            $dsn = 'mysql:host=localhost;dbname=todo;charset=utf8;unix_socket=/tmp/mysql.sock';
            $user = 'root';
            $password = 'password';

            //データベース接続(PDO)
            try{
                $db = new PDO($dsn, $user, $password);
                return $db;
            } catch (PDOException $e){
                print '接続できません'.$e->getMessage();
            }
        }

    }