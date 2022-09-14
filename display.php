
<?php
session_start();
include 'conn.php';

if(isset($_SESSION['is_login'])){
    if ( $_SESSION['is_login'] == false ) {
     header('location:insert.php');
    }
}else
 header('location:insert.php');

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
  <style>

//.sidebar {
 // height: 100%;
  //width: 160px;
 // position: fixed;
 // z-index: 1;
  //top: 0;
 // left: 0;
  //background-color: #C197D2; ;
  //overflow-x: hidden;
 // padding-top: 16px;
//}
//.sidebar a {
 // padding: 6px 8px 6px 16px;
 // text-decoration: none;
 // font-size: 20px;
 // color: #818181;
 // display: block;
//}
//.sidebar a.active {
 // background-color: black;
 // color: white;
//}




//.sidebar a:hover:not(.active) {
 // background-color: #555;
 // color: white;
//}
//@media screen and (max-width: 700px) {
  //.sidebar {
   // width: 100%;
  //  height: auto;
  //  position: relative;
 // }
 // .sidebar a {float: left;}
 // div.content {margin-left: 0;}
//}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
//@media screen and (max-width: 400px) {
 // .sidebar a {
    //text-align: center;
  //  float: none;
 // }
//}
.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px;
}

/* Style sidebar links */
.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

/* Style links on mouse-over */
.sidebar a:hover {
  color: #f1f1f1;
}

/* Style the main content */
.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

/* Add media queries for small screens (when the height of the screen is less than 450px, add a smaller padding and font-size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}


  </style>
</head>
<body>
<body>
//<div class="sidebar">
 // <a href="#home"> Home</a>
 // <a href="#services"> Services</a>
 // <a href="#clients"> Clients</a>
 // <a href="#contact"> Contact</a>
//</div>
//</div>
<div class="sidebar">
  <a href="#home"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="#services"><i class="fa fa-fw fa-wrench"></i> Services</a>
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
</div>


	<div class="container">
<div class="">
<h3 class="text-center">Display Table Data</h3>
<table class="table table-bordered">
    <thead>
<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
<th>Delete</th>
<th>Update</th>
</tr>
</thead>
<?php 
//include 'conn.php';
class  display extends conn
{
public function display()
{
$sql="select * from details";
$query=mysqli_query($this->connection,$sql);

while($result=mysqli_fetch_array($query))
{
?>
<tbody>
<tr>
<td><?php echo $result['id'];?></td>
<td><?php echo $result['username'];?></td>
<td><?php echo $result['password'];?></td>
<td><button  name='done' type='submit'><a href="delete.php?id=<?php echo $result['id']; ?>" class=text-black>Delete</a></button></td>
<td><button > <a href="update.php?id=<?php echo $result['id']; ?>"class="text-black">Update</a></button></td>
</tr>
</tbody>
</
<?php
}
}
}
$dis=new display();
$dis->db_connect();
$dis->display();
?>





	</table>

</div>
</div>


</body>
</html>
