<?php
    require_once (dirname(__FILE__)."/config/DSN.php");

    class BaseModel {

        //DBとの接続処理
        public static function connectDb(){
            
            //データベース接続(PDO)
            try{
                $db = new PDO(DSN, DB_USER, DB_PASSWORD);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $db;
            } catch (PDOException $e){
                print '接続できません'.$e->getMessage();
            }
        }

        public function getAllList(){

        }

        public function deleteId(){

        }

        public function createTodoList(){
            
        }
        
    }