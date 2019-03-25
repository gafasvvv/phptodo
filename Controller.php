<?php
    require_once 'Model.php';

    class Controller {

        //一覧表示
        public function index(){
            $db = Model::getDb();
            $stt = $db->prepare('SELECT * FROM task');
            $stt->execute();
            $stt->setFetchMode(PDO::FETCH_ASSOC);
            return $stt;
        }

        //新規作成
        public function create(){
            $db = Model::getDb();
            $stt = $db->prepare('INSERT INTO task(name, content)
            VALUES (:name, :content)');
            $stt->bindValue('name', $_POST['name']);
            $stt->bindValue('content', $_POST['content']);
            $stt->execute();  
        }

        //削除
        public function delete(){

        }
    }