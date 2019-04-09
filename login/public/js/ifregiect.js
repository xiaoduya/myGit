$(function($){

    postRegiect()

})


//ajax 提交
 function postRegiect(){
        (function(){
               let regBtn  = $("#regBtn")
          regBtn.click(function(){

              let newName = $("input[name='email']").val()
              let newWord = $("input[name='password'").val()

              let ConfirmPassword = $("input[name='ConfirmPassword']").val()

          if (newWord != ConfirmPassword){
                 return false;
              }
         $.post("../../collect/ifregiect.php",{newName : newName, newWord : newWord})
        .then(function(res){
                if (res == 1){
                   window.location.href='/'
                }else {
                  console.log(res)
                }
              // console.log(res)
                 })
             })

         } ())

    }
