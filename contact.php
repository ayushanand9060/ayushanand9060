<?php
$insert=false;
if(isset($_POST['name'])){
//set connection variables
$server="localhost";
$username="root";
$password="";
$database="form";

//Create a database connection
$connection = mysqli_connect($server,$username,$password,$database);

//check for connection success
if(!$connection){
    die("Connection to this database is failed due to".
    mysqli_connect_error());
}
// echo"Success connecting to the db";
//collect post variables;
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$questions = $_POST['questions'];
$sql =" INSERT INTO `form` (`name`, `email`, `phone`, `questions`) VALUES ('$name', '$email', '$phone', '$questions');";
// echo $sql;
//execute the query
if($connection->query($sql) == true){
   // echo"successfully inserted";
   //flag for successful insertion
   $insert = true;
}
else{
   echo"ERROR : $sql <br> $connection->error";
}
//Close the database connection
$connection->close();

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Form </title>
    <link rel="stylesheet" href="styles.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <?php
          if($insert==true){
          echo"<p1>send</p1>";
           }
           ?>
          <form action="contact.php" method="post">
          <p class="text">
            Here in this page you can contact with us IKAS with our full support to our customers and their services we provide here .You contact us simply with us by filing up the content of this page provided below.
          </p>

          <div class="info">
            <div class="information">
             
              <p>Aman verma-977773699</p>
            </div>
            <div class="information">
              
              <p>Ikas@.com</p>
            </div>
            <div class="information">
              
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div><br>
            <div class="credit"><span style="color:rgb(184, 147, 231)"></span></a></div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle-one"></span>
          <span class="circle two"></span>

          <form action="Contact.html" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="Your name">Your name</label>
              <span>Your name</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="Your mail">Your Email</label>
              <span>Your Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="phone">Your phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="questions" class="input"></textarea>
              <label for="questions">questions</label>
              <span>questions regarding to our tender and supply ?</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
          </form>
        </div>
      </div>
    </div>

    <script src="script1.js"></script>
  </body>
</html>






