<?php
/**
 * @Author: name
 * @Date:   2019-03-20 11:37:34
 * @Last Modified by:   name
 * @Last Modified time: 2019-03-20 11:57:05
 */
//pdo 数据库连接代码
$dsn = ("mysql:host=localhost;dbname=weibo");

$pdo = new PDO($dsn,'root','root');