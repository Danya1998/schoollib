<?php
require_once(__DIR__."/new_connect.php");
$mysqli = new mysqli("localhost", "root", "", "library");
$school_id = $_POST['id'];
$book=$_POST['book'];
mysqli_set_charset($mysqli,"UTF-8");
mysqli_character_set_name($mysqli);
if(!$school_id || !$book)
{
    echo 'Заполните все поля';
    if (!$school_id) echo 'Enter id of the school';
    if (!$book) echo 'Enter name of the book';
}

$sql_insert= 'INSERT INTO `books` (`school_id`,`bookname`)
                            VALUES (:id,:book)';

$sth = $pdo ->prepare($sql_insert);
$sth->execute([':id'=>$school_id,':book'=>$book]);
echo 'Информация добавлена';
?>