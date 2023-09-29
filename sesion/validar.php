<?php

if (isset($_POST['submit'])){

   
    
    if(empty($Usuario)){
        echo "<p class='error'> Agrega tu usuario </p>";
    } else {
        if(strlen($Usuario)<5){
            echo "<p class='error'> el ususario debe tener minimo 5 caracteres</p>";
        }
    }



    if(empty($contraseña)){
        echo "<p class='error'> Agrega tu contraseña </p>";
    }else {
        
        if(!filter_var($contraseña, FILTER_VALIDATE_EMAIL)){
            echo "<p class='error'> La contraseña es incorrecta </p>";
        }
    }

}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname );


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO  login (usuario, contraseña)
VALUES ('$Usuario' , '$contraseña')";

if ($conn->query($sql) === TRUE) {
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


?>