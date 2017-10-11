<meta charset="utf-8">
<?php
//   header("content:text/html,charset utf8");
   $size=1024*1024*70;
   $type=array(
     "image/jpeg","image/png","image/gif"
   );
    if(is_uploaded_file($_FILES["file"]["tmp_name"])){
        if(!is_dir("tmp")){
            mkdir("tmp");
        }
        if($_FILES["file"]["size"]>$size){
            echo "文件太大";
            exit;
        }
        if(!in_array($_FILES["file"]["type"],$type)){
            echo "文件类型不对";
            exit;
        }
        move_uploaded_file($_FILES["file"]["tmp_name"],"tmp/aa.jpg");
        echo "ok";
}