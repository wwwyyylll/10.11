

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
    body,html,a{
        margin:0;
        padding:0;
        text-decoration: none;
    }
    tr,th{
        text-align: center;
    }
    a{
        color: #000;
    }
    img{
        width:40px;
        height:40px;
    }
</style>
<body>
<table class="table table-bordered table-striped">
    <tr>
        <th>姓名</th>
        <th>昵称</th>
        <th>头像</th>
        <th>操作</th>
    </tr>
    <?php
        include "public/db.php";
        $sql="select * from admin";
        $result=$db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while ($row=$result->fetch()){
    ?>
    <tr>
        <td><?php echo $row["aname"] ?></td>
        <td><?php echo $row["anicheng"] ?></td>
        <td><img src="<?php echo $row["aphoto"] ?>" alt=""></td>
        <td><a href="del.php?id=<?php echo $row["id"]?>">删除</a></td>
    </tr>
    <?php
        }
    ?>
</table>
</body>
</html>