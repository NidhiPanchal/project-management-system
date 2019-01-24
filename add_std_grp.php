<?php 
include "layout.php";

if(isset($_POST['submit'])){
	$std_id=$_POST['g_std_id'];
	$grps_id = $_POST['grps_id'];

	$sql = "INSERT INTO add_std_grp (std_id, grp_id) VALUES (:std_id,:grps_id)";
	$query = $db->prepare($sql);
	$result=$query->execute(array(
		":std_id" => $std_id,
		":grps_id" => $grps_id
	));

	header("add_std_grp.php");
}

 ?>

 <div class="project_navbar tab-list">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<ul class="navbar-nav nav">
				<li class="nav-item"><a class="nav-link" href="add_group.php">Add Group</a></li>
				<li class="nav-item"><a class="nav-link" href="add_std_grp.php">Add Student</a></li>
				<li class="nav-item"><a class="nav-link" href="view_grp_details.php">View Group Details</a></li>
			</ul>
		</div>
	</nav>
</div>

<div class="title near-moon-gradient p-4 " id="add_group">
		<h1 class="text-center">Add Student To Group</h1>
	</div>
	<div class="form-width">
	<form method="POST" action="">
		<div class="form-group">
			<div class="md-form">
			    <input value="" placeholder="Enter Student ID" type="text" id="inputPrefilledEx" class="form-control" name="g_std_id">
			</div>
			<div class="md-form">
			    <input value="" placeholder="Enter Group ID" type="text" id="inputPrefilledEx" class="form-control"name="grps_id" >
			</div>
			<div  class="d-flex justify-content-center">
				<button type="submit" class="btn btn rare-wind-gradient btn-rounded btn-lg" name="submit">SUBMIT</button>
			</div>
		</div>
	</form>
</div>
<?php include "layout_footer.php";
include "footer.php"; ?>