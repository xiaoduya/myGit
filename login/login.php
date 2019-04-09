<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Lowin</title>
    <style type="text/css" media="screen">
        .show{
            display:none;
        }

    </style>
    <link rel="stylesheet" href="./public/css/auth.css">
    <link rel="stylesheet" href="./public/css/animate.css">
</head>

<body>
    <div class="lowin">
        <div class="lowin-brand">
            <img src="./public/image/kodinger.jpg" alt="logo" id="img">
        </div>
        <div class="lowin-wrapper">
            <div class="lowin-box lowin-register">
                <div class="lowin-box-inner">
                    <form action="http://127.0.0.1/login/collect/iflogin.php" method="post">
                        <p>L欢迎来到微博</p>
                        <div class="lowin-group animated">
                            <label>用户名 <span class="shake animated show">请输入用户名</span></label>
                            <input type="text" name="name" autocomplete="name" class="lowin-input">
                        </div>

                        <div class="lowin-group">
                            <label>密码</label>
                            <input type="password" name="password" autocomplete="current-password" class="lowin-input">
                        </div>
                        <input type="button"  class="lowin-btn" value="提交">
                        <a href="./regiect.html">注册</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./public/js/jquery.min.js"></script>
    <script>
        let $email = $("input[name='name'")
        let $password = $("input[name='password']")
        console.log($email)
        let $lowinGroup = $(".lowin-group")
        let $passwordUp = $(".password-group")
        let lowinBtn    = $(".lowin-btn")
        let flag = false

            $email.blur(function(){
               $.post('./collect/avatar.php'
                ,{
                    name : $email.val()
               }).then(function(res){
                console.log(res)
                    if (res == 'null'){
                        $('#img').attr('src','public/image/kodinger.jpg')
                        return false
                    }else{
                         $('#img').fadeOut(300,function(){
                              $('#img').fadeIn(500).attr('src','/' + res)
                         })
                    }


                  // $("#img").
               })
            })

              lowinBtn.on('click',function(){
                console.log($email.val())
                $value = $email
                $.ajax({
                    type : 'POST',
                    url  : './collect/iflogin.php',
                    data : {
                        name : $email.val(),
                        password : $password.val()
                    },
                    success : function(res){
                        console.log(res)
                        res = JSON.parse(res)
                        if (!res){
                              $('.show').text('用户名或密码错误').fadeIn(500)
                            $lowinGroup.addClass('shake')
                            setTimeout(function(){
                                 $lowinGroup.removeClass('shake')
                          },1000)
                        }else{

                            window.location.href = "../index.php"

                        }

                   }
               })
            })
    </script>
</body>

</html>