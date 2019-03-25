<?php
    require_once 'Model.php';

    class Controller {

        //一覧表示
        public function index(){
            $db = Model::getDb();
            $stt = $db->prepare('SELECT * FROM task');
            $stt->execute();
            //PDO::FETCH_ASSOC　連想配列形式でデータ取得
            $stt->setFetchMode(PDO::FETCH_ASSOC);
            return $stt;
        }

        //新規作成
        public function create(){
            $db = Model::getDb();
            $stt = $db->prepare('INSERT INTO task(name, content)
            VALUES (:name, :content)');
            $stt->bindValue(':name', $_POST['name']);
            $stt->bindValue(':content', $_POST['content']);
            $stt->execute();  
        }

        //削除
        public function delete(){
            if(isset($_POST['delete'])){
                $db = Model::getDb();
                $stt = $db->prepare('DELETE FROM task WHERE id = :id');
                $stt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
                $stt->execute();
            }
        }
    }