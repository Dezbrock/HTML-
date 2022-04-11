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

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn,"SELECT * FROM Animals");

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Type</th>
<th>Color</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Type'] . "</td>";
echo "<td>" . $row['Color'] . "</td>";
echo "</tr>";
}
mysqli_close($conn);
?>
</body>
</html>
