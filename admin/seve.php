<?php
    //1.获取信息  $_FILES
   ///2.检测信息  is_oploaded_dile    size  type
    //3.创建上传的目录   mkdir  (看关于操作文件的访问) (参数的访问方式)
    //4.移动文件  move_uploaded_file
    //5.输出文件存储的路径（给ajax用）
 class upload{
     public $size;
     public $type="image/jpeg;image/png;image/gif";
     public $filename="file";
     public $data;
     public $uploadRoot="abcde";
     public $fullpath;
     function __construct(){
         $this->size=1024*1024*10;
         $this->move();
     }
     public function accept(){
         $this->data=$_FILES[$this->filename];
     }
     private function check(){
         if(is_uploaded_file($this->data["tmp_name"])){
             if($this->data["size"]<$this->size&&$this->data["type"]=$this->type){
                 return true;
             }else {
                 return false;
             }
                 //1.判断根目录是否存在
//                 if(!is_dir($this->uploadRoot)){
//                     mkdir($this->uploadRoot);
//                 }
//                 //2.判断当天目录是否存在

//                 if(!is_dir($this->uploadRoot."/".$dir)){
//                     mkdir($this->uploadRoot."/".$dir);
//                 }

             }
     }
     public function createdir(){
         $dir=date("y-m-d");
         if(!is_dir($this->uploadRoot."/".$dir)){
             mkdir($this->uploadRoot."/".$dir,0777,true);
         }
         //3.创建文件名字
         $name=time().mt_rand(1,1000).$this->data["name"];
         //4.整和路径
         $this->fullpath=$this->uploadRoot."/".$dir."/".$name;
         move_uploaded_file($this->data["tmp_name"],$this->fullpath);
         echo $this->fullpath;
     }
     public function move(){
         //1.接收
         $this->accept();
        // 2.检查
         if($this->check()){
             //3.创建目录
             $this->createdir();
         }

     }
}
$obj=new upload();