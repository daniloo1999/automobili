<?php include "../konekcija/db.php";
global $connnection;
$search=$_POST['search'];
if(!empty($search) || $search=""){
$query = "SELECT id,brend, model, opis, url FROM automobil WHERE brend LIKE '$search%'";
$query_product_info=mysqli_query($connnection, $query);
if(!$query_product_info){
    die("Error");
}
$count=mysqli_num_rows($query_product_info);
if($count<1){
    echo "<h3 style=\"padding-left: 16px; width:30vw;\">Nema automobila sa zadatim nazivom</h3>";
}
while($row=mysqli_fetch_array($query_product_info)){
    echo "<div class='car' id='{$row['id']}' style='background: url({$row['url']}); background-size: 100% 100%; object-fit: cover; background-repeat: no-repeat;'>";
    echo "<div class='car-name'><h4>${row['brend']} {$row['model']}</h4></div>";
    echo "</div>";
}
}
?>