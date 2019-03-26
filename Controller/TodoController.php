<?php

require_once '../Lib/BaseController.php';
require_once '../Model/TodoModel.php';

    class TodoController extends BaseController {
        private $todoModel = false;

        public function __construct()
        {
            parent::__construct();
            $this->todoModel = new TodoModel();
        }
        //一覧表示
        public function list(){
            $getAllList = $this->todoModel->getAllList();

            return $getAllList;
        }

        //新規作成
        public function create(){

            $createTodoList = $this->todoModel->createTodoList();
        }

        //削除
        public function delete(){

            $deleteId = $this->todoModel->deleteId();
        }
    }