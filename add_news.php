<?php
  $txt = $_POST['str'];
  
  if ($txt) {
    $sql = "insert into news (title) values ('$txt')";
    include 'connect.php';
    if ($result) {
      echo "Новость создана<br>";
      echo "<a href=index.php>Вернуться</a>"
      ?> <p><a href = "index.php">Вернуться на главную страницу</a></p> <?php ;
    } else {
      echo "Ошибка, новость не создана";
      ?> <p><a href = "index.php">Вернуться на главную страницу</a></p> <?php }
  }
?>
