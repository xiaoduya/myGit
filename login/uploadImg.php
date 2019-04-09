<?php
/**
 * @Author: name
 * @Date:   2019-04-04 07:32:55
 * @Last Modified by:   name
 * @Last Modified time: 2019-04-05 22:21:22
 */
include '/function/db.php';

//图片 pictures
$file = $_FILES['classIcon'];

//取到图片属性 做文件上传
$fileName = $file['name'];



    //临时文件
    $temp = $file['tmp_name'];
    //随机名字
    $randName = getRandName();

    $ext = pathinfo($fileName,PATHINFO_EXTENSION); // 拿到文件名后缀

    echo $ext;
    $newName = $randName.'.'.$ext;

    $path = 'public/image/post/'.$newName;
    move_uploaded_file($temp, $path);


function getRandName () {
        $str = date('YmdHis');

       for ($i =0; $i < 6; $i++) {
            switch (mt_rand(0,2)) {
                case '0' :
                 $str .= chr(mt_rand(49,57));
                break;

                case '1' :
                 $str .= chr(mt_rand(65,90));
                break;

                case '2' :
                 $str .= chr(mt_rand(97,122));
                 break;
            }

         }

        return $str;
}








//上传的文件
// $path

//说说 content
$text  = $_POST['classDescribe'];
//发表者的名字 username
$userName = $_POST['className'];

//发表者的id
$userId = $_POST['classId'];

$sql = "insert into mr_post (content,username,pictures,user_id) values ('".$text."','".$userName."','".$path."','".$userId."')";

$res = $pdo ->query($sql);

print_r($res);