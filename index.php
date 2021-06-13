<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>
    <?php echo "Dharam hi jivan"  ?>
  </title>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital@1&display=swap');
    section {
      height: 600px;
    }

    #padding {
      padding-top: 50px;

    }
    .logo img{
      width: 146px;
      height: 130px;
      display: block;
      margin: 0 auto;
      border
    }
    .family{
      font-family: 'Ubuntu Mono', monospace;
      font-size:20px ;
    
    }
    .button{
      font-family: 'Ubuntu Mono', monospace;
      
    }
   
  
  </style>
</head>

<body>
  <!-- Just an image -->
  <?php include 'partials/header.php' ;  ?>
  <?php include 'partials/_dbconnect.php' ; ?> 
  <section class="background my-0 py-0">
    <div class="container">
      <blockquote class="text-center" id="padding">
        <h2 class="mb-0 text-light">Asha Ekta Munch </h2>

      </blockquote>
      <blockquote class="text-center">
        <p class="text-light mb-0 family">Hinduism is an Indian religion and dharma, or way of life. It is the world
          third-largest religion, with over 1.2 billion followers, or 15–16% of the global population, known as Hindus..
        </p>
      </blockquote>
      <div class="text-center my-4">
        <img src="img/logo.jpg" height="150" width="150" class="rounded-circle" alt="...">  
      </div>
  
    </div>
    <div class="container text-center button">
     <a  class="btn btn-outline-danger btn-lg btn-rounded-circle" href="contact.php">Contact Us</a>
    </div>
    
  </section>

  
  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://source.unsplash.com/1600x400/?God,shree Ram" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1600x400/?God,shiv" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1600x400/?God,Ganesh" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="conatiner text-center my-4 py-2">
    <h2 class="text-center">Our Heros</h2>

    <div class="row my-4">

      <?php 

          $sql="SELECT * FROM `dharm`";
          $result=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($result)){

            $id=$row['cat_id'];
            $title=$row['cat_title'];
            $desc=$row['cat_desc'];


            echo'<div class="col-md-4 my-4">
       
          <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/card-'. $id .'.jpg " alt=" error ">
          <h2><a class="text-dark" href="viewdetails.php?catid='. $id .'">'. $title . '</a></h2>
          <p class="text-center">'. substr($desc,0,80) .'</p>
          <p class="text-center"><a class="btn btn-danger" href="viewdetails.php?catid='. $id .'" role="button">View details</a></p>
        </div>';
          }
      ?>  
    </div>
  </div>

 <?php 
   include 'partials/footer.php' ;
 ?> 


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>