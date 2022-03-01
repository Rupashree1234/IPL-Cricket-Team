<?php

   session_start();

   include('connectdb.php');
if(isset($_POST['submit'])){
    $teamname = $_POST['teamname'];
    $playerno = $_POST['playerno'];
    $won = $_POST['won'];
    $batsman = $_POST['batsman'];
    $bowler = $_POST['bowler'];
    
    $files=$_FILES['file'];
    $filename=$files['name'];
    $fileerror=$files['error'];
    $filetmp=$files['tmp_name'];
        
    $fileext= explode('.', $filename);
    $filecheck= strtolower(end($fileext));	

    $fileextstored=array('png','jpg','jpeg');
    if(in_array($filecheck,$fileextstored)){
           $destinationfile='assets/images/'.$filename;
           move_uploaded_file($filetmp, $destinationfile);   
                // Insert record
            	//Validation
    		$q = "SELECT * FROM addteam WHERE teamname = '$teamname'";

    		$res = $conn->query($q);
    		$num = mysqli_num_rows($res);  

    		if ($num >= 1) {
            		header('location: index.php#error');
        
    		} else {
        		$sql = "INSERT INTO addteam (teamname ,playerno,won,batsman,bowler,image) values('$teamname','$playerno','$won','$batsman','$bowler','$destinationfile')";

        		$result = $conn -> query($sql);
 			header('location: add-details.php#success');
    		}
    		$conn->close();
    }
}
?>