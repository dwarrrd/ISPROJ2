<?php
include("Dbconnection.php");
$db= $con;
$tableName="traveldetails";
$columns= ['SchedID', 'BusID','EmpID','ReviewsID','StartingPoint', 'Destination','SchedDate','DepTime','DepTime','EstArrivalTime','FareAmt','Remarks','AdminID'];
$fetchData = fetch_data($db, $tableName, $columns);
function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{
$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." WHERE SchedID='" . $_GET["SchedID"] . "'";
$result = $db->query($query);
if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>