<html>
   <head>
      <title>Home</title>
      <link rel="stylesheet" href="https://bootswatch.com/slate/bootstrap.min.css">
   </head>
   <body>
      <!--Container used for boostrap content-->
      <div class="container">
         <!--Navigation Menu-->
         <nav class="navbar navbar-default">
            <div class="container">
               <div class="navbar-header">
                  <a class="navbar-brand" style="color:red" >Welcome to ShopX</a>
               </div>
               <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                     <li><a href="index.php">Home</a>
                     </li>
                     <li><a href="admin.php">Admin</a>
                     </li>
					 <li><a href="#">Blog</a>
                     </li>
					 <li><a href="#">About us</a>
                     </li>
					 <li><a href="#">Contact</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <div class="jumbotron">
            <h1>Products</h1>
         </div>
		 
		<span class="btn-clipboard"></span>
         <!--PHP code for pulling data from the database-->
         <!--This Data is then formatted using html-->
         <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "project";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            
            // SELECT (whatever rows you want) FROM (your table name)
            $sql = "SELECT name, price, description FROM product";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
            		// Outputting HTML and the data from the DB. Change to $row['the name of the field you want']
                    echo "<div class='col-md-3 col-sm-6 hero-feature'><div class='thumbnail'><img src='http://placehold.it/800x500' alt=''><div class='caption'><h3>" . $row['name'] . "</h3><p>" . $row['price'] . "<p>" . $row['description'] . "</p></p><p><a href='#' class='btn btn-success'>Buy Now!</a> <a href='#' class='btn btn-info'>More Info</a></p></div></div></div>";
                }
            } 
            else {
                echo "No Products To Show";
            }
            $conn->close();
		?>
      </div>
   </body>
</html>