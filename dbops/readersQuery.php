<?php
require "dbcon.php";

$stm = $con->prepare("SELECT * FROM readers");
$stm->setFetchMode(PDO::FETCH_ASSOC);
$stm->execute();
while ($row = $stm->fetch()) {
    $str = "<tr>";
    foreach ($row as $at){
        $str = $str . "<td>$at</td>";
    }
    echo $str . "</tr>";
}
