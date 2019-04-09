<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>you know?</title>
    <link rel="stylesheet" type="text/css" href="/public/css/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/css/bootstrap-theme.min.css">
    <!--slider样式-->
    <link rel="stylesheet" type="text/css" href="/public/css/person.css">
    <!--字体图标css-->
    <link rel="stylesheet" type="text/css" href="/public/css/font/iconfont.css">
    <link rel="stylesheet" type="text/css" href="/public/css/release.css">
    <script src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
    <script src="/public/js/write.js"></script>
</head>
<body>
    <div class="wrapper">
        <!--顶部栏-->
        <?php
             include 'common/slide.php';
         ?>
         <!--发布-->
         <div class="Release">
            <form method=""></form>
                <div class="Rcoontent">
                      <h3>有什么新鲜事要说</h3>

                   <textarea name="val" id="value" rows="6"></textarea>
                    <div>
                         <a href="javascript:;" class="haha">
                            <input type="file" name="xixi" class="file" id="file">
                            <span class="font iconfont img" id="click">&#xe61b;<span class="adad">图片</span></span>
                         </a>

                         <!-- session的名字 -->
                         <input type="hidden" name="userName" id="hiddenName" value="<?php
                         if (!session_id()) session_start();
                               echo $_SESSION['user_name'];
                         ?>">
                         <input type="hidden" name="userId" id="hiddenId" value="<?php

                               echo $_SESSION['id'];
                         ?>">
                    </div>
                    <button id="btn">提交了</button>
                </div>

         </div>
    </div>
</body>
</html>