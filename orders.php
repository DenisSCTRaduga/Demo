<?php
function printResult($result_set) {
    echo "Количество записей равно - ". $result_set->num_rows."<hr />";
    while (($row = $result_set->fetch_assoc()) != FALSE) {
        print_r ($row);
        echo "<br />";
    }

}

    $mysqli = new mysqli("localhost", "root", "", "test");
    $mysqli->query("SET NAMES 'utf8'");
    $result_set = $mysqli->query("SELECT * FROM `zakaz`");
    printResult($result_set);
    $mysqli->close ();
    
    echo "<br />"."<a href=index.php>Вернуться на главную</a>";
?>