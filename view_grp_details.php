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
	table td:nth-child(5){
		max-width:20px;
		word-break: break-word;
	}
</style>

<body class="view_grp_details">
<div class="view_grp_details"> 

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

<!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4 sunny-morning-gradient">Group Tables</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <table class="table table-bordered table-responsive-md table-striped text-center">
       
        <tr class="deep-blue-gradient">
        <th class="text-center">ID</th>
          <th class="text-center">Project Name</th>
          <th class="text-center">Group Head</th>
          <th class="text-center">Actions</th>
        </tr>

        <tbody>
        	<?php 

        	$q = "SELECT * FROM group_details";
        	$gusers = $db->query($q);
        	//$stmt->execute();
        	//$users = $stmt->fetchAll();

        	foreach ($gusers as $guser)
        	{
        		echo '
        			<tr>
			          <td class="pt-3-half" contenteditable="true">'. $guser['gid'] .'</td>
			         <td class="pt-3-half" contenteditable="true">'. $guser['grp_pname'] .'</td>
			          <td class="pt-3-half" contenteditable="true">'. $guser['grp_head'] .'</td>
			          <td>
			            <span class="table-delete" ><a href="delete.php?id='.$guser['gid'].'" class="btn-floating btn-sm blue-gradient" name="table-delete"><i class="fa fa-trash-o"></i></a></span>

			            <span class="table-edit"><a href="grp_edit.php?id='.$guser['gid'].'"  class="btn-floating btn-sm sunny-morning-gradient openPopup"><i class="fa fa-pencil"></i></a></span>

			          </td>
			        </tr>
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