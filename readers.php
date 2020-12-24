<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require "templates/links.php"; ?>
    <title>Читатели</title>
</head>
<body class="table table-dark">
<?php require "templates/header.php"; ?>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Номер</th>
        <th scope="col">Имя</th>
        <th scope="col">Фамилия</th>
    </tr>
    </thead>
    <?php
    require "dbops/readersQuery.php";
    ?>
</table>
<?php require "templates/footer.php"; ?>
</body>
</html>