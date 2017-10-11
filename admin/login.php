<?php
session_start();
if(isset($_SESSION["login"])){
    echo "<script>alert('已登录'),location.href='index.php'</script>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
<form action="loginin.php" method="post">
    <header>登录页面</header>
    <main>
        <div class="mes">输入姓名：<br><input type="text" name="aname" placeholder="请输入您的姓名"><div class="notice"></div></div>
        <div class="mes">输入密码：<br><input type="password" name="apass1" placeholder="请输入您的密码"><div class="notice"></div></div><br><br>
        <button type="submit" disabled="disabled">登录</button>
    </main>
</form>
</body>
<script src="js/jquery-3.2.1.js"></script>
<script>
    var names=$("input[name='aname']");
    var pass1=$("input[name='apass1']");

    names.keyup(function(){
        var that=$(this);
        var val=$(this).val();
        that.data("flag",false);
        if(val==''){
            names.next().css({display:"block",color:"red"}).html("姓名不能为空！");
            that.data("flag",false);
        }else{
            names.next().css({display:"none"})
            that.data("flag",true);
        }
        check();
    })
    pass1.keyup(function(){
        var that=$(this);
        var val=$(this).val();
        that.data("flag",false);
        if(val!=''){
            pass1.next().css({display:"none"})
            that.data("flag",true);
        }else{
            pass1.next().css({display:"block",color:"red"}).html("密码不能为空！");
            that.data("flag",false);
        }
        check();
    })
    function check() {
        var flag = true;
        $("input").each(function (index, obj) {
            if (!$(this).data("flag")) {
                flag = false;
            }
        })
        if (flag) {
            $("button").removeAttr("disabled");
        } else {
            $("button").attr("disabled", "disabled");
        }
    }
</script>
</html>
<style>
    a{
        text-decoration: none;
    }
    form{
        width:500px;
        height:390px;
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
        height:350px;
        padding:25px 50px;
        font-size: 18px;
    }
    input{
        margin-top: 10px;
        width:400px;
        height:30px;
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
</style>
<script src="js/jquery-3.2.1.js"></script>
<script src="jquery.validate.js"></script>
<script>
    $(function(){
        console.log(1)
        $('form').validate({
            rules:{
                aname:{
                    required:true,
                    minlength:5
                }
            },
            messages:{
                aname:{
                    required:"用户名不能为空",
                    minlength:"长度不能小于5"
                }
            }
        })
    })
</script>