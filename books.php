<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require "templates/links.php"; ?>
    <title>Книги</title>
</head>
<body class="bg-dark text-white">
<?php require "templates/header.php"; ?>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Номер</th>
        <th scope="col">Название</th>
        <th scope="col">Год выпуска</th>
        <th scope="col">Состояние</th>
        <th scope="col">Кем взята</th>
        <th scope="col">Дата взятие</th>
    </tr>
    </thead>
    <?php
    require "dbops/booksQuery.php";
    ?>

</table>
<a href="books.php?filter=on" class = "btn btn-outline-primary">Включить фильтр</a>
<a href="books.php " class = "btn btn-outline-danger">Выключить фильтр</a>
<?php require "templates/footer.php"; ?>
</body>
</html>