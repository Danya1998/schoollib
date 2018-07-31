<?php
require_once(__DIR__."/new_connect.php");
$mysqli = new mysqli("localhost", "root", "", "library");
$city_id = $_POST['id'];
$sch_id=$_POST['ids'];
$name=$_POST['name'];
mysqli_set_charset($mysqli,"UTF-8");
mysqli_character_set_name($mysqli);
if(!$city_id || !$sch_id||!$name)
{
    echo 'Заполните поля';
    if (!$city_id) echo 'Enter city id';
    if (!$sch_id) echo 'Enter which school id is it';
    if (!$name) echo 'Enter school number';
}

$sql_insert= 'INSERT INTO `school` (`city_id`,`sch_id`,`nameschool`)
                            VALUES (:id,:ids,:name)';

$sth = $pdo->prepare($sql_insert);
$sth->execute([':id'=>$city_id,':ids'=>$sch_id,':name'=>$name]);
echo 'Информация добавлена';

?>