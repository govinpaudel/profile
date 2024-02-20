<?php
require 'connection.php';
$sql = "SELECT F3,F4,F5 FROM kitta where f12='".$_POST["gabisa"]."' and f13='".$_POST["ward"]."' and f15='".$_POST["kitta"]."'";
// echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
// output data of each row
echo "<table><tr><th>जग्गाधनीको नाम</th><th>बाबु/पतिको नाम</th><th>बाजे/ससुराको नाम</th></tr>";
while($row = $result->fetch_assoc())
{
    echo "<tr><td>" . $row["F3"]. "</td><td>" . $row["F4"]. "</td><td>" . $row["F5"]. "</td></tr>";
}
  echo "</table>";
  $sql = "SELECT DISTINCT F18,F19,F20,F21 FROM kitta where f12='".$_POST["gabisa"]."' and f13='".$_POST["ward"]."' and f15='".$_POST["kitta"]."'";
//   echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    echo "<table><tr><th>जग्गाको प्रकार</th><th> जग्गाको किसिम</th><th>जग्गाको विरह</th><th>जग्गाको क्षेत्रफल</th></tr>";
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>" . $row["F19"]. "</td><td>" . $row["F18"]. "</td><td>" . $row["F20"]."</td><td>". $row["F21"]. "</td></tr>";
    }
      echo "</table>";
}
} else
{
  echo "<table><tr><td>कुनै पनि रेकर्ड फेला परेन ।</td></tr></table>";
} 
     
?>   