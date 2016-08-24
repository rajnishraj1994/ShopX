<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="https://bootswatch.com/slate/bootstrap.min.css">
</head>
<body>
	<!--Container used for boostrap content-->
	<div class="container">

		<!--Navigation Menu-->
		<nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Welcome to Lesson 10</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li><a href="admin.php">Admin Panel</a>
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


	
		<h2>Welcome to the Administrator Panel</h2>
		<form action="insert.php" method="POST" onsubmit="return validate()">
			<div class="form-group">
				<p>Enter Product</p>
				<input id="name" class="form-control" type="text" name="name">
			</div>
			<div class="form-group">
				<p>Enter Price</p>
				<input class="form-control" type="text" name="price">
			</div>
			<div class="form-group">
				<p>Enter Description</p>
				<input class="form-control" type="text" name="description">
			</div>
			<button class="btn btn-success" type="submit">Add Product</button>
		</form>


	</div>

	<!--Javascript form Validation-->
	<script>
		function validate(){

			// Gets the name textbox as a variable
			var name = document.getElementById('name');

			// Checks if nothing was typed in and returns true or false
			// True = Submit the form
			// False = Don't submit the form and put up an alert
			if(name.value == ""){
				alert("Name is too short!");
				return false;
			}
			else{
				return true;
			}
		}
	</script>
</body>
</html>
