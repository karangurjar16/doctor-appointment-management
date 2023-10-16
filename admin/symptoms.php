<?php
include "connect.php";
if (isset($_GET['q'])) {
    $qs = $_GET['q'];
    if ($qs == "") {
        $q = "select symptoms.*,medicine.* from symptoms,medicine where symptoms_name='xyz'";
    } else {
        $q = "select symptoms.*,medicine.* from symptoms,medicine where symptoms_name like '%$qs%'";
    }
} else {
    $q = "select symptoms.*,medicine.* from symptoms,medicine where symptoms.medicine_id=medicine.medicine_id";
}

$res = mysqli_query($cn, $q) or die(mysqli_error($cn));
$cnt = mysqli_num_rows($res);
if ($cnt == 0) {
    // echo "<table padding='50px'; align='center'; class=table table-hover width=800>";
    echo "<table align='center' class=table table-hover>";
    echo "No record found";
    echo "</table>";
} else {


    echo "<table class=table tabel-hover width=800>";
    echo "<tr><th>Symptoms Name</th><th>Medicine Name</th><th>price</th></tr>";
    while ($info = mysqli_fetch_array($res)) {
        echo "<tr>";
        echo "<td>";
        echo $info['symptoms_name'];
        echo "</td>";
        echo "<td>";
        echo $info['medicine_name'];
        echo "</td>";
        echo "<td>";
        echo $info['price'];
        echo "</td>";
        echo "<td>";
        echo "<a href=acceptsm.php?aid=" . $info['symptoms_id'] . ">Add</a>";
        echo "</td>";
        // echo "<td>";
        // echo "<a href=accept.php?aid=" . $info['appointment_id'] . ">Accept</a>";
        // echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>

<!-- $q = "select symptoms.*,medicine.* from symptoms,medicine where symptoms.symptoms_id=medicine.medicine_name medicine_name like '%$qs%'"; -->