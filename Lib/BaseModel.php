<?php
    require_once "../config/DSN.php";

    class BaseModel {

        private $table;

        protected function setTable($table)
        {
            $this->table = $table;
        }

        //DBとの接続処理
        private function connectDb()
        {
            
            //データベース接続(PDO)
            try{
                $db = new PDO(DSN, DB_USER, DB_PASSWORD);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $db;
            } catch (PDOException $e){
                print '接続できません'.$e->getMessage();
            }
        }

        public function getAllList()
        {
            $db = $this->connectDb();
            $stt = $db->prepare("SELECT * FROM $this->table");
            $stt->execute();
            //PDO::FETCH_ASSOC　連想配列形式でデータ取得
            $stt = $stt->fetchAll(PDO::FETCH_ASSOC);
            return $stt;
        }

        public function createTodoList()
        {
            if(isset($_POST['name']) && isset($_POST['content'])){
                $db = $this->connectDb();
                $stt = $db->prepare("INSERT INTO $this->table(name, content)
                VALUES (:name, :content)");
                $stt->bindValue(':name', $_POST['name']);
                $stt->bindValue(':content', $_POST['content']);
                $stt->execute();
            }
        }

        public function deleteId()
        {
            if(isset($_POST['delete'])){
                $db = $this->connectDb();
                $stt = $db->prepare("DELETE FROM $this->table WHERE id = :id");
                $stt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
                $stt->execute();
            }
        }
        
    }