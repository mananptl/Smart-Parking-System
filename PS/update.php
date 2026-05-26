<?php
include("conn.php");

if(isset($_GET['slot']) && isset($_GET['status'])){

$slot = $_GET['slot'];
$status = $_GET['status'];

$sql = "UPDATE parking_slots 
        SET status='$status', timing=NOW() 
        WHERE slot_number='$slot'";

if ($conn->query($sql) === TRUE){
echo "Updated";
}else{
echo "Error";
}

}else{
echo "Invalid request";
}

$conn->close();
?>