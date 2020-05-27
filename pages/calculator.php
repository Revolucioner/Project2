<fieldset><legend>Калькулятор</legend>
<form action="" method="post">
    <input type="text" name="value1"><br>
    <input type="text" name="value2"><br>
    <select name="action">
        <option selected  value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="submit"><br>
</form>
</fieldset>
<?php
    $value1 = $_POST['value1']??'';
    $value2 = $_POST['value2']??'';
    $value1 = (int)$value1;
    $value2 = (int)$value2;
    if(!empty($_POST['action'])){
        if ($_POST['action'] == "-"){
            echo $value1 - $value2;
        }elseif($_POST['action'] == "+"){
            echo $value1 + $value2;
        }elseif($_POST['action'] == "/"){
            echo $value1 / $value2;
        }elseif($_POST['action'] == "*"){
            echo $value1 * $value2;
        }
    }
?>