<?php
class conn
{
	public  $connection;
         
	public function db_connect() { 

		$name="localhost";
    	$username="root";
    	$dbname="laravel";
    	$blank='';
        
		$this->connection=mysqli_connect($name,$username,$blank,$dbname);
		
		if(mysqli_connect_error()) {
			die("connection failed");
		}
			
		return $this->connection;
	}
		
	public function selects() {

		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select * from details where username='$username' and password='$password'";
		$query=mysqli_query($this->connection,$sql);

	  	while($result=mysqli_fetch_array($query)){
            $count++;
        }

        if($count==0){
            header('location:user.php');
        }
        if($count>0){
            $_SESSION['is_login']= true;
            header('location:display.php');
        }
	}

		public function deletes() {

			$id = $_GET['id'];
    		$sql="delete from details where id=$id";
			mysqli_query($this->connection,$sql);
			header('location:display.php');
	}	
		public function updates(){

			$id=$_GET['id'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$q="update details set id=$id,username='$username',password='$password' where id=$id";
			$query=mysqli_query($this->connection,$q);
			header('location:display.php');
	}	

		public function update(){

            $id=$_GET['id'];
            $q="select * from details where id=$id";
            $query=mysqli_query($this->connection,$q);
              while($result=mysqli_fetch_array($query)){
                   $username=$result['username'];
                   $password=$result['password'];
                 }
	}

		public function insert(){

            $username=$_POST['username'];
			$password=$_POST['password'];
   			$q="INSERT INTO details(username,password) VALUES('$username','$password')";
   			$query=mysqli_query($this->connection,$q);
   			header('location:display.php');       
	}					
}
 $connection=new conn();
 $connection->db_connect();
?>