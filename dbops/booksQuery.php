<?php
require "dbcon.php";

$st = $con->prepare("SELECT * FROM log_taking");
$st->setFetchMode(PDO::FETCH_ASSOC);
$st->execute();
$logs = $st->fetchAll();

$st = $con->prepare("SELECT * FROM books");
$st->setFetchMode(PDO::FETCH_ASSOC);
$st->execute();
$books = $st->fetchAll();

$st = $con->prepare("SELECT * FROM readers");
$st->setFetchMode(PDO::FETCH_ASSOC);
$st->execute();
$readers = $st->fetchAll();
foreach ($books as $book){
    $is_taken = false;
    $reader_id = 0;
    $taken_at = "";
    foreach ($logs as $log){
        if ($log["book_id"] == $book["id"] && $log["returned_at"] == null) {
            $is_taken = true;
            $reader_id = $log["reader_id"];
            $taken_at = $log["taken_at"];
        }
    }
    if (!$is_taken and array_key_exists("filter",$_GET) and $_GET["filter"] == "on")
        continue;
    $str = "<tr>";
    foreach ($book as $at){
        $str = $str . "<td>$at</td>";
    }
    if ($is_taken){
        $str = $str . "<td>Взята</td>";
        foreach ($readers as $reader) {
            if ($reader["id"] == $reader_id) {
                $name = $reader["last_name"] . " " . $reader["first_name"];
                $str = $str . "<td>$name</td>";
                break;
            }
        }
        $str = $str . "<td>$taken_at</td>";
    }
    else{
        $str = $str . "<td>Не взята</td><td>-</td><td>-</td>";
    }
    $str .= "</th>";
    echo $str;
}



