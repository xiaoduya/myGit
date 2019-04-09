<?php
header('Content-Type: text/html;charset=utf-8');
/**
 * @Author: name
 * @Date:   2019-04-01 11:05:21
 * @Last Modified by:   name
 * @Last Modified time: 2019-04-05 22:25:17
 */
include './../function/db.php';

$sql = "select * from mr_post order by id desc";

$arr = $pdo ->query($sql);

$s = $arr ->fetchAll();
$s = json_encode($s);
print_r($s);