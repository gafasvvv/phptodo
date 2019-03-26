<?php

    class Helper {

        public $str;

        public function __construct(string $str){
            $this->str = $str;
        }

        //HTMLエスケープ処理をしないとクロスサイトスクリプティング(XSS)と呼ばれる脆弱性の原因になる
        public function e(string $str, string $charset = 'UTF-8'): string {
            return htmlspecialchars($str, ENT_QUOTES | ENT_HTML5, $charset);
        } 
    }