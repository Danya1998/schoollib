<style>
    input{
        display:block;
        margin:20px 0;
        height:40px;
        width:230px;
        border-radius:7px;
        border-color:blue;
        font-size:14px;
    }
    input[type="submit"]{
        margin-left:65px;
        display:block;
        width:100px;
        height:40px;
        font-size:14px;
        border-radius:5px;
    }
</style>

<form action="edit_school.php" method="POST">
    <p>Field's with * must be field in</p>
    <input type="number" name="id" placeholder="Order,which you want to edit">
    <input type="number" name="sch_id" placeholder="Order,which you want to edit">
    <input type="text" name="name" placeholder="Город">
    <input type="submit" value="Send" name="Send">
</form>

<?php
if(isset($_POST['Send']))
{
    require_once(__DIR__ . '/new_connect.php');
    $name = $_POST['name'];
    $sch_name = (int)$_POST['sch_id'];
    $edit_row = (int)$_POST['id'];


    $sql = 'UPDATE school SET sch_id=:sch_id,nameschool = :name
              WHERE city_id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':sch_id', $sch_name, PDO::PARAM_INT);
    $stmt->bindParam(':id', $edit_row, PDO::PARAM_INT);
    $stmt->execute();
}
?>