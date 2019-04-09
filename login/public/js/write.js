/*
* @Author: name
* @Date:   2019-04-03 19:50:10
* @Last Modified by:   name
* @Last Modified time: 2019-04-05 22:29:46
*/

'use strict';

$(function (){
    let du_write = {
        updateClick () {
            let btn = $("#click")
            let file = $(".file")
            btn.click(function () {
                file.click()
            })
        },
        uploadData (){
           let btn = $('#btn')
           btn.click(function () {
               // 需求 点击按钮 提交 文本域和 图片
               let val = $('#value').val()

               let img = $("input[name='xixi']").val()

               let formData = new FormData();
                let img_file = document.getElementById('file')
                var fileObj  = img_file.files[0];
                let text = $("#value").val()
                console.log(text)
                let userName = $("#hiddenName").val()

                let userId  =  $("#hiddenId").val()

                formData.append('classIcon',fileObj)

                formData.append('classDescribe',text)

                formData.append('className',userName)

                formData.append('classId',userId)
                    $.ajax({
                        url : '/uploadImg.php',
                        type : 'POST',
                        data : formData,
                        async :false,
                        processData : false,
                        contentType : false,
                        success : function (data) {
                           if (data){
                                location.href = "/"
                           }
                        }
                    })

           })
        }
    }

    du_write.updateClick()
    du_write.uploadData()

})