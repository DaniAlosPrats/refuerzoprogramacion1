<!DOCTYPE html>
<html>
<head>
    <title>Suma de 4 números</title>
</head>
<body>
    <h1>Suma de 4 números</h1>
    
    <?php
    $numbers=["1","2","3","4","5","6","7","8","9","10"];
    $pares=[];
    $impares=[];
    $pospar=0;
    $posimpar=0;
  
 foreach($numbers as $numero){
    if ($numero%2==0) {
        $pares[$pospar]=$numero;
        $pospar++;
    }else{
        $impares[$posimpar]=$numero;
        $posimpar++;
    }
}
echo"numeros pares";
print_r($pares);
echo"<br>";
echo"numeros impares";
print_r($impares);

    


    
    
    
    ?>
    
  
   
</body>
</html>