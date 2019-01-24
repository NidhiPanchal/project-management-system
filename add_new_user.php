<?php 
include "main-files.php";
include "connect.php";

if(isset($_POST['register'])){
	$name = $_POST['fname'];
	$password = md5($_POST['pass']);
	$type = $_POST['type'];

	$q = "INSERT INTO login (username, password, type) VALUES (:name,:passord,:type);";

	$query = $db->prepare($q);

	$result = $query->execute(array(
		":name" => $name,
		":password" => $password,
		":type" => $type
	));

	header("Location: index.php");

}

?>
<style type="text/css">
	
	.card{
		width:40%;
		margin:auto;
		margin-top:40px;
	}

</style>

<body background="img3.jpg">
<div class="card">
    <div class="card-header morpheus-den-gradient lighten-1 white-text h1 text-center">Register</div>
    <div class="card-body add_new_user text-white">
		<form method="POST">
			<div class="">
				<div class="md-form">
					<input value="" placeholder="Enter Full Name" type="text" id="inputPrefilledEx" class="form-control" name="fname">
				</div>
				<div class="md-form">
					<input value="" placeholder="Enter password" type="text" id="inputPrefilledEx" class="form-control" name="pass">
				</div>
				<div class="md-form">
					<input value="" placeholder="Re-Enter password" type="text" id="inputPrefilledEx" class="form-control" name="pass">
				</div>
				<div class="form-group">
					<select class="form-control" name="type">
						<option value="1">Administrator</option>
						<option value="2">User</option>
					</select>
				</div>
				<a class="btn near-moon-gradient text-center" href="index.php" name="register">Register</a>
			</div>
		</form>
    </div>
</div>



	
	

</body>

 <?php include "footer.php"; ?>