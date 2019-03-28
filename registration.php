<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$database = "attendencesystem";

$con=mysqli_connect($host,$user,$pass,$database);

 
$F_name=$_POST['First_name'];
$m_name=$_POST['middle_name'];
$L_name=$_POST['Last_name'];
$branch=$_POST['branch'];
$division=$_POST['division'];
$mail=$_POST['mail_id'];
$month=$_POST['month'];
$date=$_POST['date'];
$year=$_POST['year'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];

$q ="select * from register where mail= '$mail' && phone='$phone'";

$result =mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num ==1){
		echo  "Duplicate data";
}
else{
	
	$username=$L_name;
	$password=$mail;
	
	$qy="insert into register(F_name,m_name,L_name,branch,division,mail,month,date,year,gender,phone,username,password) values('$F_name','$m_name','$L_name','$branch','$division','$mail','$month','$date','$year','$gender','$phone','$username', '$password')";
	mysqli_query($con,$qy);
	
	

}
?>