<?php 
include "layout.php";

if(isset($_POST['submit'])){
	$dead_std=$_POST['dead_std'];
/*
  $sql = "INSERT INTO create_project (dead_achieved) VALUES (:dead_std)";
  $query = $db->prepare($sql);
  $result=$query->execute(array(":dead_std" => $dead_std));
*/

  $sql = "UPDATE create_project SET dead_achieved='yes' WHERE pid=".$dead_std;
  $re = $db->prepare($sql);
  $re->execute(array(":dead_std"=>$dead_std));

	header("add_std_grp.php");
}
 ?>
<body class="create_deadline">
<div class="create_deadline">

<div class="project_navbar tab-list">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<ul class="navbar-nav nav">
				<li class="nav-item"><a class="nav-link" href="create_deadline.php">Add Achieved ID</a></li>
				<li class="nav-item"><a class="nav-link" href="view_Deadline_details.php">View Deadline Details</a></li>
			</ul>
		</div>
	</nav>
</div>

<div class="title ripe-malinka-gradient p-4 " id="add_deadline">
		<h1 class="text-center">Add Deadline Achieved</h1>
	</div>
	<div class="form-width">
	<form method="POST" action="">
		<div class="form-group">
			<div class="md-form">
			    <input value="" placeholder="Enter Project ID" type="text" id="inputPrefilledEx" class="form-control" name="dead_std">
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
			