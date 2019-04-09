<?php
/**
 * @Author: name
 * @Date:   2019-03-28 10:30:13
 * @Last Modified by:   name
 * @Last Modified time: 2019-04-03 11:28:33
 */
header("Content-Type: text/html; charset=utf-8;");

if(!session_id()) session_start();

$username = $_SESSION['user_name'];
require './function/db.php';

$DuChongHao = $_FILES['upload_file'];

$fileName = $DuChongHao['name'];


$date = date('Y-m-d H:i:s');

$date1 = str_replace('-','',$date);

$date2 = str_replace(':','',$date1);

$date3 = str_replace(' ','',$date2);
$rand  = rand(1,1000);

$newFileName = $date3.$rand.$fileName;


if ($fileName != "") {
    $direction ="public/image/avatar/";


     /* if (!is_dir($direction)){

           mkdir($direction);
     }*/

    // echo  $direction;
     //echo  $newFileName;
     $newPath = $direction.$newFileName;
     // print_r($DuChongHao['tmp_name']);
     /*print_r($newPath);

     exit();*/
     $bool = move_uploaded_file($DuChongHao["tmp_name"],$newPath);

     echo $bool;
     if ($bool) {
        $updateImage = $direction.$newFileName;
        $sql = "update mr_user set avatar = '".$updateImage."' where username = '".$username."'";
        $result = $pdo ->exec($sql);
        if ($result == "1"){
             echo 1;
        }else {
            echo -1;
        }
     } else {
        echo -1;
     }
}




