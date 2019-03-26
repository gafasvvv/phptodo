<?php

    require_once 'BaseController.php';
    require_once 'TodoModel.php';

    class TodoController extends BaseController {

        //一覧表示
        public function list(){
            $getAllList = new TodoModel('task');
            $getAllList = $getAllList->getAllList();
            return $getAllList;
        }

        //新規作成
        public function create(){
            $createTodoList = new TodoModel('task');
            $createTodoList = $createTodoList->createTodoList();
        }

        //削除
        public function delete(){
            $deleteId = new TodoModel('task');
            $deleteId = $deleteId->deleteId();
        }
    }