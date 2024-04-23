
<?php
include "config.php";

if(isset($_POST['submit']))
{
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $photo = $_POST['photo'];
}

$sql = "INSERT INTO Register (firstname,lastname,age,gender,photo) VALUES ('$first_name','$last_name','$age','$gender','$photo')";
$result = $conn->query($sql);

if($result == TRUE){
    echo "Insertion Successfuly!!";
}
else {
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
?>
<br><a href="view.php" target="_self" >Go to Home >></a>