<?php include "../konekcija/db.php";
global $connnection;
$korisnicko_ime = $_POST['korisnicko_ime'];
$telefon = $_POST['telefon'];
$lozinka = $_POST['lozinka'];
$korisnicko_ime = mysqli_real_escape_string($connnection, $korisnicko_ime );   
$telefon = mysqli_real_escape_string($connnection, $telefon );   
$lozinka = mysqli_real_escape_string($connnection, $lozinka );

    $query = "INSERT INTO korisnik(korisnicko_ime, telefon, lozinka) ";
    $query .= "VALUES ('$korisnicko_ime', '$telefon','$lozinka')";
    $result = mysqli_query($connnection, $query);

    if(!$result) {
        die('Query FAILED' . mysqli_error());
    
    }else{
    header("Location:http://localhost/automobili/index.html");
    }
    ?>