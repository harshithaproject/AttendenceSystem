<html>
<head>
<title>
Student details
</title>
</head>
<body>
</body>
</html>
<h3> First name    Middle name     Last Name    Birth Date   Department   Year  Gender  E-mail   Mobile number  </h3>
<?php
$First_name =$_POST["First_name"];
$Middle_name =$_POST["middle_name"];
$Last_name =$_POST["Last_name"];
$month=$_POST['month'];
$date=$_POST['date'];
$year=$_POST['year'];
echo $First_name;
echo "</br>";
echo $Middle_name;
echo "</br>";
echo $Last_name;
echo "</br>";
print $month;
print $date;
print $year ;
echo $_POST["branch"];
echo "</br>";
echo $_POST["division"];
echo "</br>";
echo $_POST["gender"];
echo "</br>";


$mail_id =isset( $_POST["mail_id"])?$_POST["mail_id"] : '';
echo $mail_id;
$phone = $_POST["phone"];

echo $phone;
?>




