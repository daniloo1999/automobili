<?php include "../konekcija/db.php";
global $connnection;
    session_start();
    $brend = $_POST['brend'];
    $model=$_POST['model'];
    $opis=$_POST['opis'];
    $url=$_POST['url'];
    $vlasnik_id=$_SESSION['korisnikid'];
    $karoserija_id=$_POST['karoserija'];
    $query ="INSERT INTO automobil(brend, model, opis, url, vlasnik_id, karoserija_id) VALUES ('$brend','$model','$opis','$url','$vlasnik_id','$karoserija_id')";
    $result_set=mysqli_query($connnection, $query);
    if(!$result_set){
        die("query failed"); 
    }
?>