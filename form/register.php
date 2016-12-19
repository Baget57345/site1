<?php
	require_once("connect.php");
	if(isset($_POST['login'])){
		$login=$_POST['login'];
		}
	if(isset($_POST['email'])){
		$email=$_POST['email'];
		}
	if(isset($_POST["password"])){
		$password = md5($_POST["password"]); 
		}
	if(isset($_POST['submit'])){
		$submit=$_POST["submit"];
		}
	if (isset($submit)){
		$query='INSERT INTO user("login","email","password") VALUES($login,$email,$password)';
	}
	$result=mysql_query($query)or die("Error:".mysql_error());
	if($result){
		echo"Registration is succsesful!<a href='index.php'></a>";
		exit();
	}
	else{
		echo"sdsdsdsdsd<a href='index.php'>sdsd</a>";
	}
?>