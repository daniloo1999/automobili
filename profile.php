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
        <li class="image"><a href="#"><img src="logo2.png" /></a></li>
        <li class="register" style="background-color: #1c1c1c; padding-top: 12px; padding-left: 12px; padding-top: 16px; border-right: 0.1mm solid white;"><a href="#" style="text-decoration: none; color: white; font-size: 15px;">POCETNA</a></li>
        <li class="register" style="background-color: #1c1c1c; padding-top: 12px; padding-left: 12px; border-right: 0.1mm solid white;"><a href="mojiautomobili.php" style="text-decoration: none; color: white; font-size: 15px;"><span style="padding-left:16px;">MOJI </span>AUTOMOBILI</a></li>
        <li id="logout" style="background-color: #1c1c1c; padding-top: 12px; padding-left:9px; padding-top: 16px; border-right: 0.1mm solid white;"><a style="text-decoration: none; color: white; font-size: 15px;">ODJAVI SE</a></li>
    </ul>

    <!--Search-->
   
    <div class="wrap">
        <div class="search">
         <input id="search"style="height: 36px; padding-left: 16px;" type="text" class="searchTerm" placeholder="Enter search term">
          <button type="submit" class="searchButton" style="margin-right: 20px;">
           <i style="width: 25px;" class="fa fa-search"></i>
          </button>
         <select id="select"style="width: 10vw; padding-left: 6px;">

         </select>
        </div>
    </div>


    <!--Content-->
    <div class="wrapper" style="margin-top: 140px;">
    <div class="gallery">
    </div>
</div>
</body>
</html>
<script>
    $(document).ready(function(){
             $.ajax({
                url:'operacije/prikazi_automobile.php',
                type:'POST',
                success:function(prikazi_automobile){
                    if(!prikazi_automobile.error){
                        $('.gallery').html(prikazi_automobile);
                    }
                }
  
            });  
            $.ajax({
                url:'operacije/vrati_karoserije.php',
                type:'POST',
                success:function(prikazi_automobile){
                    if(!prikazi_automobile.error){
                        $('#select').html(prikazi_automobile);
                    }
                }
  
            });
            //kada neko ukuca nesto u seaech
            $('#search').keyup(function(){
  
                var search=$('#search').val();
  
                $.ajax({
                    url:'operacije/pretrazi_automobile.php',
                    //prosledjujemo preko kljuca search atribut search
                    data:{search:search},
                    type:'POST',
                    success:function(data){
                        //ako nema greske onda u result ubacimo data koji je vracen
                        if(!data.error){
                            $('.gallery').html(data);
                            if(data==""){
                              $.ajax({
                              url:'operacije/prikazi_automobile.php',
                              type:'POST',
                              success:function(data){
                              if(!data.error){
                              $('.gallery').html(data);
                             }
                      }
                  }   );  
            console.log("prazno");
                            }
                        }
                    }  
  
                });
            });
            $('#select').change(function(){
                var e = document.getElementById("select");
                var karoserija = e.value;
                console.log(karoserija);
                if(karoserija==0){
                    $.ajax({
                url:'operacije/prikazi_automobile.php',
                type:'POST',
                success:function(prikazi_automobile){
                    if(!prikazi_automobile.error){
                        $('.gallery').html(prikazi_automobile);
                    }
                }
  
            });  
                }else{
                    $.ajax({
                url:'operacije/vrati_automobile_po_karoseriji.php',
                type:'POST',
                data:{karoserija:karoserija},
                success:function(prikazi_automobile){
                    if(!prikazi_automobile.error){
                        $('.gallery').html(prikazi_automobile);
                    }
                }
            });  
                }
            });
            $(".gallery").on('click','.car', function(){
                location.replace('http://localhost/automobili/prijavljenautomobil.php?id='+this.id);
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