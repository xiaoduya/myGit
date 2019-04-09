/*
* @Author: name
* @Date:   2019-03-20 08:27:46
* @Last Modified by:   name
* @Last Modified time: 2019-03-28 15:10:02
*/

'use strict';

$(function($){
    //修改密码模块
    let du_password = {
        update(){
            let submitPassword = $("#submitPassword")
            let id = $("input[type='hidden']").val()

            submitPassword.on('click',function(){
                let equally = $(".equally").val()

                let oldPassword  = $(".oldPassword").val()

                let newPassword  = $(".newPassword").val()


                alert(newPassword)
                if (oldPassword == ""){
                    alert('密码不能为空')
                    return false
                }

                if ( equally != oldPassword ){
                    alert('两次输入密码不一致')
                    return false
                }

                 $.post('./../../collect/updatePassword.php',{
                        userPassword : newPassword,
                        oldPassword   : oldPassword,
                        id : id
                 },function(res){
                    console.log(res)
                 })
            })
        }
    }

    //修改个人信息模块

    let du_updatePerson = {
        checked () {
            let radios = $("input[type='radio']")

           for (let i = 0; i < radios.length;i++){
                radios[i].addEventListener('click', function() {
                    $(this).attr('checked','true').siblings().removeAttr('checked')
                    console.log($(this).val())
                 })

           }
        },
        updatePerson () {
            let updatePerson = $('#updatePerson')

            updatePerson.on('click',function(){
                    //用户名
                  let NewPersonName = $("input[name='PersonName']").val()
                    //性别
                  let NewPersonSex  = $('input:radio[name="PersonSex"]:checked').val()
                    //QQ
                  let PersonQQ      = $("input[name='qq']").val()
                    //邮箱
                  let PersonEmail   = $("input[name='PersonEmail']").val()

                  let PersonId      = $("input[name='PersonId']").val()
                  console.log('姓名' + NewPersonName + '性别' + NewPersonSex + 'QQ' + PersonQQ + '邮箱' + PersonEmail + 'id' + PersonId)
                $.post('./../../collect/updateInfo.php',{
                    PersonName : NewPersonName,
                    PersonSex  : NewPersonSex,
                    qq         : PersonQQ,
                    PersonEmail : PersonEmail,
                    PersonId   : PersonId
                })
                .then(function(res){
                    console.log(res)
                })
                console.log(NewPersonName + '---' + NewPersonSex)

            })
        }
    }

    du_password.update()
    du_updatePerson.updatePerson()
    // du_updatePerson.checked()
})