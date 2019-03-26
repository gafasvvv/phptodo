<?php
    require_once '../Lib/Helper.php';

    //抽象クラス
    abstract class BaseController {

        private $helper = null;

        public function __construct()
        {
            $this->helper = new Helper();
        }

        public function helper()
        {
            return $this->helper;
        }

        //一覧表示（抽象メソッド）
        protected abstract function list();

        //新規作成（抽象メソッド）
        protected abstract function create();

        //削除（抽象メソッド）
        protected abstract function delete();
        
    }