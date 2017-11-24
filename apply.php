<?php


if(isset($_POST["name"])&&isset($_POST["major"])&&isset($_POST["pno"])&&isset($_POST["wph"])){
	   

	   $sname=$_POST["name"];
	   //$email=$_POST["email"];
	   $pno=$_POST["pno"];
	   $major=$_POST["major"];
	   $wph=$_POST["wph"];
       echo "Name: ".$sname."<br>";
       echo "Major :".$major."<br>";

}
?>