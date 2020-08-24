<?php
// post record
$name = $_POST['name'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$birth = $_POST['birth'];
$email = $_POST['email'];
$password = $_POST['password'];




//dp connection

$servername= 'localhost';
$username ='root';
$password = '';
$dbname ='univesity';

$conn= new mysqli("localhost", "root", '',"university");

if($conn-> connect_error)
{
    die('connection failed  :' .$conn ->$connect_error );
}
else {
    $sql =("INSERT INTO students (name,phone,gender,birth,email,password) VALUES('$name','$phone','$gender','$birth','$email','$password')");
}



 
$sql = mysqli_query($conn ,$sql);

if ($sql == True){
    echo "Data inserted successfully!!";
}
else{
    echo "Data inserted unsuccessfully!!";
}


?>
