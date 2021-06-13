<style>
  .background {

    background: rgba(0, 0, 0, 0.7) url('img/2.jpg');
    background-size: cover;
    background-blend-mode:darken;
  }
.img{
  width: 35px;
  height: 35px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50px;
  border: 2px solid white;
}
  
</style>
<?php 
session_start();
 echo'<nav class="navbar navbar-expand-lg navbar-light bg-light background">
  <a class="navbar-brand" href="/project" ><img class="img" src="img/logo.jpg" alt="jai shree Ram"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/project">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>
    </ul>
  <div class="row mx-2">';
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
   echo '<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
      <p class="text-light my-0 mx-2"> welcome '. $_SESSION['useremail'] .' </p>
      <a href="partials/_logout.php" class="btn btn-danger ml-2" >Logout</a>
    </form>';
  } 
  else{

 echo' <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
    </form>
    <button class="btn btn-danger ml-2" data-toggle="modal" data-target="#loginModal"  >Login</button>
    <button class="btn btn-danger mx-2" data-toggle="modal" data-target="#signupModal" >Signup</button>'; 
  }  
  echo' </div>
  </div>
</nav>';
include 'partials/_loginmodals.php';
include 'partials/_signupmodals.php';

if(isset($_GET['signupsuccess']) && $signupsuccess="true"){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success! </strong>you can now login.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

?>