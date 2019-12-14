<?php
$host="Locaclhost";
$User="root";
$Password="";
$db="demo";

mysql_connect($host,$User,$Password);
mysql_select_db($db);

if (isset($_POST['Username']) {
    $Uname=$_POST['Username'];
    $Password=$_POST['password'];

    $sql="select * from Loginform where user=' " .$Uname. " ' AND Password= ' " .$password. " ' Limit 1";
    $result=mysql_query($sql);

    if (mysql_num_rows($result==1){
        echo "You have successfully Logged in";
        exit();

    }   
     else{
        echo "You have Entered an Incorrect Name or password";
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" a href="css\style.css">
</head>
<body>
<div class="container">
<img src="image\login.png"/>

<Form method="POST" action="$"
<div class="Form_input">
<input type="text" name="Username" placeholder="Enter Your Name"/>
</div>
<div class="form_input">
<input type="Password" name="Password" placeholder="Enter Your Passsword"/>
</div>
<input type="Submit" name="Submit" Value="Login" class="btn_login"/>
</body>
</html>