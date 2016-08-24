<html>
<head>
	<title>Product Added</title>
	<link rel="stylesheet" href="https://bootswatch.com/slate/bootstrap.min.css">
</head>
<body>
<?php

#This is the information about your web server with the default values
#The name of your server
$servername = "localhost";

#The default user name
$username = "root";

#The default password
$password = "";

#Your database name (CHANGE THIS)
$dbname = "project";



# Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
# Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


# Get the values which the form posted to the server
# FILL IN THE NAME FIELD FROM YOUR FORM BOXES HERE
# ie. $myValue = $_POST["myValue"];
$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];


# SQL code to actually insert that data into the database table
# ENTER YOUR TABLE NAME, FIELDS, AND VALUES FROM ABOVE
# ie 
# $sql = "INSERT INTO table_name (field1, field2, field3)
# VALUES ('$var1', '$var2', '$var3')";
$sql = "INSERT INTO product (name, price, description)
VALUES ('$name', '$price', '$description')";


# Error checking to see if the record was added sucessfully
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


# Closing the connection to the Database
$conn->close();
?>

<!--Button for getting back to the home page-->
<form action="index.php">
	<button class="btn btn-success" type="submit">Home</button>
</form>

<form action="admin.php">
	<button class="btn btn-success" type="submit">Back</button>
</form>

</body>
</html>