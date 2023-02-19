<?php

include 'config.php';

$id=$_POST['id'];
$result="DELETE FROM job_posts WHERE jod_id='$id'";
$sql=mysqli_query($conn,$result);
if($sql)
{
	echo "record deleted";
}


?>