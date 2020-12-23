<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Читатели</title>
</head>
<body class="table table-dark">
<ul>
    <a href="readers.php" class="btn btn-outline-primary">Читательсы</a>
    <a href="books.php" class="btn btn-outline-danger">Книжы</a>
</ul>
<hr>
<div class="jumbotron text-dark">
    <div class="container">
        <h1>Привет всем на нашем сайте</h1>
        <h3>Привет ))!0</h3>
        <p>Какой то текст.</p>
    </div>
</div>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">Номер</th>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
        </tr>
        </thead>
        <?php
            require "readersQuery.php";
        ?>
    </table>
    2020 г. тел.: 3228 1332 28
</body>
</html>