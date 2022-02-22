<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>

    <!--Menu-->
    <ul>
        <li class="image"><a href="profile.php"><img src="logo2.png" /></a></li>
        <li class="register" style="background-color: #1c1c1c; padding-left: 12px; padding-top: 16px; border-right: 0.1mm solid white;"><a href="profile.php" style="text-decoration: none; color: white; font-size: 15px;">POCETNA</a></li>
        <li class="register" style="background-color: #1c1c1c; padding-top: 12px; padding-left: 12px; border-right: 0.1mm solid white;"><a href="#" style="text-decoration: none; color: white; font-size: 15px;"><span style="padding-left:16px;">MOJI </span>AUTOMOBILI</a></li>
        <li id="logout" style="background-color: #1c1c1c; padding-left:9px; padding-top: 16px; border-right: 0.1mm solid white;"><a style="text-decoration: none; color: white; font-size: 15px;">ODJAVI SE</a></li>
    </ul>
    <div class="wrap">
        <div class="search">
        <span><h3 style="margin-right: 10px;">Želite li da dodate novi automobil ?</h3></span>
          <button id="addbtn" style="background: lightblue; height: 40px; border: none; margin-top:10px; color: white; cursor: pointer;">
              ADD
          </button>
        </div>
    </div>
    <!--Content-->
    <div class="wrapper" style="margin-top: 100px;">
    <div class="gallery">
    </div>
    <div class="add-new" id="forma" style="margin-top: -400px;">
        <div class="form">
          <form class="add-form">
            <input id="brend"type="text" placeholder="brend"/>
            <input id="model"type="text" placeholder="model"/>
            <input id="opis" type="text" placeholder="opis"/>
            <input id="url" type="text" placeholder="url"/>
            <select id="select"style="width: 10vw; padding-left: 6px;">

            </select>
            <button id="addCar">Save</button>
          </form>
        </div>
      </div>
      <div class="add-new" id="izmeni">

      </div>
</div>
</body>
</html>
<script>
    $(document).ready(function(){
        document.getElementById("forma").style.display = "none";
             $.ajax({
                url:'operacije/prikazi_automobile_korisnika.php',
                type:'POST',
                success:function(prikazi_automobile){
                    if(!prikazi_automobile.error){
                        $('.gallery').html(prikazi_automobile);
                    }
                }
  
            }); 
            $("#addbtn").on('click', function(){
            $.ajax({
              url:'operacije/vrati_karoserije.php',
              type:'POST',
              success:function(pozicije){
                  if(!pozicije.error){
                      $('#forma').toggle();
                      $('#select').html(pozicije);
                  }
              }

          }); 

         });
         $("#addCar").on('click', function(){
            var brend=document.getElementById("brend").value;
            var model=document.getElementById("model").value;
            var opis=document.getElementById("opis").value;
            var url=document.getElementById("url").value;
            var karoserija=document.getElementById("select").value;
            $.ajax({
              url:'operacije/dodaj_automobil.php',
              type:'POST',
              data:{brend:brend, opis:opis, model:model, url:url, karoserija:karoserija},
              success:function(){
                location.reload();
              }

          }); 

         });
         $(".gallery").on('click','.btn-delete', function(){
             var id=this.id;
            $.ajax({
              url:'operacije/obrisi_automobil.php',
              type:'POST',
              data:{id:id},
              success:function(){
                    location.reload();
              }
          }); 
         });
         $(".gallery").on('click','.btn-edit', function(){
             var id=this.id;
            $.ajax({
              url:'operacije/prikazi_korisnikov_automobil.php',
              type:'POST',
              data:{id:id},
              success:function(data){
                $('#izmeni').html(data);
              }
          }); 
         });
         $("#izmeni").on('click','.changeCar', function(){
            var brend=document.getElementById("brend1").value;
            var model=document.getElementById("model1").value;
            var opis=document.getElementById("opis1").value;
            var url=document.getElementById("url1").value;
            var karoserija=document.getElementById("select1").value;
            var id1=document.getElementById("brend1");
            id=$(id1).attr('rel');
            console.log(karoserija);

            $.ajax({
              url:'operacije/izmeni_automobil.php',
              type:'POST',
              data:{id:id, brend:brend, opis:opis, model:model, url:url, karoserija:karoserija},
              success:function(data){
                location.reload();

              }
          }); 
         });
         $("#logout").on('click', function(){
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