<?php 
include "layout.php";

if(isset($_POST['submit'])){
	$proj_name = $_POST['proj_name'];
	$client_name = $_POST['client_name'];
	$proj_category = $_POST['proj_category'];
	$version = $_POST['pversion'];
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	$description = $_POST['description'];
	$proj_type = $_POST['proj_type'];

	$q = "INSERT INTO create_project (project_name,client_name,category, version, start_date, end_date, description,proj_type) VALUES (:proj_name,:client_name,:proj_category,:pversion,:start_date,:end_date,:description,:proj_type);";

	$query = $db->prepare($q);

	$result = $query->execute(array(
		":proj_name" => $proj_name,
		":client_name" => $client_name,
		":proj_category" => $proj_category,
		":pversion" => $version,
		":start_date" => $start_date,
		":end_date" => $end_date,
		":description" => $description,
		":proj_type" => $proj_type
	));

	header("Location: create_project.php");
}
 ?>
<body class="create_project">
<div class="create_project">

<div class="project_navbar tab-list">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<ul class="navbar-nav nav">
				<li class="nav-item"><a class="nav-link" href="create_project.php">Create Project</a></li>
				<li class="nav-item"><a class="nav-link" href="view_project_details.php">View Project Details</a></li>
			</ul>
		</div>
	</nav>
</div>

<div class="title ripe-malinka-gradient p-4 " id="add_group">
		<h1 class="text-center">Create Project</h1>
	</div>
	<div class="form-width">
	<form method="POST" action="">
		<div class="form-group">
			<div class="md-form">
			    <input value="" placeholder="Enter Project Name" type="text" id="inputPrefilledEx" class="form-control"name="proj_name" >
			</div>
			<div class="md-form">
			    <input value="" placeholder="Enter Client Name" type="text" id="inputPrefilledEx" class="form-control" name="client_name">
			</div>
			<div class="md-form">
			    <input value="" placeholder="Enter Category " type="text" id="inputPrefilledEx" class="form-control" name="proj_category">
			</div>
			<div class="md-form">
			    <input value="" placeholder="Enter version" type="text" id="inputPrefilledEx" class="form-control" name="pversion">
			</div>
			<div class="md-form">
				<select placeholder="Project type" id="proj_type" name="proj_type" class="form-control">
					<option>Group</option>
					<option>Individual</option>
				</select>
			</div>
			

			<div class="row">
				<div class="col">
					<label for="start-date" class="text-muted">Start Date</label>
					<div class="md-form">
						<input type="date" id="datepicker1" class="form-control" placeholder="start-date" name="start_date">
					</div>
				</div>
				<div class="col">
					<label for="end-date" class="text-muted">End Date</label>
					<div class="md-form">
						<input type="date" id="datepicker2" class="form-control" placeholder="end-date" name="end_date">
					</div>
				</div>
			</div>

			<div class="md-form">
				<textarea col="5" class="form-control" id="inputPrefilledEx" name="description" placeholder="Enter Project Description" maxlength="200"></textarea>
			</div>
			<div  class="d-flex justify-content-center">
				<button type="submit" class="btn btn ripe-malinka-gradient btn-rounded btn-lg" name="submit">SUBMIT</button>
			</div>
		</div>
	</form>
</div>




 <?php include "layout_footer.php";
include "footer.php"; ?>

<!--date picker-->
			