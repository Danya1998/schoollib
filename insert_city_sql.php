<?php
    require_once(__DIR__."/new_connect.php");
    $mysqli = new mysqli("localhost", "root", "", "library");
    $id = $_POST['id'];
    $city=$_POST['city'];
    mysqli_set_charset($mysqli,"UTF-8");
    mysqli_character_set_name($mysqli);
    if(!$id || !$city)
    {
        echo 'Заполните все поля';
        if (!$id) echo 'Введите номер города';
        if (!$city) echo 'Введите название города';
    }

    $sql_insert= 'INSERT INTO `city` (`id`,`name`)
                            VALUES (:id,:city)';

    $sth = $pdo ->prepare($sql_insert);
    $sth->execute([':id'=>$id,':city'=>$city]);
    echo 'Информация добавлена';

?>