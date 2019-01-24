<?php

try{
	$db = new pdo("mysql:host=localhost;dbname=proj_manag_sys","root","");

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Connected successfully";
}
catch(PDOException $e)
{
	//echo "Connection failed: ". $e->getMessage();
}

//$sql = "INSERT INTO add_student (sname, uname, sid, gid, stdproj) VALUES ('nidhi','username','','1','kljflsfkf')";

//$db->exec($sql);

?>