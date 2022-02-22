<?php include "../konekcija/db.php";
global $connnection;
session_start();
$korisnicko_ime = $_POST['korisnicko_ime'];
$lozinka = $_POST['lozinka'];

$query = "SELECT * FROM korisnik WHERE korisnicko_ime='$korisnicko_ime' and lozinka='$lozinka'";
$query_product_info=mysqli_query($connnection, $query);
if(!$query_product_info){
    die("Error");
}
$count=mysqli_num_rows($query_product_info);

if($count<1){
    echo "Pogresno korisnicko ime ili lozinka";
}
while($row=mysqli_fetch_array($query_product_info)){
    $_SESSION['korisnik']=$row['korisnicko_ime'];
    $_SESSION['korisnikid']=$row['id'];
}
