<?php
header("Content-Type: text/html;charset=utf-8");
/**
 * @Author: name
 * @Date:   2019-03-18 15:59:41
 * @Last Modified by:   name
 * @Last Modified time: 2019-03-31 16:39:36
 */

include './../function/db.php';

if (!session_id()) session_start();
 $name  =   $_POST['newName'];

 $newWord = $_POST['newWord'];


$sql1 = "select * from mr_user where username = '".$name."'";

$result = $pdo->query($sql1);

$arr = $result ->fetch(PDO::FETCH_ASSOC);
    // var_dump($arr);
    if ($arr){
        echo -1;
        return;
    } else{
        $sql ="insert into mr_user set username='".$name."',password = '".$newWord."'";
        $pdo->exec($sql);
        echo 1;
        $_SESSION['user_name'] = $name;
    }
