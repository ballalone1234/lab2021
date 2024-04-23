<?php class Data
{
    function Data()
    {
        $this->id = "";
        $this->name = "";
        $this->age = 0;
        $this->Photo = "";
    }
}
$id = $_GET["id"];
// connect to the database 
$conn = mysqli_connect("localhost", "root", "", "Student");
$conn->query("SET NAMES UTF8");
$sql = "SELECT * FROM profile WHERE ID LIKE '%$id%'";
$rs = $conn->query($sql);

// loop through results of database query, displaying them in the table 
while ($row = $rs->fetch_assoc()) {
    $myObj = new Data();
    $myObj->id = $row['ID']; 
    $myObj->name = $row['Name']; 
    $myObj->age = $row['Age'];
    $myObj->photo = $row['Photo'];

    $myJSON = json_encode($myObj,JSON_UNESCAPED_UNICODE);
}
 echo $myJSON ;
$conn->close();
