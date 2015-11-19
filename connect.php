<?php
  $host = "127.0.0.1";
  $user = "nikita";
  $password = "";
  $db = "nikitabb";
  
  $dbconn = pg_connect("host=$host dbname=$db user=$user");
  
  if (!$dbconn) {
    echo "Произошла ошибка подключения к базе данных.";
    ?> <p><a href = "index.php">Вернуться на главную страницу</a></p> <?php    
    exit; }
    
  $result = pg_query($dbconn, "$sql");
  
  if (!$result) {
    echo "Произошла ошибка";
    ?> <p><a href = "index.php">Вернуться на главную страницу</a></p> <?php
    exit; }
?>
      
