<?php
    $tovar = $_POST['tovar'];
    $name = $_POST['name'];        
    $message = $_POST['message'];  
    $name = htmlspecialchars($name);
    $message = htmlspecialchars($message);
    $name = urldecode($name);
    $message = urldecode($message);
    $name = trim($name);
    $message = trim($message);
    
    
if (empty($name) == FALSE or empty($message) == FALSE) {
    if (mail ("denis@sctraduga.ru", "Заявка с сайта", "Товар: ".$tovar."\n Имя: ".$name."\n Комментарий: ".$message , "From:")) {     
      echo "Cообщение успешно отправлено<br />"; 
      echo "<a href=index.php>Ввернуться на главную</a>";
      $mysqli = new mysqli("localhost", "root", "", "test");
      $mysqli->query("SET NAMES 'utf8'");
      $mysqli->query("INSERT INTO `zakaz`(`tovar`, `name`, `message`) VALUES ('$tovar', '$name', '$message')");        
      $mysqli->close();
    }
}
if (empty($name) or empty($message)){
    echo "Не введены Имя и Комментарий<br />";
    echo "<a href=index.php>Ввернуться на главную</a>"; 
}
?>