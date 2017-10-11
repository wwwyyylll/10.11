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
    *{
        padding:0;
        margin:0;
        text-decoration: none;
    }
    .alert{
        width:300px;
        height:200px;
        position: absolute;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:auto;
        border:2px solid #9d9d9d;
        border-radius: 5px;
        font-size: 18px;
        line-height: 55px;
        overflow: hidden;
    }
    .header{
        width:100%;
        height:50px;
        background: #9d9d9d;
        text-align: center;
        font-size: 18px;
        line-height: 50px;
        color: #fff;
    }
    .content{
        width:260px;
        height:110px;
        padding:20px;
        font-size: 16px;
    }
    span{
        font-size: 20px;
        color: red;
    }
</style>
<body>
    <div class="alert">
        <div class="header"><?php echo $message ?></div>
        <div class="content">
            该页面将在 <span>3</span> s之后跳转至首页，如果没有跳转请点 <a href="<?php echo $url ?>">这里</a>
        </div>
    </div>
</body>
<script>
    var span=document.querySelector("span");
    var time=3;
    setInterval(function(){
        time--;
        if(time==0){
            location.href='<?php echo $url ?>';
        }else{
            span.innerHTML=time;
        }
    },1000)
</script>
</html>
