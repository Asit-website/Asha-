<?php
$showError="false";
if($_SERVER['REQUEST_METHOD']=="POST"){
    include '_dbconnect.php';
    $user_name=$_POST['name'];
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];

    // check whether username exist or not
    $existSql="select * from `sona` where username = '$user_name'";
    $result=mysqli_query($conn,$existSql);
    $numRows=mysqli_num_rows($result);
    if($numRows>0){
        $showError="username already exist";
    }

    else{

        if($pass==$cpass){

            $hash=password_hash($pass,PASSWORD_DEFAULT);
            $sql="INSERT INTO `sona` ( `username`, `password`, `dt`) VALUES ( '$user_name', '$hash', current_timestamp())";
            $result=mysqli_query($conn,$sql);
            if($result){
                $showAlert=true;
                header("Location: /project/index.php?signupsuccess=true");
                exit();
            }
        }

            else{
                $showError="Password do not match";
            }
        }

        header("Location: /project/index.php?signupsuccess=false&error=$showError");

    }
?>