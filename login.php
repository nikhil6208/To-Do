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
    $result = mysqli_query($con, "select count(*) from trello where (email='$email' and password='$pswrd')");
    $final = mysqli_fetch_assoc($result);
    // print_r($final);

    if($final['count(*)']>0)
    {
        echo ' Login Success Redirecting you to the To Do App';
		echo "<script> window.location.assign('start doing.html'); </script>";
    }
    else{
    echo " Login Failed
		Please Check your Email and password";	
    }
?>