<?php

    class Helper {

        //HTMLエスケープ処理をしないとクロスサイトスクリプティング(XSS)と呼ばれる脆弱性の原因になる
        public static function e(string $str, string $charset = 'UTF-8'): string {
            return htmlspecialchars($str, ENT_QUOTES | ENT_HTML5, $charset);
        }
    }