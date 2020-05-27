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
 
$sql = "INSERT INTO inventar (navn, antall,antall_tilgjengelig, plassering, vekt, størrelse, kommentar) 
VALUES ('$_POST[navn]','$_POST[antall]','$_POST[antall]','$_POST[plassering]','$_POST[vekt]','$_POST[størrelse]','$_POST[kommentar]')";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.location = '/admin/inventar'</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>
</body>
</html>


