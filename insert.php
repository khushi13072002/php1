<?php 

session_start();
include 'conn.php';
class insert extends conn{

public function sess()
{
if (isset($_SESSION['is_login']) && $_SESSION['is_login'] == true ) {
 header('location:display.php');
}
}
public function check()
{
  $count=0;
if(isset($_POST['done']))
{
    //echo "hy";
    $username=$_POST['username'];
    //echo $username;
    $password=$_POST['password'];
    //echo $password;
    $sql="select * from details where username='$username' and password='$password'";
$query=mysqli_query($this->connection,$sql);
while($result=mysqli_fetch_array($query))
{
$count++;
}
if($count==0)
{
header('location:user.php');
}
if($count>0)
{
  $_SESSION['is_login']= true;
//$_SESSION['username']= $username;
//$_SESSION['password']= $pass;
header('location:display.php');
}
}


 //   $q="INSERT INTO details(username,password) VALUES('$username','$password')";
   // $query=mysqli_query($conn,$q);
    //header('location:display.php');
    }
  }
  $ins=new insert();
  $ins->sess();
  $ins->db_connect();
  $ins->check();
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Operation </h1>
 </div><br>

 <label> Username: </label>
 <input type="text" name="username" class="form-control"> <br>

 <label> Password: </label>
 <input type="text" name="password" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>
