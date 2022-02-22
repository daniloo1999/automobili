<?php include "../konekcija/db.php";
global $connnection;



$korisnicko_ime = $_POST['korisnicko_ime'];
$lozinka = $_POST['lozinka'];
$telefon = $_POST['telefon'];

$korisnicko_ime = mysqli_real_escape_string($connnection, $korisnicko_ime);
$lozinka = mysqli_real_escape_string($connnection, $lozinka);

$query = "INSERT INTO Korisnik(korisnicko_ime, lozinka, telefon) ";
$query .= "VALUES ('$korisnicko_ime', '$lozinka','$telefon')";

$result = mysqli_query($connnection, $query);

if (!$result) {
    die('Query FAILED');
} else {
    header("Location:http://localhost/automobili/index.html");
}
