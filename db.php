<?php
//connecting to sql
$con=mysqli_connect("localhost","root","vsspl","sample_db");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

/*
 //Create database
$sql="CREATE DATABASE sample_db";
if (mysqli_query($con,$sql))
  {
  echo "Database my_db created successfully";
  }
else
  {
  echo "Error creating database: " . mysqli_error($con);
  }
 
 //creating table
$tb="CREATE TABLE Persons(FirstName CHAR(30),LastName CHAR(30),Age INT)";


if (mysqli_query($con,$tb))
  {
  echo "Table persons created successfully<br>";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
  
 //inserting data
 mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('Priya', 'yelchuru',23)");

mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('pratyusha', 'chaudhary',24)");
 

 //deleting data
 
  mysqli_query($con,"DELETE FROM Persons WHERE LastName='yelchuru'");
  mysqli_query($con,"DELETE FROM Persons WHERE LastName='chaudhary'");
 */
 
 //retrieving data
 echo"<h3>retriving data<h3>";
 $result = mysqli_query($con,"SELECT * FROM Persons");

while($row = mysqli_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName']. " " .$row['Age'];
  echo "<br>";
  }
  
 //retrieving data in html table format
 
 $result = mysqli_query($con,"SELECT * FROM Persons");
echo"<h5>retriving data in table format</h5>";
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
  
 
?>