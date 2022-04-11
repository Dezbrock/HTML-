<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="final.css">
<head>
  <title>New Post Results</title>
</head>
<body>
  <h1>New Missing Animal Post Results</h1>
  <?php
$servername = "localhost";
$username = "Des";
$password = "Des123";
$dbname = "Animals";
$Name=$_POST['Name'];
$Type=$_POST['Type'];
$Color=$_POST['Color'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$query = "INSERT INTO Animals (Name, Type, Color) VALUES (?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param('sss', $Name, $Type, $Color);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo  "<p>Thank You! Your Animal has been added to The database!</p>";
} else {
    echo "<p>An error has occurred.<br/>
          The item was not added.</p>";
}
$conn->close();
?>
</body>
</html>
