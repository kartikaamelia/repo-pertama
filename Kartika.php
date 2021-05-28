<?php
<--Bagian yang diedit-->
header('Content-Type: application/json');
$conn = mysqli_connect("localhost", "root", "", "pmb_kartikaameliarahmawati");
$sqlQuery = "SELECT Monthname(bulan) as bulan, jumlahPendaftar, jumlahDiterima 
FROM penerimaan ORDER BY MONTH(bulan) DESC";
$result = mysqli_query($conn,$sqlQuery);
$data = array();
foreach ($result as $row) {
       $data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);
?>
