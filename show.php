<?php
require_once(__DIR__.'/show_all.php');
?>
<!Doctype HTML>
<html>
<head>
        <meta charset="utf-8">
        <title>Library DB</title>
    <style>
        body{
            background-color: hotpink;
        }
        table{
            text-align: center;
        }
    </style>
</head>
<body>
    <select id="city">
        <?php
        require_once (__DIR__.'/connection.php');
        $link=mysqli_connect($host,$user,$password,$database)
        or die("Error".mysqli_error($link));
        mysqli_set_charset($link, 'utf8');
        $query = 'SELECT * FROM city';
        $result = mysqli_query($link,$query) or die("Error".mysqli_error($link));
        if($result){
            $rows= mysqli_num_rows($result);
            for($i=0;$i<$rows;$i++){
                $row=mysqli_fetch_row($result);
                for($j=1;$j<2;$j++) echo "<option>$row[$j]</option>";
            }
            mysqli_free_result($result);
        }
        mysqli_close($link);
        ?>
    </select>
    <select id="school">
        <?php
        require_once (__DIR__.'/connection.php');
        $link=mysqli_connect($host,$user,$password,$database)
        or die("Error".mysqli_error($link));
        mysqli_set_charset($link, 'utf8');
        $query = 'SELECT * FROM school';
        $result = mysqli_query($link,$query) or die("Error".mysqli_error($link));
        if($result){
            $rows= mysqli_num_rows($result);
            for($i=0;$i<$rows;$i++){
                $row=mysqli_fetch_row($result);
                for($j=2;$j<3;$j++) echo "<option>$row[$j]</option>";
            }
            mysqli_free_result($result);
        }
        mysqli_close($link);
        ?>
    </select>
    <select id="books">
        <?php
        require_once (__DIR__.'/connection.php');
        $link=mysqli_connect($host,$user,$password,$database)
        or die("Error".mysqli_error($link));
        mysqli_set_charset($link, 'utf8');
        $query = 'SELECT * FROM books';
        $result = mysqli_query($link,$query) or die("Error".mysqli_error($link));
        if($result){
            $rows= mysqli_num_rows($result);
            for($i=0;$i<$rows;$i++){
                $row=mysqli_fetch_row($result);
                for($j=1;$j<2;$j++) echo "<option>$row[$j]</option>";
            }
            mysqli_free_result($result);
        }
        mysqli_close($link);
        ?>
    </select>
    <?php
    require_once(__DIR__.'/mysql.php');
    ?>
</body>
</html>