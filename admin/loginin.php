<?php
//    header("Content-type:text/html;charset=utf-8");
    session_start();
    include "public/db.php";
    $aname=htmlspecialchars(addslashes($_POST["aname"]));
    $apass=md5($_POST["apass1"]);
    $sql="select * from admin where aname='{$aname}' and apass='{$apass}'";
    $result=$db->query($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    if($row=$result->fetch()){
        $_SESSION["login"]="yes";
        $_SESSION["aname"]=$aname;
        $_SESSION["aphoto"]=$row["aphoto"];
        $_SESSION["anicheng"]=$row["anicheng"];
        $url="index.php";
        $message="登陆成功！";
        include "time.php";
//        echo "<script>alert('登录成功！');location.href='index.php'</script>";
    }else{
        $url="login.php";
        $message="登陆失败，请重新登录！";
        include "time.php";
//        echo "<script>alert('登录失败，请重新登录！');location.href='login.php'</script>";
    }