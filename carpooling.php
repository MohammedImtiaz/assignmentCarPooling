<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<style>
	#form{
		width:50vh;
		margin:auto;
		padding-top:5rem;
	}
</style>
<body>
	<h1>CAR Pooling</h1>

<div id='form' >

<form action="carproject.php" method="post">
<div class="form-group">
    <label for="employee_id">Employee Id</label>
    <input type="number" class="form-control" id="employee_id" placeholder="Enter ID" name="employee_id" required>
  </div>
  <div class="form-group">
    <label for="destination">Destination</label>
    <input type="text" class="form-control" id="destination" placeholder="Enter your destination" name="destination" required>
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
  <label for="price">Price</label>
      <select id="price" class="form-control" placeholder="Select Range" name="price">
        <option selected>USD</option>
        <option>1000-2000</option>
        <option>2000-3000</option>
        <option>3000-4000</option>
        <option>4000-5000</option>
        <option>5000-10000</option>
      </select>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</div>

</body>
</html>



<?php
	function sub(){

	$employee_id = $_POST['employee_id'];
	$destination = $_POST['destination'];
	$price = $_POST['price'];
	$email = $_POST['email'];

	// Database connection
	$conn = new mysqli('localhost','root','','carpolling');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$query = $conn->prepare("insert into carpolling(employee_id, destination, email, price) values(?, ?, ?, ?)");
		$query->bind_param("isss", $employee_id, $destination, $email, $price);
		$exe = $query->execute();
		//echo $exe;
		echo "Registration successfully...";
		$query->close();
		$conn->close();
	}
	}
	

	if(isset($_POST['submit']))
		{
		sub();
		}
?>
