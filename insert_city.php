<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <head>

        <title>Insert city</title>
    </head>
    <body>
        <p style="color: cyan;font-size: 20px;">Enter the new city</p>
        <form action="insert_city_sql.php" method="POST">
            <p><input type="number" name="id" placeholder="Введите id"></p>
            <p><input type="text" name="city" placeholder="Введите имя города"></p>
            <p><input type="submit" value="Send"></p>
        </form>
    </body>
</html>