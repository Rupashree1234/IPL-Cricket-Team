<?php

   session_start();

   include('connectdb.php');
if(isset($_POST['submit'])){
    $teamname = $_POST['search'];
    
    //Validation
    		$q = "SELECT * FROM addteam WHERE teamname = '$teamname'";

    		$res = $conn->query($q);
    		$num = mysqli_num_rows($res);  

    		if ($num >= 1) {
            		header('location: team-details.php?name='.$teamname);
        
    		} else {
 			header('location: index.php');
    		}
    		$conn->close();
    
}
?>