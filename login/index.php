<?php
    if (!session_id()) session_start();
    if (empty($_SESSION['user_name'])){
       header("Location: /login.php");
    }

    include '/function/db.php';
    //查出小头像
    $selectImg = "select * from mr_user where id = '".$_SESSION['id']."'";

    $data = $pdo ->query($selectImg);
    $res = $data ->fetchAll();

    $avatar = $res[0]['avatar'];

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=description content="weibo">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>首页</title>
    <link rel="stylesheet" href="/public/css/index.css">
    <link rel="stylesheet" type="text/css" href="/public/css/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/font/iconfont.css">
    <script src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="./public/js/bootstrap.min.js"></script>
    <!--icon-->
    <script src="/public/css/font/iconfont.js"></script>
    <script src="http://open.web.meitu.com/sources/xiuxiu.js"></script>

    <script src="public/js/avatar.js"></script>

</head>
<body>
    <div class="wrapper">
        <?php include './common/slide.php'; ?>
        <div class="content clearfix">
             <div class="center">
                    <div class="bannerItem">
                        <ul class="bannerBox clearfix">
                          <li class="item1">
                             <img src="/public/image/5.jpg" alt="" />
                           </li>
                           <li class="item1">
                             <img src="/public/image/2.jpg" alt="" />
                           </li>
                           <li class="item1">
                             <img src="/public/image/3.jpg" alt="" />
                           </li>
                           <li class="item1">
                             <img src="/public/image/4.jpg" alt="" />
                           </li>
                           <li class="item1">
                             <img src="/public/image/5.jpg" alt="" />
                           </li>
                        </ul>

                            <span class="leftSpan btn">&lt;</span>
                            <span class="rightSpan btn">&gt;</span>

                    </div>
              </div>
        </div>
    <!--左侧固定导航-->
        <div class="fixedLeft">
           <ul class="leftSlider">
               <li><a href="https://www.jd.com">购物</a></li>
               <li><a href="https://ac.qq.com">动漫</a></li>
               <li><a href="http://book.dangdang.com">看书</a></li>
               <li><a href="https://music.163.com">音乐</a></li>
               <li><a href="http://www.zhsc.net">诗词</a></li>
               <li><a href="https://fzn.cc/tag/%E6%B7%B1%E5%BA%A6%E5%A5%BD%E6%96%87">好文</a></li>
               <li><a href="https://www.hiyd.com/">运动</a></li>
               <li><a href="https://www.meishichina.com/">美食</a></li>
               <li><a href="https://image.baidu.com/search/index?tn=baiduimage&ipn=r&ct=201326592&cl=2&lm=-1&st=-1&fm=result&fr=&sf=1&fmq=1553945121090_R&pv=&ic=0&nc=1&z=&hd=&latest=&copyright=&se=1&showtab=0&fb=0&width=&height=&face=0&istype=2&ie=utf-8&word=%E7%BE%8E%E6%99%AF">美景</a></li>
               <li><a href="http://www.cntour.cn/">旅游</a></li>
           </ul>
        </div>

     <div class="fiexdRight">
             <ul class="nav nav-tabs" role="tablist">
                 <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Java</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">PHP</a></li>
               <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">javascript</a></li>
            </ul>

  <!-- Tab panes -->
            <div class="tab-content">
                 <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="leftBook">
                          <img src="http://images.china-pub.com/ebook3500001-3505000/3502005/zcover.jpg" style="height:140px;" alt="">
                    </div>
                    <div class="rightText">
                        <p><strong>java</strong> 的逻辑编程</p>
                        <span>作者:James Gosling</span>
                        <p>
                          出版: 机械工业出版社
                        </p>
                    </div>

                    <div class="leftBook">
                          <img src="http://images.china-pub.com/ebook7285001-7290000/7289346/zcover.jpg" alt="">
                    </div>
                    <div class="rightText">
                        <p><strong>java</strong> 的逻辑编程</p>
                        <span>作者:马俊昌</span>
                        <p>
                          出版: 机械工业出版社
                        </p>
                    </div>


                 </div>
                 <div role="tabpanel" class="tab-pane" id="profile">
                    <div class="leftBook">
                          <img src="http://images.china-pub.com/ebook6890001-6895000/6891110/zcover.jpg" alt="">
                    </div>
                    <div class="rightText">
                        <p><strong>PHP</strong> 7内核剖析</p>
                        <span>作者:秦鹏</span>
                        <p>出版:人民邮电出版社</p>
                    </div>

                    <div class="leftBook">
                          <img src="http://images.china-pub.com/ebook8050001-8055000/8053407/zcover.jpg" alt="">
                    </div>
                    <div class="rightText">
                        <p><strong>PHP</strong>7从零基础到实战</p>
                        <span>作者:秦鹏</span>
                        <p>出版:人民邮电出版社</p>
                    </div>

                    <div class="leftBook">
                          <img src="http://images.china-pub.com/ebook3680001-3685000/3684422/zcover.jpg" alt="" style="height:130px;">
                    </div>
                    <div class="rightText">
                        <p>细说<strong>PHP</strong></p>
                        <span>作者:高洛峰</span>
                        <p>出版:电子工业出版社</p>
                    </div>
                 </div>
                 <div role="tabpanel" class="tab-pane" id="messages">
                    <div class="leftBook">
                          <img src="http://images.china-pub.com/ebook3970001-3975000/3971412/zcover.jpg" alt="">
                    </div>
                    <div class="rightText">
                        <p><strong>javascript</strong> 高级程序设计</p>
                        <span>作者:Nicholas C.Zakas</span>
                        <p>出版:人民邮电出版社</p>
                    </div>

                    <div class="leftBook">
                          <img src="http://images.china-pub.com/ebook195001-200000/199271/zcover.jpg" alt="">
                    </div>
                    <div class="rightText">
                        <p><strong>javascript</strong> 高级程序设计</p>
                        <span>作者:Nicholas C.Zakas</span>
                        <p>出版:人民邮电出版社</p>
                    </div>
                 </div>
            </div>
    </div>
        <!--内容区-->
        <div class="mt">
           <ul class="comments">

           </ul>
        </div>
    </div>
    <script id="template" type="text/html">
     {{each result}}
        <li class="clearfix">
                   <div class="commentLeft">
                       <img src="{{$value.pictures}}" alt="" />
                   </div>

                   <div class="commentRight">
                       <p>

                                  {{$value.content}}

                                  <div class="commentImg">
                                      <a href="">
                                      <span>
                                           <img src="{{$value.pictures}}" alt="" style="width:20px;height:20px;
                                           ">
                                      </span>
                                      <span>{{$value.username}}</span>
                                      </a>
                                      <input type="hidden" value="{{$value.id}}">
                                      <span id="time">3月30 16:01</span>
                                      <span class="icon iconfont"><a href="javascript:;" id="praise"  onclick="xixi(this,{{$value.id}})">&#xe635;</a></span>
                                      <span class="giveNumber">{{$value.praise_num}}</span>
                                      <span class="icon iconfont"><a href="/collect/comment.php?num={{$value.id}}">&#xe638;</a></span>
                                      <span class="commnetsNumber">{{$value.comment_num}}</span>
                                  </div>

                       </p>
                   </div>
               </li>
            {{/each}}
    </script>
    <script src="public/js/template-web.js"></script>

    <script src="/public/js/banner.js"></script>
        <script>


      function xixi(that,num){

          let nextSiblings = that.parentNode.nextSibling.nextSibling
          let sib = that.parentNode.nextSibling.nextSibling.innerText;

          let arrs = $(".comments").children('li');
          let hideId = $(that).parent().prev().prev().val()
           sib = parseInt(sib)
           sib++

          $.post('/collect/praise.php',{
            praise : sib,
            hideId  : hideId,
            updateId : num
          },function (res) {
              // console.log(res)
               res = JSON.parse(res)
              let num = res[0].praise_num

               nextSiblings.innerText = num;
               // nextSiblings.innerText =
               // let spans = $('.commentImg .giveNumber')
              // console.log(spans)
              // that.parentNode.nextSibling.nextSibling.innerText
          })
      }


    </script>
</body>
</html>


