<!DOCTYPE html>
<html>
<head>
    <title>Suma de 4 números</title>
</head>
<body>
    <h1>Suma de 4 números</h1>
    
    <?php
 $duplicados= ["1","2","3","4","3","4","7","1"];
  print_r($duplicados);
   echo "<br>";
$tam= count($duplicados);
 

for($q=0;$q<$tam;$q++){
    $suma=0;
    for ($w=$q+1;$w<$tam-1;$w++) {
       if($duplicados[$q]==$duplicados[$w]){
        $suma++;
       }
    }
    if($suma > 0){
        echo"el $duplicados[$q] se repte";
    }

}

    


    
    
    
    ?>
    
  
   
</body>
</html>