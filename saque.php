<?php
header("Content-type: text/html; charset=utf8");
echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>s';

$banco = $_POST["banco"];
$agencia = $_POST["agencia"];
$conta = $_POST["conta"];
$senha = $_POST["senha"];
$dinheiro = $_POST["dinheiro"];

$nota100 = 0;
$nota50 = 0;
$nota20 = 0;
$nota10 = 0;
$nota5 = 0;
$nota1 = 0;

for ($x = 1; $x > 0; $x++) {
    if ($dinheiro >= 100) {
        $dinheiro -= 100;
        $nota100++;
    } elseif ($dinheiro >= 50) {
        $dinheiro -= 50;
        $nota50++;
    } elseif ($dinheiro >= 20) {
        $dinheiro -= 20;
        $nota20++;
    } elseif ($dinheiro >= 10) {
        $dinheiro -= 10;
        $nota10++;
    } elseif ($dinheiro >= 5) {
        $dinheiro -= 5;
        $nota5++;
    } elseif ($dinheiro >= 1) {
        $dinheiro -= 1;
        $nota1++;
    } else {
        break;
    }
}

/*$nota100 = floor($dinheiro / 100);
$resto = $dinheiro % 100;
$nota50 = floor($resto / 50);
$resto = $resto % 50;
$nota20 = floor($resto / 20);
$resto = $resto % 20;
$nota10 = floor($resto / 20);
$resto = $resto % 10;
$nota5 = floor($resto / 5);
$resto = $resto % 5;
$nota1 = floor($resto / 1);
$resto = $resto % 1;*/

?>

<style>
    img {
        max-width: 100%;
        max-height: 200px;
    }

    input {
        width: 500px;
        text-align: center;
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>

<h1 style="margin-top: 20px; margin-bottom: 20px;" align="center">Valor: <input type="number" name="num" value="<?php echo $_POST["dinheiro"] ?>" readonly></h1>

<div class="row">
    <div class="col-sm-4" align="center">
        <img src="img_notas/100reais.jpg">
        <input type="number" name="nota100" value="<?php echo $nota100 ?>" readonly>
        <img src="img_notas/10reais.jpg">
        <input type="number" name="nota10" value="<?php echo $nota10 ?>" readonly>
    </div>
    <div class="col-sm-4" align="center">
        <img src="img_notas/50reais.jpg">
        <input type="number" name="nota50" value="<?php echo $nota50 ?>" readonly>
        <img src="img_notas/5reais.jpg">
        <input type="number" name="nota5" value="<?php echo $nota5 ?>" readonly>
    </div>
    <div class="col-sm-4" align="center">
        <img src="img_notas/20reais.jpg">
        <input type="number" name="nota20" value="<?php echo $nota20 ?>" readonly>
        <img src="img_notas/1real.jpg">
        <input type="number" name="nota1" value="<?php echo $nota1 ?>" readonly>
    </div>
</div>