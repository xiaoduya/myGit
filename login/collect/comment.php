<?php
    if (!session_id()) session_start();

    if (empty($_SESSION['user_name'])){
        header('Location: /');
    }

    $id =  $_GET['num'];

    $sessIonName = $_SESSION['user_name'];

    include '../function/db.php';

    $sql = "select * from  mr_post where id = {$id}";

    $sql1 = "select * from mr_user where username = '".$sessIonName."' ";

    $arr = $pdo ->query($sql);

    $res = $arr ->fetchAll();

    $data = $pdo ->query($sql1);

    $result = $data ->fetchAll();

   $userId = $res[0]['user_id'];

    $selectUserId = "select * from mr_user where id = '".$userId."' ";

    $userImg = $pdo ->query($selectUserId);

    $resImg = $userImg ->fetchAll();
   // print_r($result);
   /* foreach ($res as $value ){
        print_r($value);
    }*/
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="/public/css/index.css">
    <link rel="stylesheet" type="text/css" href="/public/css/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/font/demo.css">
    <link rel="stylesheet" type="text/css" href="/public/css/font/iconfont.css">
    <script src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
    <script src="/public/css/font/iconfont.js"></script>
    <script src="/public/js/comments.js"></script>
    <style type="text/css" media="screen">
        body {
            background-image:url('/public/image/bg.jpg');
        }
    </style>
</head>
<body>
    <div class="wrapper clearfix">
         <?php include '../common/slide.php'; ?>
        <!-- 评论区 -->
        <div class="userComments clearfix">
             <?php foreach ($resImg as $opp): ?>

            <div class="navTop">
                   <a href="" class="userImg"> <img src="/<?php echo $opp['avatar']; ?>" alt=""></a>
             <?php endforeach; ?>

              <?php  foreach ($res as $value): ?>

               <div class="userName">
                    <span><?php echo $value['username']; ?></span><br/>
               </div>
               <div class="userContent">
                    <span class="cContent"><?php echo $value['content']; ?></span>
               </div>
            </div>
            <div class="footerContent clearfix">
                <div class="commnetContent">
                     <img src="/<?php echo $value['pictures']; ?>" alt="">
                </div>
                <div class="commentHandel">

                    <span><em class="icon iconfont">&#xe638;<i class="spiderMan"><?php echo $value['comment_num']; ?></i></em></span>
                    <a href="javascript:;"><span><em class="icon iconfont">&#xe635;<?php echo $value['praise_num']; ?></em></a></span>
                    <a href="javascript:;"><span><em class="icon iconfont collect">&#xe60f;<?php echo $value['forward_num']; ?></em></span></a>
                </div>

            </div>
        </div>
    <?php endforeach; ?>

    <?php foreach ($result as $dataValue): ?>

        <div class="boxFooter">
            <div class="commentText">

                    <div class="textImg">
                        <img src="/<?php echo $dataValue['avatar']; ?>" alt="" />
                        <!-- 储存被评论者的id -->
                        <input type="hidden" name="postId" value="<?php echo $id;?>" id="postId">
                        <!-- 储存评论者id -->
                        <input type="hidden" name="commentId" value="<?php echo $dataValue['id']; ?>" id="commentId">
                        <!--评论者的头像-->
                        <input type="hidden" name="avatar" value="<?php echo $dataValue['avatar'];?>">
                        <input type="hidden" name="reviewer" value="<?php echo $sessIonName; ?>">
                    </div>
                    <div class="commenInputBox">
                        <input type="text" name="userMessage" class="commenInput">

                    </div>

                </div>
                <div class="fansContent">
                    <ul class="fansComments">

                    </ul>
                </div>
        </div>
    <?php endforeach; ?>

    </div>
</body>
</html>