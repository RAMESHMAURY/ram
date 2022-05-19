<?php 

session_start();


$con=mysqli_connect('localhost','root','','elearningweb');

if ($con) 
  {
		echo "connection successful";
  }
else
	{
		echo "no connection";
	}

 $name=$_POST['name'];
 $pass=$_POST['password'];

 $q="select * from login where username='$name' && password='$pass'";

 $result=mysqli_query($con,$q);
 $res=mysqli_fetch_assoc($result);
 $num=mysqli_num_rows($result);
 if ($num==1)
  {

  	if ($res['username']=='admin') 
  	{
  		header("location:admin/admin_main.php");
  		
  	}else{
		$_SESSION['username']=$name;
		$page=$res['page'];
		$loc="location:";
		$location=$loc.$page;
		$_SESSION['page']=$page;
		header($location);
	  }
 }
 else
 {
 	$_SESSION['error']="error";
 	header('location:login.php');

 }





 ?>