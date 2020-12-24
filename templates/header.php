<header>
    <h1>Привет мир!</h1>
    <ul>
        <li><a href=<?php require "conf/configuration.php"; echo $vk?>>Моя страница вк</a></li>
        <li>Моя почта: <?php require "conf/configuration.php"; echo $email;?></li>
        <li>Мой тел: <?php echo $tel_number;?></li>
    </ul>
    <br>
</header>
<ul>
    <a href="readers.php" class="btn btn-outline-primary">Читательсы</a>
    <a href="books.php" class="btn btn-outline-danger">Книжы</a>
</ul>
<hr>
