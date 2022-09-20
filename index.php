
<?php


$servername = "localhost";
$username = "root";
$password = "Abood_93";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


// $sql = "CREATE DATABASE myDB";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }


if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
 
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('$firstname', '$lastname', '$email')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Data</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="firstname" placeholder="Enter First Name" required >
        <input type="text" name="lastname" placeholder="Enter Last Name" required>
        <input type="text" name="email" placeholder="Enter Email" required>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
// $servername = "localhost";
// $username = "root";
// $password = "Abood_93";
// $dbname = "mydb";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// // prepare sql and bind parameters

// if(isset($_POST['submit'])){
//     $firstname = $_POST['firstname'];
//     $lastname = $_POST['lastname'];
//     $email = $_POST['email'];
//     $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, 
// email) 
// VALUES (:firstname, :lastname, :email)");
//     $stmt->bindParam(':firstname', $firstname);
//     $stmt->bindParam(':lastname', $lastname);
//     $stmt->bindParam(':email', $email);

// // insert a row
//     $firstname = $_POST["firstname"];
//     $lastname = $_POST["lastname"];
//     $email = $_POST["email"];
//     $stmt->execute();


//     echo "New records created successfully";
// }}
// catch(PDOException $e)
// {
//     echo "Error: " . $e->getMessage();
// }
// $conn = null;
?>



 <!-- <!DOCTYPE html>
<html>
<head>
     <title>Insert Data</title>
 </head>
 <body>
    <form action="" method="post">
        <input type="text" name="firstname" placeholder="Enter First Name" required >
        <input type="text" name="lastname" placeholder="Enter Last Name" required>
         <input type="text" name="email" placeholder="Enter Email" required>
        <input type="submit" name="submit" value="Submit">
     </form>
 </body>
 </html> -->