<?php 

include 'config.php';

        $sid=$_POST['job_id'];
        $job_name = $_POST["job_name"];
        $job_description = $_POST["job_description"];
        $job_category = $_POST["job_category"];
        $price = $_POST["price"];

		$update="UPDATE job_posts set job_name='$job_name', category='$job_category',job_description='$job_description',price='$price'
		WHERE jod_id='$sid'";

		if(mysqli_query($conn,$update))
		{
			echo "Data Updated Successfully";
            header("Location: viewpost.php");
		}


?>