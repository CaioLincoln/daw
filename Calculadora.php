<?php
if(is_numeric ("N1")==false){
    echo "Número 1 não valido,";
    $R="entre com um número válido";
}else{
if(is_numeric ("N2")==false){
    echo "Número 2 não valido,";
    $R="entre com um número válido";
}else{
$N1=$_POST["N1"];
$N2=$_POST["N2"];

$Op=$_POST["oper"];
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $R;
    switch($Op){
        case 1:
            $R=$N1+$N2;
        break;
        case 2:
            $R=$N1-$N2;
        break;
        case 3:
            $R=$N1*$N2;
        break;
        case 4:
            if($N2==0){
                echo "Não é possivel dividir por ou de 0";
            }else{
                $R=$N1/$N2;
            }
        break;
        case 5:
            $R=pow($N1,$N2);
        break;
        case 6:
            $N1=sqrt($N1);
            $R=N1;
        break;
        case 7:
            $R=$N1/1;
        break;
        case 8:
            $R=$N1*($N2*0.01);
        break;
    }
    
}
}
}
?>
<!DOCTYPE html>
    <head></head>
    <body style="text-align: center;padding-top: 120px;font-size: 20px">
        <a><?php echo $R; ?></a>
        <br><br>
        <a href="Teste.html">
        <button>Calculadora</button>
        </a>
    </body>
<html>