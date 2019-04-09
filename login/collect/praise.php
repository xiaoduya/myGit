<?php
/**
 * @Author: name
 * @Date:   2019-04-01 19:41:30
 * @Last Modified by:   name
 * @Last Modified time: 2019-04-07 19:56:57
 */
include './../function/db.php';

$praise = $_POST['praise'];

$hideId = $_POST['hideId'];

$updateId = $_POST['updateId'];

$sql = "update mr_post set praise_num = {$praise} where id = {$updateId}";

$res = $pdo ->exec($sql);

if ($res) {
    $sql1= "select * from mr_post where id = '".$hideId."'";

    // echo $sql1;
    $res1 = $pdo ->query($sql1);
    $data = $res1 ->fetchAll();

   print_r(json_encode($data));
}