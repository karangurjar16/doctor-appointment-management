<?php
include "connect.php";
if (isset($_GET['q'])) {
    $qs = $_GET['q'];
    if ($qs == "") {
       $q = "select * from generic_medicine where mname='xxxxyz'";
    } else {
        $q = "select * from generic_medicine where mname like '%$qs%'";
    }

}else{
    $q = "select * from generic_medicine";
}

$res = mysqli_query($cn, $q) or die(mysqli_error($cn));
$cnt=mysqli_num_rows($res);
if($cnt==0)
{
    echo "<table  class='table tabel-hover width=800'>";
    echo "No Data Found"; 
    echo "</table>";
}
else{

echo "<table class='table tabel-hover width=800'>";
echo "<tr><th>Medicine Name</th><th>generic name</th><th>price</th></tr>";
while ($info = mysqli_fetch_array($res)) {
    echo "<tr>";
    echo "<td>";
    echo $info['mname'];
    echo "</td>";
    echo "<td>";
    echo $info['gname'];
    echo "</td>";
    echo "<td>";
    echo $info['gprice'];
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
}
?>