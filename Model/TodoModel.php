<?php
    require_once '../Lib/BaseModel.php';

    class TodoModel extends BaseModel {

        private $table = "task";

        public function __construct()
        {
            $this->setTable($this->table);
        }
    }