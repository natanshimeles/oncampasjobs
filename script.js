function validateform(){
var  name = document.forms["myform"]["name"];
if(name==""){
	alert("please fill all the form");
	return false;
}
}