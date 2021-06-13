<?php
// $login="false";
$showError="false";
if($_SERVER['REQUEST_METHOD']=="POST"){
    include '_dbconnect.php';
    $username=$_POST['loginEmail'];
    $passp=$_POST['loginPass'];
    $sql="select * from `sona` where username = '$username'";
    $result=mysqli_query($conn,$sql);
    $numRows=mysqli_num_rows($result);

    if($numRows==1){
        $row=mysqli_fetch_assoc($result);
        if(password_verify($passp,$row['password'])){
        session_start();
        $_SESSION['loggedin']=true;
        // $_SESSION['sno']=$row['sno'];
        $_SESSION['useremail']=$username;
            //   header("location: /forum/index.php");
        echo "logged in". $username;
     }         
        header("Location: /project/index.php");     
  }
  header("Location: /project/index.php");    
}

?>