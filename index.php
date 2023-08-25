<?php
$insert=false;
if(isset($_POST['name'])){
//set connection variables
$server="localhost";
$username="root";
$password="";
$database="ikas";

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
$gender = $_POST['gender'];
$age = $_POST['age'];
$number = $_POST['number'];
$email = $_POST['email'];
$desc = $_POST['desc'];
$sql = "INSERT INTO `trip` (`name`, `gender`, `age`, `number`, `email`, `desc`) VALUES ('$name', '$gender', '$age', '$number', '$email', '$desc');";
// echo $sql;

//execute the query
 if($connection->query($sql) == true){
    // echo"successfully inserted";
    //flag for successful insertion
    $insert=true;
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to IKAS</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <img class="bg" src="stock.jpg" alt="IKAS" srcset="">
    <div class="container">
        <h3>Welcome to IKAS .Fill the form</h3>
        <p>Know more about us Enter the below form for further process</p>
        <?php
        if($insert==true){
        echo"<p1>Thanks for submiting your form.We will be happy to see you again with us for further process</p1>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text", name="name", id="name" placeholder="Enter your name">
            <input type="text", name="gender", id="gender" placeholder="Enter your gender">
            <input type="text", name="age", id="age" placeholder="Enter your age">
            <input type="text", name="number", id="number" placeholder="Enter your number">
            <input type="text", name="email", id="email" placeholder="Enter your email">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>