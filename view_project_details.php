<?php 
include "layout.php";



?>

<style type="text/css">
.table{
	width:310px
	border:1px solid red;
}
table td:nth-child(1){
	max-width:10px;
}
	table td:nth-child(2){
		max-width:80px;
		word-wrap:break-word;
	}	
	table td:nth-child(3){
		max-width:50px;
		word-break: break-word;
	}
	table td:nth-child(4),
	table td:nth-child(5),
	table td:nth-child(6),
	table td:nth-child(7),
	table td:nth-child(8),
	table td:nth-child(9),
	table td:nth-child(10){
		max-width:20px;
		word-break: break-word;
	}
</style>

<body class="view_project_details">
<div class="view_project_details"> 

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

<!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4 near-moon-gradient">PROJECTS TABLE</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <table class="table table-bordered table-responsive-md table-striped text-center">
       
        <tr class="deep-blue-gradient">
        <th class="text-center">ID</th>
          <th class="text-center">Project Name</th>
          <th class="text-center">Client Name</th>
          <th class="text-center">Category</th>
          <th class="text-center">Version</th>
          <th class="text-center">Assignee</th>
          <th class="text-center">Start-Date</th>
          <th class="text-center">End-date</th>
          <th class="text-center">Deadline Achieved</th>
          <th class="text-center">Decription</th>
          <th class="text-center">Actions</th>
        </tr>

        <tbody>
        	<?php 

        	$q = "SELECT * FROM create_project";
        	$users = $db->query($q);
        	//$stmt->execute();
        	//$users = $stmt->fetchAll();

        	foreach ($users as $user)
        	{
        		echo '
        			<tr>
			          <td class="pt-3-half" contenteditable="true">'. $user['pid'] .'</td>
			         <td class="pt-3-half" contenteditable="true">'. $user['project_name'] .'</td>
			          <td class="pt-3-half" contenteditable="true">'. $user['client_name'] .'</td>
			          <td class="pt-3-half" contenteditable="true">'. $user['category'] .'</td>
			          <td class="pt-3-half" contenteditable="true">'. $user['version'] .'</td>
			         <td class="pt-3-half" contenteditable="true">'. $user['proj_type'] .'</td>
			         <td class="pt-3-half" contenteditable="true">'. $user['start_date'] .'</td>
			          <td class="pt-3-half" contenteditable="true">'. $user['end_date'] .'</td>
			          
			          <td class="pt-3-half" contenteditable="true"><a href="#" >'.$user['dead_achieved'].'</td>
			    		
			          <td class="pt-3-half" contenteditable="true"><a href="#" data-toggle="modal" data-target="#mymodel"><u>View Description</u></a></td>
			          <td>
			            <span class="table-delete" ><a  href="delete.php?id='.$user['pid'].'"  class="btn-floating btn-sm blue-gradient" name="table-delete"><i class="fa fa-trash-o"></i></a></span>

			            <span class="table-edit"><a href="edit.php?id='.$user['pid'].'" class="btn-floating btn-sm sunny-morning-gradient  edit"><i class="fa fa-pencil"></i></a></span>

			          </td>
			        </tr>

			        <div class="modal" id="mymodel" tabindex="-1" role="dialog">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title">Description</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        '.$user['description'].'
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>

        		';
        	}


        	 ?>
        </tbody>

      </table>
    </div>
  </div>
</div>
<!-- Editable table -->


</div>	
</body>
<?php 
include "layout_footer.php";
include  "footer.php";
?>