<?php
/**
 * @Author: name
 * @Date:   2019-04-03 08:31:51
 * @Last Modified by:   name
 * @Last Modified time: 2019-04-08 10:51:25
 */
include '../function/db.php';

$postId = $_POST['postId'];

$sql = "select * from mr_comment where post_id = '{$postId}' order by id desc";

$arr = $pdo ->query($sql);

$res = $arr ->fetchAll(PDO::FETCH_ASSOC);

$num = count($res);


class Data {
    var $num;
    var $datas;
}

$data = new Data();

$data->num = $num;

$data->datas = $res;

print_r(json_encode($data));