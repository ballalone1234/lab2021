<?php
include "config.php";


    $id = $_REQUEST['id'];
    $first_name = $_POST['name'];
    $age = $_POST['age'];
    $photo = $_POST['photo'];
    
    $sql = "UPDATE Profile SET Name = '$first_name', Age = '$age',Photo ='$photo', ID = '$id' WHERE ID = '$id'";
    
    $result = $conn->query($sql);
    
    if($result == TRUE){
        echo "Update Successfully!!";
    }
    else{
        echo "Error".$sql."<br>".$conn->error;
        
    }


?>
<br><a href="view.php" target="_self" >Go to Home >></a>