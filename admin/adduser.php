<?php
    $aname=$_POST["aname"];
    $anicheng=$_POST["anicheng"];
    $apass=md5($_POST["apass1"]);
    $aphoto=$_POST["aphoto"];
    include "public/db.php";

    $sql="insert into admin (`aname`,`apass`,`anicheng`,`aphoto`) VALUES ('$aname','$apass','$anicheng','$aphoto')";
    if($db->exec($sql)){
        echo "<script>alert('添加成功！');location.href='add.php'</script>";
    }
//    $array=array(
//        "name"=>"$name",
//        "sex"=>"$sex",
//        "age"=>"$age",
//        "tel"=>"$tel",
//    );
//    $original=json_decode(file_get_contents("xinxi.text"),true);
//    $original[]=$array;
//    file_put_contents("xinxi.text",json_encode($original));
    ?>
