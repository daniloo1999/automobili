<?php include "../konekcija/db.php";
    global $connnection;    
    $id=$_POST['id'];
    $query = "SELECT a.id, a.brend, a.model, a.opis, a.url, ka.naziv FROM automobil a JOIN karoserija ka on a.karoserija_id=ka.id WHERE a.id=".$id;
    $query_product_info=mysqli_query($connnection, $query);
    if(!$query_product_info){
        die("Error");
    }
    while($row=mysqli_fetch_array($query_product_info)){
        echo "<div class='form' style='margin-top: -440px;'><form class='add-form'><input rel='{$row['id']}' id='brend1' type='text' value='{$row['brend']}' /><input id='model1' type='text' value='{$row['model']}'/>
            <input id='opis1' type='text' value='{$row['opis']}'/>
            <input id='url1' type='text' value='{$row['url']}'/><select id='select1' style='width: 10vw; padding-left: 6px;'>";
            $query1 = "SELECT * FROM karoserija";
                $query_product_info1=mysqli_query($connnection, $query1);
                if(!$query_product_info1){
                    die("Error");
                }
                while($row1=mysqli_fetch_array($query_product_info1)){  
                    if($row1['naziv']==$row['naziv']){
                        echo "<option value={$row1['id']} selected>{$row1['naziv']}</option>";
                    }else{
                        echo "<option value={$row1['id']}>{$row1['naziv']}</option>";
                    }
                }
            echo "</select><button id='{$row['id']}' class='changeCar'>Change</button></form></div>";
    }
    ?>