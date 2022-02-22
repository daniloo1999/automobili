<?php include "../konekcija/db.php";
global $connnection;

session_start();
$korisnik = $_SESSION['korisnik'];
$query = "SELECT a.id, a.brend, a.model, a.url, a.opis, k.naziv FROM automobil a JOIN karoserija k on a.karoserija_id=k.id JOIN korisnik ko on ko.id=a.vlasnik_id  WHERE ko.korisnicko_ime='$korisnik'" ;
$query_product_info=mysqli_query($connnection, $query);
if(!$query_product_info){
    die("Error");
}
while($row=mysqli_fetch_array($query_product_info)){
    echo "<div><div class='car' id='{$row['id']}' style='background: url({$row['url']}); background-size: 100% 100%; object-fit: cover; background-repeat: no-repeat;'>";
    echo "<div class='car-name'><h4>${row['brend']} {$row['model']}</h4></div></div>";
    echo "<button class='btn-edit' id='{$row['id']}'style='background-color: orange; color: white; margin-top: 4px; padding: 6px; border: none;'>Change</button>";
    echo  "<button class='btn-delete' id='{$row['id']}'style='background-color: red; color: white; margin-top: 4px; padding: 6px; border: none;'>Remove</button>";
    echo "</div>";
}
