<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="car.css">
    <link rel="stylesheet" href="cars2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <ul>
        <li class="image"><a href="profile.php"><img src="logo2.png" /></a></li>
        <li class="logout" style="background-color: #1c1c1c; padding-top: 12px; padding-left: 20px; color:white; border-left: 0.1mm solid white; border-right: 0.1mm solid white;"><a style="text-decoration: none; color: white; font-size: 15px;">ODJAVI SE</a></li>
    </ul>
    <div class="container">
    <?php include "konekcija/db.php";
    global $connnection;
      
    if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query = "SELECT a.brend, a.model, a.opis, a.url, k.korisnicko_ime, k.telefon, ka.naziv FROM automobil a JOIN korisnik k on a.vlasnik_id=k.id JOIN karoserija ka on a.karoserija_id=ka.id WHERE a.id=".$id;
    $query_product_info=mysqli_query($connnection, $query);
    if(!$query_product_info){
        die("Error");
    }
    while($row=mysqli_fetch_array($query_product_info)){
    echo "<div class='row'> <div class='col-md-3' style='margin-top: 38px;'>";           
    echo " <div class='list-group'>";
    echo "<li class='list-group-item active'>{$row['brend']}</li>";    
    echo "<li class='list-group-item'>{$row['model']}</li>";
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
    </div>
</body>
</html>

<script>
     $(document).ready(function(){
            $(".logout").on('click', function(){
            $.ajax({
              url:'operacije/odjavi_se.php',
              type:'POST',
              success:function(){
                location.replace('http://localhost/automobili/index.html');
              }
          }); 
         });
        });

</script>