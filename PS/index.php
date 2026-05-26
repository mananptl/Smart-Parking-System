    <?php
include("conn.php");
$result = $conn->query("SELECT * FROM parking_slots");
?>

<!DOCTYPE html>
<html>
<head>
<title>Smart Parking System</title>

<meta http-equiv="refresh" content="2">

<style>

body{
font-family:Arial;
background:#f4f4f4;
text-align:center;
margin-top:50px;
}

table{
margin:auto;
border-collapse:collapse;
width:70%;
background:white;
box-shadow:0 0 10px rgba(0,0,0,0.2);
}

th,td{
border:1px solid #ddd;
padding:12px;
font-size:18px;
}

th{
background:#2c7be5;
color:white;
}

.empty{
color:green;
font-weight:bold;
}

.occupied{
color:red;
font-weight:bold;
}

</style>
</head>

<body>

<h1>🚗 Smart Parking Dashboard</h1>

<table>

<tr>
<th>Location</th>
<th>Slot Number</th>
<th>Status</th>
<th>Timing</th>
</tr>

<?php
while ($row = $result->fetch_assoc()) {
?>

<tr>

<td><?php echo $row['location']; ?></td>

<td><?php echo $row['slot_number']; ?></td>

<td class="<?php echo $row['status']; ?>">
<?php echo ucfirst($row['status']); ?>
</td>

<td><?php echo $row['timing']; ?></td>

</tr>

<?php
}
?>

</table>

</body>
</html>

<?php $conn->close(); ?>