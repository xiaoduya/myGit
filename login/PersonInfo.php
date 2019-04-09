<?php

    if (!empty($_SESSION['user_name'])){
         include './function/db.php';

        $sql1 = "select * from mr_user where username= '".$_SESSION['user_name']."'";

        $result = $pdo->query($sql1);

        $arr = $result ->fetch(PDO::FETCH_ASSOC);

    }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=description content="weibo">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>个人信息修改</title>
    <link rel="stylesheet" href="./public/css/person.css">
    <link rel="stylesheet" type="text/css" href="/public/css/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/font/demo.css">
    <link rel="stylesheet" type="text/css" href="/public/css/font/iconfont.css">
    <script src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
    <script src="/public/css/font/iconfont.js"></script>
    <script src="https://open.web.meitu.com/sources/xiuxiu.js"></script>
    <script src="/public/js/avatar.js"></script>
</head>
<body>
    <div class="wrapper">
        <!-- 用户信息区域 -->
    <?php include './common/slide.php'; ?>
    <div class="headerTop">
            <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">个人主页</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">修改密码</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">修改图像</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <!--修改个人信息界面-->
    <div role="tabpanel" class="tab-pane active" id="profile"> <div class="person">
            <h1>个人信息修改</h1>
             <form action="" method="get" accept-charset="utf-8">
                <ol>
                    <li>
                         <label for="PersonName">
                             用户名:<input type="text" name="PersonName" class="form-control" id="exampleInputEmail1" value="<?php echo $arr['username'];?>">
                        </label>
                    </li>
                    <li>
                        <label for="sex">
                            <input type="radio" name="PersonSex" data-sex="1" value ="1">男<br>
                            <input type="radio" name="PersonSex" data-sex="0" value ="0">女
                        </label>
                    </li>

                    <li>
                        <label for="QQ">QQ : &nbsp; &nbsp; &nbsp;</label>
                        <input type="text" class="form-control" name="qq" value="<?php echo $arr['qq'];?>">
                    </li>
                      <li>
                        <label for="email">邮箱:</label>
                        <input type="email" class="form-control" name="PersonEmail" value="<?php echo $arr['email'];?>">
                    </li>
                    <input type="hidden" name="PersonId" value="<?php echo $arr['id']; ?>">
                </ol>
                    <input type="button" id="updatePerson" value="确认修改">
              </form>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
        <!-- 修改密码界面 -->
        <form method="" action="">
             <h2>修改密码界面</h2>
               <label>
                  初始密码 : <input type="password"  class="form-control oldPassword" name="password"><br/>
             </label><br/>

             <label>
                确认密码 : <input type="password"  class="form-control equally">
            </label><br/>

             <label>
                 新密码 :<input type="password"  class="form-control newPassword" name="newPassword">
              </label>
            <!--hidden-->
           <input type="hidden" name="id" value="<?php echo $arr['id']; ?>">
          <button type="button" id="submitPassword">提交</button>
        </form>

    </div>
    <div role="tabpanel" class="tab-pane clearfix" id="settings">
        <div id="altContent">
             <h1>美图秀秀</h1>
        </div>
    </div>
  </div>
  </div>
  <!-- Nav tabs -->

</div>

    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/updateInfo.js"></script>
</body>
</html>
