<?php
/**
 * @Author: name
 * @Date:   2019-04-08 10:07:59
 * @Last Modified by:   name
 * @Last Modified time: 2019-04-08 11:03:18
 */
include '../function/db.php';

$num =  $_POST['num'];

$pId =  $_POST['pId'];

$sql = "update mr_post set comment_num = '".$num."' where id = '".$pId."';";

$arr = $pdo ->exec($sql);

if ($arr){
    $selectNum = "select * from mr_comment where post_id = '{$pId }';";

    $resultArr = $pdo ->query($selectNum);

    $res = $resultArr ->fetchAll(PDO::FETCH_ASSOC);

    $resNum = count($res);

    echo $resNum;
}