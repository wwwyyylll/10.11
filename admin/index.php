<?php
    session_start();
    if(!isset($_SESSION["login"])){
        $message="请登录";
        $url="login.php";
        include "time.php";
        exit;
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
    html,body{
        width:100%;
        height:100%;
        overflow: hidden;
    }
    .header{
        max-width:1200px;
        height:20%;
        margin:0 auto;
        border: 1px solid #777;
    }
    h1{
        float:left;
        margin-top: 40px;
        margin-left: 30px;
    }
    h2{
        float:left;
        margin-left: 300px;
        margin-top:40px;
    }
    h4{
        float:left;
        margin-left: 1100px;
    }
    .content{
        max-width:1200px;
        height:80%;
        border:1px solid #777;
        margin:0 auto;
        border-top:none;
    }
    .left{
        width:25%;
        height:100%;
        border-right:1px solid #777;
        float: left;
    }
    .right{
        width:75%;
        height:100%;
        float: right;
    }
    iframe{
        width:100%;
        height:100%;
    }
    .tou{
        width:50px;
        height:50px;
        border-radius:50%;
        border:1px solid #d5d5d5;
        margin-left:1110px;
        margin-top: 40px;
    }
    .tou img{
        width:50px;
        height:50px;
        border-radius:50%;
    }
</style>
<body>
    <div class="header">
        <h1>欢迎来到<?php echo $_SESSION["aname"] ?>系统</h1>
        <h2><?php echo $_SESSION["anicheng"] ?></h2>
        <div class="tou"><img src="<?php echo $_SESSION["aphoto"] ?>" alt=""></div>
        <h4><a href="tuichu.php">退出登陆</a></h4>
    </div>
    <div class="content">
        <div class="left col-xs-4 col-sm-3">
            <ul>
                <li>用户管理
                    <ul>
                        <li><a href="xinxi.php" target="right">查看用户</a></li>
                        <li><a href="add.php" target="right">新增用户</a></li>
                    </ul>
                </li>
                <li>分类管理
                    <ul>
                        <li><a href="showCategory.php" target="right">查看分类</a></li>
                        <li><a href="fenlei.php" target="right">新增分类</a></li>
                    </ul>
                </li>
                <li>内容管理
                    <ul>
                        <li><a href="index1.php">查看内容</a></li>
                        <li><a href="addCon.php" target="right">新增内容</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="right col-xs-8 col-sm-6">
            <iframe src="" name="right" frameborder="0"></iframe>
        </div>
    </div>
</body>
</html>