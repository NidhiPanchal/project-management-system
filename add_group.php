<?php 
include "layout.php";

if(isset($_POST['submit'])){
		$grp_pname = $_POST['grp_pname'];
		$grp_head = $_POST['grp_head'];

		$q = "INSERT INTO group_details (grp_pname, grp_head) VALUES (:grp_pname,:grp_head);";

		$query = $db->prepare($q);

		$result = $query->execute(array(
			":grp_pname" => $grp_pname,
			":grp_head" => $grp_head
		));

		header("Location: add_group.php");
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

<div class="title sunny-morning-gradient p-4 " id="add_group">
		<h1 class="text-center">Group Details</h1>
	</div>
	<div class="form-width">
	<form method="POST" action="">
		<div class="form-group">
			<div class="md-form">
			    <input value="" placeholder="Enter Project Name" type="text" id="inputPrefilledEx" class="form-control"name="grp_pname" >
			</div>
			<div class="md-form">
			    <input value="" placeholder="Enter Group Head" type="text" id="inputPrefilledEx" class="form-control" name="grp_head">
			</div>
			<div  class="d-flex justify-content-center">
				<button type="submit" class="btn btn ripe-malinka-gradient btn-rounded btn-lg" name="submit">SUBMIT</button>
			</div>
		</div>
	</form>
</div>

<?php include "layout_footer.php";
include "footer.php"; ?>