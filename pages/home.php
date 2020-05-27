<?php
// Comment
/**
 * many commets
 */
if (!empty($_POST['name'])){
    $name = $_POST['name'];
}else{
    $name = 'Guest';
    $error[] = 'Enter name';
}

$var = (int)strftime('%H');
if ($var < 6) {
    $hello = 'Good night';
} elseif ($var > 6 || $var < 12) {
    $hello = 'Good Mornin';
} elseif ($var > 12 || $var < 18) {
    $hello = 'Good dey';
}
echo $hello . $name . '<br>';

if (!empty($_POST['age'])){
    $age = $_POST['age'];
}else{
    $error[] = 'Enter age';
}

if (!empty($error)){
    foreach ($error as $value){
        echo $value . ' ';
    }
}else{
    if ($age > 21){
        header('location: /pages/hi.php');
    }else{
        header('location: /pages/for_us.php');
    }
}
?>
<br>
<fieldset><legend>Authorization form</legend>
<form action="" method="post">
    Введите свое имя : <input type="text" name="name" value="<?= (!empty($_POST['name']))?$_POST['name']:''; ?>"><br>
    Введите свой возраст : <input type="text" name="age" value="<?= (!empty($_POST['age']))?$_POST['age']:''; ?>"><br>
    Введите свой Email : <input type="email" name="email" value="<?= (!empty($_POST['email']))?$_POST['email']:''; ?>"><br>
    <input type="submit"> <input type="reset">
</form>
</fieldset>