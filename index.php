<?php
@$Fullname=$_REQUEST['fullname'];
@$email=$_REQUEST['mail'];


if(isset($_POST['btn']))
{

@$host="localhost";
@$user="root";
@$password="";
@$db="subs";

@$conn=mysqli_connect($host,$user,$password,$db);
@$insert="insert into subsinfo values ('$Fullname','$email')";
mysqli_query($conn,$insert);

if($conn){
echo("<h1 style-color:green;>Thank you for subscribing</h1>");

}
else{
    echo("<h1 style-color:red;>Error</h1>");
}


}



?>