<?php
    include '../function/db.php';
/**
 * @Author: name
 * @Date:   2019-04-02 20:13:33
 * @Last Modified by:   name
 * @Last Modified time: 2019-04-08 10:51:19
 */
//评论者提交的内容
$comment = $_POST['val'];

// 被评论者 提交 的id

$postId  = $_POST['postId'];

// 评论者提交的 头像
$avatar  = $_POST['avatar'];

//评论者

$reviewer = $_POST['reviewer'];

//评论者id

$userId = $_POST['userId'];


$sql = "insert into mr_comment (post_id,user_id,comment,reviewer,avatar) values ('{$postId}','{$userId}','{$comment}','{$reviewer}','{$avatar}')";
$arr = $pdo ->query($sql);
if ($arr) {
   $sql1 = "select * from mr_comment where post_id = '{$postId}' order by id desc";
   $arr1 = $pdo ->query($sql1);
   $res1 = $arr1 ->fetchAll(PDO::FETCH_ASSOC);
   $num = count($res1);
   class Data {
        var $num;
        var $datas;
   }

   $data = new Data();
   $data ->num = $num;
   $data ->datas = $res1;
   print_r(json_encode($data));
}