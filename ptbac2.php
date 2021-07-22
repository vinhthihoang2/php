<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$so_a = "";
$so_b = "";
$so_c = "";
if (isset ( $_POST ['so_a'] )) {
    $so_a = $_POST ['so_a'];
}
if (isset ( $_POST ['so_b'] )) {
    $so_b = $_POST ['so_b'];
}
if (isset ( $_POST ['so_c'] )) {
    $so_c = $_POST ['so_c'];
}

function phuongTrinhBac2($a, $b, $c) {
    if ($a == "")
        $a = 0;
    if ($b == "")
        $b = 0;
    if ($c == "")
        $c = 0;

    echo "Phuong trinh bac 2:" . $a . "x^2 + " . $b . "x + " . $c . " = 0";
    echo "<br>";

    if ($a == 0) {
        if ($b == 0) {
            if ($c == 0) {
                echo "Phuong trinh co vo so nghiem";
            } else {
                echo "Phuong trinh vo nghiem";
            }
        } else {
            echo "Phuong trinh co 1 nghiem duy nhat:" . (-$c/$b);
        }
    } else {
        $delta = $b * $b - 4 * $a * $c;
        $x1 = "";
        $x2 = "";
        if ($delta > 0) {
            $x1 = (- $b + sqrt($delta)) / (2 * $a);
            $x2 = (- $b - sqrt($delta)) / (2 * $a);
            echo "Phuong trinh co 2 nghiem la:" . " x1= " . $x1 . ";" . " x2= " . $x2;
        } elseif ($delta == 0) {
            echo "Phuong trinh co nghiem kep x1 = x2 = " . (-$b / (2 * $a));
        } else {
            echo "Phuong trinh vo nghiem";
        }
    }
}
?>

<form action="#" method="post">
 <table>
  <tr>
   <td>Nhap vao a</td>
   <td><input type="text" name="so_a" value="<?=$so_a?>" /></td>
  </tr>
  <tr>
   <td>Nhap vao b</td>
   <td><input type="text" name="so_b" value="<?=$so_b?>" /></td>
  </tr>
  <tr>
   <td>Nhap vao c</td>
   <td><input type="text" name="so_c" value="<?=$so_c?>" /></td>
  </tr>
  <tr>
   <td></td>
   <td><input type="submit" value="Kết quả"></td>
  </tr>
 </table>
</form>
<br>
<?php
if (is_numeric ( $GLOBALS ['so_a'] ) && is_numeric ( $GLOBALS ['so_b'] ) 
        && is_numeric ( $GLOBALS ['so_c'] )) {
    phuongTrinhBac2 ( $GLOBALS ['so_a'], $GLOBALS ['so_b'], $GLOBALS ['so_c'] );
} else {
    echo ("Giá trị input không hợp lệ!");
}
?>

</body>
</html>