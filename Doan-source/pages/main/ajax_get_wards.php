<?php
require 'config-test.php';
$district_id = $_GET['DistrictID'];

// echo $district_id;

$sql = "SELECT * FROM `wards` WHERE `DistrictID` = '$district_id'";
$result = mysqli_query($conn, $sql);


$data[0] = [
    'id' => null,
    'name' => 'Chọn một xã/phường'
];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = [
        'id' => $row['WardsID'],
        'name' => $row['name']
    ];
}
echo json_encode($data);
?>
