<?php
include 'conn.php';
//$id=$_GET['id'];
//echo $id;
//$sql='delete from details where id=$id';
//mysqli_query($conn,$sql);
class delete extends conn
{ 
    public function delete(){
    $id = $_GET['id'];
    echo $id;
$sql="delete from details where id=$id";
mysqli_query($this->connection,$sql);
header('location:display.php');
}
}
$del=new delete();
$del->db_connect();
$del->delete();
?> 