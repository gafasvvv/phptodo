<?php

    class Helper {

        public $str;

        //HTMLエスケープ処理をしないとクロスサイトスクリプティング(XSS)と呼ばれる脆弱性の原因になる
        public function e($str, string $charset = 'UTF-8'): string 
        {
            return htmlspecialchars($str, ENT_QUOTES | ENT_HTML5, $charset);
        }
        
        /**
         * エスケープして表示
         * @param $str
         */
        public function view($str)
        {
            echo $this->e($str);
        }
    }