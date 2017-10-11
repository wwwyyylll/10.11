<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<form action="addfenlei.php">-->
<!--    所属分类: <select name="pid" id="pid">-->
<!--        <option value="一级标题">一级标题</option>-->
<!--       --><?php
//           include "functions.php";
//           $db=new mysqli("localhost","root","123456","w1703");
//           $db->query("set names utf8");
//           $tre=new tree();
//           $tre->aa(0,$db,"fenlei",0,"-");
//           echo $tre->str;
//       ?>
<!--              </select><br><br>-->
<!--    分类名称: <input type="text" name="cname"><br><br>-->
<!--    <button type="submit">添加分类</button>-->
<!--</form>-->
<!--</body>-->
<!--</html>-->

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
<form action="addfenlei.php">
    分类名称：<select class="pid" name="pid">
        <option value="0">一级分类</option>
        <?php
        include "functions.php";
        include "./public/db.php";
        $tree=new tree();
        $tree->aa(0,$db,"category","0","*");
        echo $tree->str;
        ?>
        <select><br>

        添加分类：<input type="text" name="cname"><br>
        提交：<input type="submit">
</form>
</body>
<html>
