<?php
class conn
{
	public $connection;
	public function db_connect()
	{
$this->connection=mysqli_connect('localhost','root','','laravel');
if(mysqli_connect_error())
{
	die("connection failed");
}
}
}
$con=new conn();
$con->db_connect();
?>
