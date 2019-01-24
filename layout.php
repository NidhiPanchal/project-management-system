<?php  include "connect.php";
	   include "main-files.php";
	   //include "load_files.php";

session_start();
if(!isset($_SESSION['username'])){
};

$user = $_SESSION['username'];
	    ?>

<!--layout for site-->
<body id="layout">
	
	<div class="wrapper">
		<div class="package">
			<div class="row">
				
				<div class="col-md-2 bg-primary">
					<!--sidebar-->
					<div class="sidebar-wrapper">
						<div class="sidebar">
							<div class="profile-bar">
								<div class="">
									<div class="icon">
										<img src="files/user.jpg"/>
									</div>
									<div class="profile-info">
										<div>
											<div class="type btn purple-gradient btn-rounded">
													<?php 
													echo "hello!" ." ". $user;
													echo "</br>";
													if($_SESSION['type'] == 'Administrator'){
														echo "Administrator";
													}
													else{
														echo "User";
													}
													 ?>
											 </div>
										</div>
									</div>
									<div class="vertical-nav">
										<ul class="navbar-nav">
											<li class="nav-item" ><a href="create_project.php" class="nav-link" id="project_details"><i class="fa fa-folder-open-o"> </i>    Project Details</a></li>
											<li class="nav-item" ><a href="add_student.php" class="nav-link" id="student_details"><i class="fa fa-user-circle-o">     Student Details</i></a></li>
											<li class="nav-item" id="group_details"><a href="add_group.php" class="nav-link" id="group_details"><i class="fa fa-group">     Group Details</i></a></li>
											<li class="nav-item" id="settings"><a href="create_deadline.php" class="nav-link" id="settings"><i class="fa fa-calendar">     Deadlines</i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-10 main-content-area">
					<!--main content-->	
					