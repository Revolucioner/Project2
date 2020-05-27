<form action="" method="post"><legen>Enter values for table</legen><br>
    x : <input type="text" name="x"><br>
    y : <input type="text" name="y"><br>
    <input type="submit">
</form><br>
<table>
<?php
$x = empty($_POST['x']) ? 1 : $_POST['x'];
$y = empty($_POST['y']) ? 1 : $_POST['y'];
$x = (int)$x;
$y = (int)$y;
var_dump($x);
var_dump($y);
for($i = $x; $i <= 10; $i++){
    echo '<tr>';
    for($j = $y; $j <= 10; $j++){
        echo ' <td>' . $j * $i . '</td>';
    }
    echo '</tr>';
}
?>
</table>
