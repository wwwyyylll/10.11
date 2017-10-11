<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<form action="adduser.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">管理员姓名：</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="aname" placeholder="请输入管理员姓名">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">管理员昵称</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="anicheng" placeholder="请输入管理员昵称">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">管理员头像：</label>
        <div class="box">
<!--        <input type="text" class="form-control" id="exampleInputEmail1" name="aphoto" formenctype="multipart/form-data">-->
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">输入密码：</label>
        <input  class="form-control" id="exampleInputEmail1" type="password" name="apass1" placeholder="请输入密码">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">确认密码：</label>
        <input  class="form-control" id="exampleInputEmail1" type="password" name="apass2" placeholder="请再次输入密码">
    </div>
    <input type="hidden" name="aphoto">
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/upload.js"></script>
<script>
    window.onload=function(){
        var uploadobj=new upload();
        uploadobj.createView({parent:document.querySelector(".box")});
        uploadobj.up("./seve.php",function(sum){
           $("input[type=hidden]").val(sum);
        });
    }
</script>
</html>