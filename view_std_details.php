<?php 
include "layout.php";
/*
$sql = "UPDATE add_student SET gid= WHERE pid=".$dead_std;
  $re = $db->prepare($sql);
  $re->execute(array(":dead_std"=>$dead_std));

	header("add_std_grp.php");

*/

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
		max-width:10px;
		word-break: break-word;
	}
	table td:nth-child(4),
	table td:nth-child(5),
	table td:nth-child(6),
	table td:nth-child(7),
	table td:nth-child(8),{
		max-width:20px;
		word-break: break-word;
	}
</style>

<body class="view_std_details">
<div class="view_std_details"> 

<div class="project_navbar tab-list">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<ul class="navbar-nav nav">
				<li class="nav-item"><a class="nav-link" href="add_student.php">Add Student</a></li>
				<li class="nav-item"><a class="nav-link" href="view_std_details.php">View Student Details</a></li>
			</ul>
		</div>
	</nav>
</div>	

<!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4 night-fade-gradient">Students TABLE</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <table class="table table-bordered table-responsive-md table-striped text-center">
       
        <tr class="deep-blue-gradient">
        <th class="text-center">ID</th>
          <th class="text-center">Student Name</th>
          <th class="text-center">UserName</th>
          <th class="text-center">Group ID</th>
          <th class="text-center">Project Assigned</th>
          <th class="text-center">Email</th>
          <th class="text-center">Cell Nos</th>
          <th class="text-center">Actions</th>
        </tr>

        <tbody>
        	<?php 

        	$q = "SELECT * FROM add_student";
        	$student = $db->query($q);
        	//$stmt->execute();
        	//$users = $stmt->fetchAll();

        	foreach ($student as $std)
        	{
        		echo '
        			<tr>
			          <td class="pt-3-half" contenteditable="true">'. $std['sid'] .'</td>
			         <td class="pt-3-half" contenteditable="true">'. $std['sname'] .'</td>
			          <td class="pt-3-half" contenteditable="true">'. $std['uname'] .'</td>
			          <td class="pt-3-half" contenteditable="true">'. $std['gid'] .'</td>
			          <td class="pt-3-half" contenteditable="true">'. $std['stdproj'] .'</td>
			         <td class="pt-3-half" contenteditable="true">'. $std['email'] .'</td>
			         <td class="pt-3-half" contenteditable="true">'. $std['cell_num'] .'</td>
			          <td>
			            <span class="table-delete" ><a href="delete.php?id='.$std['sid'].'" class="btn-floating btn-sm blue-gradient" name="table-delete"><i class="fa fa-trash-o"></i></a></span>

			            <span class="table-edit"><a href="std_edit.php?id='.$std['sid'].'"  id="upd_std" class="btn-floating btn-sm sunny-morning-gradient openPopup"><i class="fa fa-pencil"></i></a></span>

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