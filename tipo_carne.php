<?php
if (isset($_POST["calcular"])) {
    $tipo_carne = $_POST["tipo_carne"];
    $kilos = intval($_POST["kilos"]);
    $precio_kg = ["cerdo" => 10000, "res" => 20000, "burro" => 8000];

    if ($kilos <= 0) {
        echo "<p style='color:red;'>Error: La cantidad de kilos debe ser mayor a 0.</p>";
    } else {
        $subtotal = $precio_kg[$tipo_carne] * $kilos;
        $iva = 4000;
        $total = $subtotal + $iva;

        if (isset($_POST["bolsa"])) {
            $total += 500;
        }

        echo "<h3>Resumen de Compra:</h3>";
        echo "SUBTOTAL: $" . number_format($subtotal, 0, ',', '.') . "<br>";
        echo "IVA: $" . number_format($iva, 0, ',', '.') . "<br>";
        echo "TOTAL: $" . number_format($total, 0, ',', '.') . "<br>";
    }
}
?>

