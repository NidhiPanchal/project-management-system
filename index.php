<?php
	include "main-files.php";
	include "connect.php";
	
        if(isset($_POST['username']) && isset($_POST['password'])){
          $username = $_POST['username'];
          $password = md5($_POST['password']);
          $stmt = $db->prepare("SELECT * FROM login WHERE username=? AND password=? ");
          $stmt->bindParam(1, $username);
          $stmt->bindParam(2, $password);
          $stmt->execute();
          $row = $stmt->fetch();
          $user = $row['username'];
          $pass = $row['password'];
          $id = $row["u_id"];
          $type = $row['type'];
          if($username==$user && $pass==$password){
            session_start();
            $_SESSION['username'] = $user;
            $_SESSION['password'] = $pass;
            $_SESSION['u_id'] = $id;
            $_SESSION['type'] = $type;
            
?>
<script type="text/javascript">window.location.href='create_project.php'</script>
 <?php
          }
          else
          {
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Invalid!</strong> incorrect username or password
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
          }
        }
    ?>
<body background="img3.jpg">
<div class="m-auto login-form">
	<form method="POST" class="p-2 flex-fill">
		<div>
			<h1 class="amber-text">LOGIN</h1>
		</div>

		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" class="form-control"/>
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" name="submit" class="btn ripe-malinka-gradient" value="SUBMIT"/>
      <!--<a href="add_new_user.php" class="mt-3 float-right h6">New? Register</a>-->
		</div>
	</form>
</div>
</body>
<?php include "footer.php"; ?>