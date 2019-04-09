
<?php
/**
 * @Author: name
 * @Date:   2019-03-15 13:24:53
 * @Last Modified by:   name
 * @Last Modified time: 2019-04-05 19:07:52
 */
    include './../function/db.php';

    // header('Content-Type: application/x-www-form-urlencoded;charset=utf8');
    header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE');
    header('Access-Control-Allow-Credentials: true'); // 设置是否允许发送 cookies
    header('Access-Control-Allow-Headers: Content-Type,Content-Length,Accept-Encoding,X-Requested-with, Origin');


    if (!session_id()) session_start(); // 如果有session 那么将它覆盖 重新赋值

   $name =  $_POST['name'];
   $password =  $_POST['password'];


   $sql = "select * from mr_user where username= '".$name."' and password='".$password."'";
   $result = $pdo->query($sql);

  $arr = $result ->fetch(PDO::FETCH_ASSOC);

  if ($arr){

     echo "true";
     $_SESSION['user_name'] = $name;
     $_SESSION['id'] = $arr['id'];
  }else{
    echo "false";
  }