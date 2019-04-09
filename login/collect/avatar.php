<?php
header("Content-Type: text/html;charset=utf-8");

/**
 * @Author: name
 * @Date:   2019-03-18 20:17:11
 * @Last Modified by:   name
 * @Last Modified time: 2019-03-28 11:59:42
 */
include './../function/db.php';

 $avatar = $_POST['name'];

$sql1 = "select * from mr_user where username = '".$avatar."'";

$result = $pdo->query($sql1);

$arr = $result ->fetch(PDO::FETCH_ASSOC);

if ($arr){
    echo $arr["avatar"];
}else{
    echo "null";
}

// print_r($arr);

