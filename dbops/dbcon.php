<?php
try {
    $con = new PDO('mysql:dbname=php_andronov;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    echo $e->GetMessage();
}
