<?php
include 'connectdb.php';

 $name=$_POST["name"];
 $pw=$_POST["pw"];


if( isset ($_POST["name"]) || isset($_POST["pw"]) )  {
	
	$query="insert into useraccount values('$name','$pw')";

if($conn->query($query)==false){
	echo "error occured";
}
	

}



?>