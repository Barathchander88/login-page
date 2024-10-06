<?php 
if ($_SERVER['REQUEST_METHOD']== "POST"){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $host ="localhost";    
      $dbusername = "root";
      $dbpassword="";
      $dbname = "barath";

      $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
      if($conn -> connect_error){
            die("connection failed:".$conn->connect_error);

      }
      $query = "SELECT * FROM LOGIN WHERE username='$username' and password = '$password'"; 
      $result = $conn->query($query);
      if ($result->num_rows == 1){
            header("Location:success.html");
            exit();
      }
      else{
            header("Location:error.html");
            exit();

      }
      $conn->close();
}

?>