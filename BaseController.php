<?php

    require_once 'Helper.php';

    //抽象クラス
    abstract class BaseController {

        //一覧表示（抽象メソッド）
        protected abstract function list();

        //新規作成（抽象メソッド）
        protected abstract function create();

        //削除（抽象メソッド）
        protected abstract function delete();
    }