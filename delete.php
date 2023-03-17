<?php
include_once 'Dbconnection.php';
$sql = "DELETE FROM traveldetails WHERE SchedID='" . $_GET["SchedID"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
    header("Location: AdminsHome.php");


} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($con);
?>