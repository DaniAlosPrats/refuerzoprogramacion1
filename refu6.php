<!DOCTYPE html>
<html>
<head>
    <title>lista</title>
</head>
<body>
    <h1>lista</h1>

    <?php
    $notas=["2","7","8","5","6","8","9.4","3","9.2","10"];
    $maxnotas=max($notas);
    $minnotas=min($notas);
    
    $clavemax=array_search($maxnotas, $notas);
    $clavemin=array_search($minnotas, $notas);
    unset($notas[$clavemax]);
    unset($notas[$clavemin]);
print_r($notas);
echo"<br>";

    $suma=0;
        foreach($notas as $numero){
            $suma=+ $numero;
        }
        $numeroelemto= count($notas);
        if($numeroelemto>0){
            $media=$suma/$numeroelemto;
            echo"la media es $media";

        }    
    
    
    
   


      
    ?>
    
</body>
</html>
