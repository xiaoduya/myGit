$(document).ready(function() {
     banner()

  indexComtent()

})

//轮播图
function banner () {
              let  banner_Box = $('.bannerBox')
              let leftSpan  = $('.leftSpan')
              let items = $('.item1');
              let itemWidth = $('.item1').width()
              let time = null
              let flag = true
              let i = 0
              let bannerItem = $('.bannerItem')

              let timeName = null
              leftSpan.on('click',function() {
                   clearInterval(time)
                   i++

                   if (flag) {
                       flag = false
                         time =  setInterval(function(){
                               if (i <= items.length -1) {
                                   banner_Box.css({'transition' : '1s','transform' : 'translateX(' + (-i *          itemWidth) +'px)'})
                               } else {
                                    banner_Box.css({
                                    'transition' : '0s',
                                    'transform' : 'translateX(' + 0 +'px)'
                                })
                                i = 1
                            }
                         },15)

                }


                setTimeout(function() {
                  flag = true

                 },1000)
               })

               bannerItem.on('mouseover',function (){
                  clearInterval(timeName)
              })

              bannerItem.on('mouseout', function () {
                  setTime()
               })

              let setTime = function (){
                   timeName =  setInterval(function () {
                   leftSpan.trigger('click')
               },2000)
             }

              setTime()

              document.addEventListener('visibilitychange',function(){

                var isHidden = document.hidden;

                if(isHidden){

              clearInterval(timeName)

                 } else {
                 setTime()
                }

             }

             );
 }

 //首页微博
function indexComtent () {
   $.post('./../../collect/showIndex.php', {

   },function (res) {
      res = JSON.parse(res)
      console.log(res)

      let templates = document.getElementById('template')
      var data = {
          result : res
      }
      var temp = template("template",data)
      $(".comments").html(temp)
   })

   //点赞


}