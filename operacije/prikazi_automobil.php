<?php include "../konekcija/db.php";
    global $connnection;    
    if(isset($_POST['id'])){
    $id=$_POST['id'];
    $query = "SELECT a.brend, a.model, a.opis, a.url, k.korisnicko_ime, k.telefon, ka.naziv FROM automobil a JOIN korisnik k on a.vlasnik_id=k.id JOIN karoserija ka on a.karoserija_id=ka.id WHERE a.id=".$id;
    $query_product_info=mysqli_query($connnection, $query);
    if(!$query_product_info){
        die("Error");
    }
    while($row=mysqli_fetch_array($query_product_info)){
    echo "<div class='row'> <div class='col-md-3' style='margin-top: 38px;'>";           
    echo " <div class='list-group'>";
    echo "<li class='list-group-item active'>{$row['brend']}</li>";    
    echo "<li class'list-group-item'>{$row['model']}</li>";
    echo "<li class='list-group-item'>{$row['naziv']}</li>";
    echo "</div>";
    echo "<br>";
    echo "</div>";
    echo "<div class='col-md-9' style='margin-top: 38px;'><div class='thumbnail'><img class='img-responsive' style='height: 500px;' src='{$row['url']}'>";
    echo"<div class='caption-full'>";
    echo "<h4>{$row['brend']} {$row['model']}</h4>";
    echo "<p>{$row['opis']}</p>";
    echo "</div> </div><div class='thumbnail'><div class='user-info'><h4>{$row['korisnicko_ime']}</h4><p>Kontakt telefon: {$row['telefon']}</p></div></div></div></div>";
    }
}
    ?>