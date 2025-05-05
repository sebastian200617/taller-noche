<?php
$cantidad =$_POST["cuantos"];
if($cantidad =>0)
{
    echo"digite un valor incorrecto ";
}
if($tipo==1)

    $valor=10000;
    $bubtotal=$valor * $cantidad;
    if($subtotal>10000)
    {
        $final= $subtotal - ($subtotal*0.19)
        echo $final;
    }else{
    echo $subtotal;
    }
    if($tipo==2)
{
    $valor=20000;
    $bubtotal=$valor * $cantidad;
    if($subtotal>20000)
    {
        $final= $subtotal - ($subtotal*0.19)
        echo $final;
    }else{
    echo $subtotal;
    }
}
if($tipo==3)

    $valor=8000;
    $bubtotal=$valor * $cantidad;
    if($subtotal>8000)
    {
        $final= $subtotal - ($subtotal*0.19)
        echo $final;
    }else{
    echo $subtotal;
    }


?>