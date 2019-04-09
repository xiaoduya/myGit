<?php
    require './../function/db.php';
/**
 * @Author: name
 * @Date:   2019-03-26 20:03:12
 * @Last Modified by:   name
 * @Last Modified time: 2019-03-28 09:29:13
 */

/*$oldPassword = $_POST['password'];

$newPassword = $_POST['newPassword'];


$sql1 = "update mr_user set password = {$newPassword} where id = 42 ;"*/

if (!session_id()) session_start();

$userPassword = $_POST['userPassword'];

$username     = $_SESSION['user_name'];

$oldPassword  = $_POST['oldPassword'];

$id =  $_POST['id'];

echo $userPassword.'---'.$username.'---'.$id.'---'.$oldPassword;
$sql = "select * from mr_user where username = '".$username."' and password = '".$oldPassword."'";
$ReturnResult = $pdo->query($sql);

$arr = $ReturnResult ->fetch(PDO::FETCH_ASSOC);

    if ($arr) {
        $sql1 = "update mr_user set password = '".$userPassword."' where id = '".$id."' ;";

        $result = $pdo ->exec($sql1);

        echo $result;
    } else {
        echo -1;
    }


