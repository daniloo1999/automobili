<?php include "../konekcija/db.php";
global $connnection;
    $id = $_POST['id'];
    $query ="DELETE FROM automobil WHERE id=$id";
    $result_set=mysqli_query($connnection, $query);
    if(!$result_set){
        die("query failed"); 

}
?>