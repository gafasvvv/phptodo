/* データベース作成*/
CREATE DATABASE todo CHARACTER SET utf8mb4;

/* taskテーブル作成*/
CREATE TABLE task (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(30) NOT NULL,
    content TEXT NOT NULL
);

/* taskテーブルにデータ挿入*/
INSERT INTO task (name, content)
VALUES ('PHP勉強', '3/26まで');
INSERT INTO task (name, content)
VALUES ('Ruby勉強', '3/27まで');