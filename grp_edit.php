<?php 
include "connect.php";
include "main-files.php";

$gid = $_GET['id'];

if(isset($_POST['submit'])){
		$grp_pname = $_POST['grp_pname'];
		$grp_head = $_POST['grp_head'];

		$q = "UPDATE group_details SET grp_pname=:grp_pname, grp_head=:grp_head WHERE gid=:gid";

		$query = $db->prepare($q);

		$result = $query->execute(array(
			":grp_pname" => $grp_pname,
			":grp_head" => $grp_head,
			":gid" => $gid
		));

		header("Location: grp_edit.php");
}
 ?>
<body class="create_project">
<div class="create_project">
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

<!--date picker-->
            
