<?php
  $txt = $_POST['str'];
  $id = $_POST['id'];
  
  if ($txt) {
    $sql = "insert into answers (news_id, answer) values ('$id','$txt')";
    include 'connect.php';
    if ($result) {
      echo "Ответ добавлен<br>";
      echo "<a href='topic.php?id=".$id."'>Вернуться</a>";
      ?> <p><a href = "index.php">Вернуться на главную страницу</a></p> <?php      
    } else {
      echo "Ошибка, ответ не добавлен"; 
      ?> <p><a href = "index.php">Вернуться на главную страницу</a></p> <?php }
  }
?>
