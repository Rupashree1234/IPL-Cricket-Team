<?php

   session_start();

   include('connectdb.php');
if(isset($_POST['submit'])){
    $playername = $_POST['playername'];
    $fromm = $_POST['fromm'];
    $price = $_POST['price'];
    $isplaying = $_POST['isplaying'];
    $description = $_POST['description'];
    
    $files=$_FILES['file'];
    $filename=$files['name'];
    $fileerror=$files['error'];
    $filetmp=$files['tmp_name'];
        
    $fileext= explode('.', $filename);
    $filecheck= strtolower(end($fileext));	

    $fileextstored=array('png','jpg','jpeg','jfif');
    if(in_array($filecheck,$fileextstored)){
           $destinationfile='assets/images/'.$filename;
           move_uploaded_file($filetmp, $destinationfile);   
                // Insert record
    		//Validation
    		$q = "SELECT * FROM addplayer WHERE playername = '$playername'";

    		$res = $conn->query($q);
    		$num = mysqli_num_rows($res);  

    		if ($num >= 1) {
            		header('location: index.php#error');
        
    		} else {
        		$sql = "INSERT INTO addplayer (playername ,fromm,price,isplaying,description,image) values('$playername','$fromm','$price','$isplaying','$description','$destinationfile')";

        		$result = $conn -> query($sql);
 			header('location: add-details.php#success');
    		}
    		$conn->close();
    }
}
?>