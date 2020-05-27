<html>
<body>
<?php
$host = "home.torhelge.no";
$user = "inventar";
$password = "3q6uG^5DZQY?";
$database = "inventar";
// Koble til databasen
$conn = new mysqli($host,$user,$password,$database);
if($conn->connect_error){
  die("Kunne ikke koble til database: ".$conn->connect_error);
}
$pin = "";
$pin = hash('sha512',$_POST['pin']);

$sql = "INSERT INTO brukere (fornavn, etternavn, pin, is_admin) 
VALUES ('$_POST[fnavn]', '$_POST[enavn]', '$pin', '$_POST[er_admin]')";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.location = '/admin/brukere'</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>
</body>
</html>


