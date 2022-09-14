<?php 
session_start();
include 'conn.php';
class insert 
{
  public function sess()
   {
      if (isset($_SESSION['is_login']) && $_SESSION['is_login'] == true ) {
      header('location:display.php'); }
   }
  public function check()
  {
  $count=0;
  $c1=new conn();
  $c1->db_connect();
    if(isset($_POST['done']))
      {
         $c1->selects();
         
      }
   } 
}
  $ins=new insert();
  $ins->sess();
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
