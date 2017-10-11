<?php
    include "public/db.php";
    $aid=$_GET["id"];
    $sql="delete from admin where id=$aid";
    $db->query($sql);
    echo "<script>alert('删除成功');location.href='xinxi.php'</script>";

