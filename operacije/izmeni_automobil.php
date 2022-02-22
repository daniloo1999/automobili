<?php include "../konekcija/db.php";
global $connnection;
    $id = $_POST['id'];
    $brend = $_POST['brend'];
    $model=$_POST['model'];
    $opis=$_POST['opis'];
    $url=$_POST['url'];
    $karoserija_id=$_POST['karoserija'];
    $query ="UPDATE automobil SET brend='$brend', model='$model',opis='$opis',url='$url', karoserija_id=$karoserija_id WHERE id=$id";
    $result_set=mysqli_query($connnection, $query);
    if(!$result_set){
        die("query failed"); 
}
?>