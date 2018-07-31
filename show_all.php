
<?php

    require_once(__DIR__.'/connection.php');
    echo "<h1>MY DB</h1>";
    $link = mysqli_connect($host,$user,$password,$database)
    or die("Error".mysqli_error($link));
    $query='SELECT * FROM `city`';
    $res=mysqli_query($link,$query) or die("Error".mysqli_error($link));
    $array=$res->fetch_all();
    echo '<table border="1" cellpadding="5" style="display:inline-block;border-collapse:collapse;border:1px solid black;margin:10px 10px;">';
    echo "<tr style='font-weight: bold'><td>City id</td><td>Name of the city</td></tr>";
    foreach($array as $row)
    {
    echo '<tr>';
    foreach($row as $row_2)
    {
        echo "<td>$row_2</td>";
    }
    echo '</tr>';
    }

    echo '</table>';
    /*---------------------------------------------------*/
    require_once(__DIR__.'/connection.php');
    $link = mysqli_connect($host,$user,$password,$database)
    or die("Error".mysqli_error($link));
    $query='SELECT * FROM `school`';
    $res=mysqli_query($link,$query) or die("Error".mysqli_error($link));
    $array=$res->fetch_all();
    echo '<table border="1" cellpadding="5" style="display:inline-block;border-collapse:collapse;border:1px solid black;margin:10px 10px;">';
    echo "<tr style='font-weight: bold'><td>City id</td><td>School id</td><td>Name of the school</td></tr>";
    foreach($array as $row)
    {
    echo '<tr>';
    foreach($row as $row_2)
    {
        echo "<td>$row_2</td>";
    }
    echo '</tr>';
    }

    echo '</table>';
    /*--------------------------------------------------*/
    require_once(__DIR__.'/connection.php');
    $link = mysqli_connect($host,$user,$password,$database)
    or die("Error".mysqli_error($link));
    $query='SELECT * FROM `books`';
    $res=mysqli_query($link,$query) or die("Error".mysqli_error($link));
    $array=$res->fetch_all();
    echo '<table border="1" cellpadding="5" style="display:inline-block;border-collapse:collapse;border:1px solid black;margin:10px 10px;">';
    echo "<tr style='font-weight: bold'><td>School id</td><td>Name of the book</td></tr>";

    foreach($array as $row)
    {
    echo '<tr>';
    foreach($row as $row_2)
    {
        echo "<td>$row_2</td>";
    }
    echo '</tr>';
    }

    echo '</table>';
?>