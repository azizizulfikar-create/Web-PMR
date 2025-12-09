<?php 
$host="localhost";
$user="root";
$psw="";
$db="pmr";
$connect=mysqli_connect($host,$user,$psw) or die(mysqli_connect_error());
if($connect){
    echo "Berhasil Terkoneksi ke Database";
}else{
     echo "Gagal Terkoneksi ke Database";
}
$selectdb = mysqli_select_db($connect, $db);

?>