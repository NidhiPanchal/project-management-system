<?php 
//include "connect.php";
//include "main-files.php";
//include "load_files.php";
include "layout.php";
?>

<body class="group_details">
<div class="group_details">

<div class="project_navbar tab-list">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<ul class="navbar-nav nav">
				<li class="nav-item"><a class="nav-link" href="add_group.php">Add Group</a></li>
				<li class="nav-item"><a class="nav-link" href="add_std_grp.php">Add Student</a></li>
				<li class="nav-item"><a class="nav-link" href="#">View Group Details</a></li>
			</ul>
		</div>
	</nav>
</div>


<!--
<div class="project_navbar tab-list">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<ul class="nav md-pills nav-justified pills-peach-gradient">
					<li class="nav-item">
        				<a class="nav-link active" data-toggle="tab" href="#main-content-student" role="tab" id="add_std">Add group</a>
    				</li>
    				<li class="nav-item">
        				<a class="nav-link active" data-toggle="tab" href="#add_std_grp" role="tab">Add Student</a>
    				</li>
    				<li class="nav-item">
				        <a class="nav-link px-3" data-toggle="tab" href="#lol" role="tab">View Group Details</a>
				    </li>
				</ul>
			</div>
		</nav>	
	</div>

	<div class="main-content-student tab-content">
		<div  id="main-content-student" class="tab-pane">
			<?php //include "add_group.php"; ?>
		</div>
		<div id="lol" class="tab-pane">
			
		</div>
		<div id="add_std_grp" class="tab-pane">
			<?php //include "add_std_grp.php"; ?>
		</div>
	</div>
-->
</div>

<?php 
include "layout_footer.php";
include "footer.php"; ?>
