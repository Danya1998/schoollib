<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php echo "<h2>Удалить книгу по id?</h2>";?>
<form method='POST'>
    <input type='text' name='number'placeholder="Choose id of the book">
    <input type='submit' value='Delete' >
</form>
<?php
require_once(__DIR__.'/new_connect.php');
if(isset($_POST['number'])) {
    $delete_row=(int)$_POST['number'];
    $delete = "DELETE FROM books WHERE school_id=$delete_row";
    $result = $pdo->exec($delete);
    if ($result) echo "Operation run succefully";
}
?>
</body>
</html>
