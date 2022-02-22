<?php include "../konekcija/db.php";
global $connnection;
$query = "SELECT * FROM karoserija";
$query_product_info=mysqli_query($connnection, $query);
if(!$query_product_info){
    die("Error");
}
echo "<option value=0>svi</option>";
while($row=mysqli_fetch_array($query_product_info)){  
    echo "<option value={$row['id']}>{$row['naziv']}</option>";
}
?>