<?php 
include "connect.php";
include "main-files.php";

$sid = $_GET['id'];


if(isset($_POST['submit'])){
    $sname = $_POST['sname'];
    $username = $_POST['username'];
    $sproject = $_POST['sproject'];
    $email = $_POST['email'];
    $cell_no = $_POST['cell_num'];

   $q = "UPDATE add_student SET sname=:sname,uname=:username,stdproj=:sproject,email=:email,cell_num=:cell_num WHERE sid=:sid";

    $query = $db->prepare($q);

    $result = $query->execute(array(
        ":sname" => $sname,
        ":username" => $username,
        ":sproject" => $sproject,
        ":email" => $email,
        ":cell_num" => $cell_no,
        "sid" => $sid

    ));

    header("Location: view_std_details.php");
}
 ?>
<body class="add_student">
<div class="add_student">

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



<div class="title night-fade-gradient p-4 " id="add_student">
        <h1 class="text-center">Update Student Details</h1>
    </div>
    <div class="form-width" id="contact-form">
    <form method="POST" action="" data-toggle="validator">
        <div class="form-group">
            <div class="md-form">
                <input value="" placeholder="Enter Student Full Name" type="text" id="inputPrefilledEx" class="form-control" name="sname" autofocus>
            </div>
            <div class="md-form">
                <input value="" placeholder="Enter username" type="text" id="inputPrefilledEx" class="form-control" name="username" >
            </div>
            <div class="md-form">
                <input value="" placeholder="Enter Project Subject" type="text" id="inputPrefilledEx" class="form-control" name="sproject">
            </div>
            <div class="md-form">
                <input value="" placeholder="Enter Email" type="email" id="inputPrefilledEx" class="form-control" name="email"  pattern="[^ @]*@[^ @]*" title="PLease entere email in format 'globax@123.com'" required>
            </div>
            <div class="md-form">
                <input value="" placeholder="Enter Cell number" type="text" id="inputPrefilledEx" class="form-control" name="cell_num" data-maxlength="10" pattern="[0-9]{10}" maxlength="10" required>
            </div>
            <div  class="d-flex justify-content-center">
                <button type="submit" class="btn btn aqua-gradient btn-rounded btn-lg"  name="submit">SUBMIT</button>
            </div>
        </div>
    </form>
</div>



 <?php include "layout_footer.php";
include "footer.php"; ?>

<!--date picker-->
            