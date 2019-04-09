/*
* @Author: name
* @Date:   2019-03-28 09:48:47
* @Last Modified by:   name
* @Last Modified time: 2019-04-03 11:10:15
*/

window.onload=function(){
  /*第1个参数是加载编辑器div容器，第2个参数是编辑器类型，第3个参数是div容器宽，第4个参数是div容器高*/
  xiuxiu.embedSWF("altContent",5,"100%","100%");
  //修改为您自己的图片上传接口
  xiuxiu.setUploadURL("http://duweibo.io/updateImage.php");
  xiuxiu.setUploadType(2);
  xiuxiu.setUploadDataFieldName("upload_file");
  xiuxiu.onInit = function ()
  {
    xiuxiu.loadPhoto("http://open.web.meitu.com/sources/images/1.jpg");//修改为要处理的图片url
  }
  xiuxiu.onUploadResponse = function (data)
  {
    // console.log(data)
   console.log(data)
  }
}