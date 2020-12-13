<?php
$email = $_POST['email'];
$pswrd = $_POST['pass'];
// echo $email.$pswrd;
$con = mysqli_connect("localhost","root","","trellodb");
if($con){
    echo 'Successfully Connected to database';
}
else{
    echo "connection failed";
}
$result = mysqli_query($con, "insert into trello values('$email','$pswrd')");
if($result){
    echo 'values inserted redirecting you to the login page.'.'<br>';
	echo "<script> window.location.assign('login.html'); </script>";
}

?>