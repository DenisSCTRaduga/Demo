<?php
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Обработка форм</title>
</head>
<body>
    <div style="text-align: center">
                <form name="test" action="send.php" method="post">
                    <select name="tovar" size="1" style="width: 180">
                        <option value="tovar1" name="Товар 1">Товар 1, 10р</option>
                        <option value="tovar2" name="Товар 2">Товар 2, 20р</option>
                        <option value="tovar3" name="Товар 3">Товар 3, 30р</option>
                    </select> <br /> 
                    <label>Имя</label> <br/>
                    <input type="text" name="name" placeholder="Имя" /><br/>                  
                    <label>Комментарий</label> <br/>
                    <textarea name="message" cols="22" rows="10"></textarea>
                    <br/>
                    <input type="submit" name="done" value="Сделать заказ">
                </form> 
            <br />    
        <a href="orders.php">Заказы в базе</a>
    </div>
</body>
</html>