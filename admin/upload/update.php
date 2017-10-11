<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    a{
        text-decoration: none;
    }
    form{
        width:500px;
        height:450px;
        border-radius: 5px;
        border: 1px solid #9d9d9d;
        position: absolute;
        top:0;
        right:0;
        left:0;
        bottom:0;
        margin:auto;
        overflow: hidden;
    }
    header{
        width:100%;
        height:50px;
        background: #9d9d9d;
        text-align: center;
        line-height: 50px;
        font-size: 20px;
        color: #fff;
    }
    main{
        width:400px;
        height:400px;
        padding:25px 50px;
        font-size: 18px;
    }
    input{
        width:400px;
        height:20px;
        outline: none;
    }
    button{
        width:200px;
        height:40px;
        background: cornflowerblue;
        border-radius: 5px;
        border:none;
        font-size: 20px;
        color: #fff;
        outline: none;
    }
    span{
        font-size: 16px;
        float: right;
        line-height: 40px;
    }
    .mes{
        margin-top: 20px;
        font-size: 16px;
        position: relative;
    }
    .notice{
        font-size: 12px;
        height:25px;
        width:120px;
        position: absolute;
        bottom:0;
        right: 0;
        display: none;
        line-height: 12px;
    }
    .box{
        width:300px;
        height:300px;
        border:1px solid red;
    }
    .box1{
        width:100%;
        height:95%;
    }
    .box1 img{
        width:100%;
        height:100%;
    }
    .box2{
        width:0%;
        height:5%;
        background: red;
    }
</style>
<body>

        <div class="mes">管理员头像：<br><br>
        <input type="file" name="aphoto"></div><br><br>
        <input type="button" value="上传">
        <div class="box">
            <div class="box1"><img src="" alt=""></div>
            <div class="box2"></div>
        </div>
</body>
<script>
     window.onload=function(){
         var btn=document.querySelector("input[type=button]");
         var file=document.querySelector("input[type=file]");
         var obj;
         var fileSize=1024*1024*10;
         var flag=true;
         file.onchange=function(){
             obj=(this.files[0]);   // 获取稳健的信息
             var files=new FileReader();//创建能够解析文件信息的对象
             files.onload=function(e){   //当机械完成后，触发onload事件
               document.querySelector("img").src=(e.target.result);
             };//通过 事件对象的target.result得到最终解析的结果
             //利用filereader对象里面的readAsdataurl将获取的文件解析成地址的方式
             files.readAsDataURL(obj);
             var formobj=new FormData();
             formobj.append('file',obj);
             var ajax=new XMLHttpRequest();
             ajax.onload=function(){
                 console.log(ajax.response);
             };
             ajax.upload.onprogress=function(e){
                 var total=e.totals;
                 var now=e.loaded;
                 var bili=now/total*100+"%";
                 document.querySelector(".box2").style.width=bili;
             }
             ajax.open("post","sever.php");
             ajax.send(formobj);
         }
         btn.onclick=function(){

         }
     }
</script>
</html>