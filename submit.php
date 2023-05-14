<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $name = $_POST["name"];
  $contact = $_POST["contact"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // Create a database connection
  $servername = "sql212.epizy.com";
  $username = "epiz_34152178";
  $password = "Lczfj4Pum3CT";
  $dbname = "epiz_34152178_portfolio";

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  // Insert data into the database
  $sql = "INSERT INTO ContactQueries (name, contactNo, email, message) VALUES ('$name', '$contact', '$email', '$message')";
  
  if (mysqli_query($conn, $sql)) 
  {
    echo "Data added successfully";
    //sleep(4);
    //$url = "http://sauravanand.infinityfreeapp.com/contact.html";
    //header("Location: $url");
    //$message = "Your request has been processed successfully.";
    //echo "<script>alert('$message');</script>";
  } else 
  {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  // Close database connection
  mysqli_close($conn);
}
?>
