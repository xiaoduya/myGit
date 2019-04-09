/*
* @Author: name
* @Date:   2019-04-01 10:03:46
* @Last Modified by:   name
* @Last Modified time: 2019-04-08 12:03:24
*/

'use strict';
    var du_num = "";
    var du_PId = "";
$(function(){

     let du_userContent = {
        showIndex (callback) {
            let postId = $("input[name='postId']").val()

            let userId = $("input[name='commentId']").val()

            $.post('../../collect/showComtent.php',{
                postId : postId
            },function (res){
                Code (res)
            })
         },
         userText () {
            let commenInput = $('.commenInput');

           commenInput.on('blur',function () {
                let val = $(this).val()

                if (val == ""){
                    // alert(1)
                    return false
                }
                //被评论者
                let postId = $("input[name='postId']").val()
                //评论者id
                let userId = $("input[name='commentId']").val()
                //评论者
                let reviewer = $("input[name='reviewer']").val()
                //评论者头像
                let uploadImg = $("input[name='avatar']").val()


                //需求 用户鼠标从文本框中移开 ajax上传 评论者id 评论id 评论者头像 评论内容
                //1 获取 评论者 评论 评论头像 评论内容
               $.post('/collect/uploadComment.php',{
                    val : val,
                    postId : postId,
                    userId : userId,
                    reviewer : reviewer,
                    avatar : uploadImg
               },function (res) {
                   Code (res)

                   du_userContent.showIndex()
                   commenInput.val('')

                   commentNum(du_num,du_PId)
               })


           })
         }

    }


    du_userContent.userText()
    du_userContent.showIndex()

})
//用户输入内容
//文本框代码抽离
function Code (res) {
            res = JSON.parse(res)

            var num = "";
            let postId = $("input[name='postId']").val()


               let str = ''

                for (let i =0; i < res.datas.length;i++){
                     let data = res.datas[i];

                    num = res.num;
                    let imgUrl = "/" + data.avatar

                      str += `
                        <li>
                            <div class="leftImg">
                                 <img src="${imgUrl}" alt="" style="width:25px;height:25px;"/>
                            </div>
                            <div class="rightContent">
                                <span class="fansName">${data.reviewer}:</span>
                                <p>${data.comment}</p>
                                 <div class="handle clearfix">
                                     <div class="handleLeft">
                                          <span>2019年4月3日8:58</span>
                                     </div>

                                     <div class="handleRight">
                                          <span>赞</span>
                                          <span>评论</span>
                                     </div>
                                 </div>

                            </div>
                        </li>
                    `
                }
            $('.fansComments').html(str)


            du_num = num
            du_PId = postId
}

    function commentNum (num,postId) {
         $.post('../../collect/updateNum.php',{
                    num : num,
                    pId : postId
                  },function (res) {
                $(".spiderMan").text(res)
             })
    }
