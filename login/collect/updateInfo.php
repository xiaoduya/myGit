<?php
    header("Content-Type: text/html;charset=utf-8;");
/**
 * @Author: name
 * @Date:   2019-03-20 08:00:36
 * @Last Modified by:   name
 * @Last Modified time: 2019-03-28 15:08:00
 */
    include './../function/db.php';
    //用户需要更新的信息
//用户名修改
$newUserName = $_POST['PersonName'];
//性别的修改
$newSex  = $_POST['PersonSex'];

//QQ的修改
$newQQ  = $_POST['qq'];

$newEmail = $_POST['PersonEmail'];

$PersonId = $_POST['PersonId'];

//连接数据库做修改

$updateInfo = "update mr_user set qq='".$newQQ."',email = '".$newEmail."',sex = '".$newSex."',username = '{$newUserName}' where id = '{$PersonId}'";

$result = $pdo ->exec($updateInfo);

if ($result){
    echo "1";
}else {
    echo "-1";
}


// $sql = "select * from mr_user";

// $result = $pdo ->query($sql);

// $arr = $result -> fetchAll();