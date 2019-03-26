<?php

    require_once '../Lib/BaseController.php';
    require_once '../Model/TodoModel.php';

    class TodoController extends BaseController {

        //プロパティの宣言
        private $todoModel = false;

        public function __construct()
        {
            //スーパークラスのコンストラクタの呼び出し
            parent::__construct();
            // 新規プロパティの追加
            $this->todoModel = new TodoModel;
        }

        //一覧表示
        public function list()
        {
            $getAllList = new TodoModel('task');
            $getAllList = $getAllList->getAllList();
            return $getAllList;
        }

        //新規作成
        public function create()
        {
            $createTodoList = new TodoModel('task');
            $createTodoList = $createTodoList->createTodoList();
        }

        //削除
        public function delete()
        {
            $deleteId = new TodoModel('task');
            $deleteId = $deleteId->deleteId();
        }

    }