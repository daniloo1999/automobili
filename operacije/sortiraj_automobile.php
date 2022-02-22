<?php include "../konekcija/db.php";
global $connnection;
$sort=$_POST['sort'];
echo $sort;
$query = "SELECT id, brend, model, url, opis FROM automobil ORDER BY i.ime ".$sort;
$query_product_info=mysqli_query($connnection, $query);
if(!$query_product_info){
    die("Error");
}
while($row=mysqli_fetch_array($query_product_info)){
    echo "<div class='car' id='{$row['id']}' style='background: url({$row['url']}); background-size: 100% 100%; object-fit: cover; background-repeat: no-repeat;'>";
    echo "<div class='car-name'><h4>${row['brend']} {$row['model']}</h4></div>";
    echo "</div>";
}
?>