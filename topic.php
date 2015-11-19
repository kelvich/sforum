<html>
  <head>
  </head>
  <body>
  
    <?php
      $id = $_GET['id'];
      $tablet = "news";
      $sql = "select * from $tablet where id='$id'";
      
      include 'connect.php';    
          
      $row = pg_fetch_row($result);
      echo "№: $row[0] Новость: $row[1] <br>";
      
      $tablea = "answers";
      $sqla = "select * from $tablea where news_id='$id'";
      
      include 'fetch_answers.php';
      
      while ($rowa = pg_fetch_row($resulta)) {
        echo "$rowa[2]<br>"; }
    ?>
    
    <form action = add_answer.php method = "post">
      <p><input type = "text" name = "str"></p>
      <p><input type = "submit" value = "Добавить комментарий"></p>
      <p><input name = "id" type = "hidden" value = "<?php echo $id; ?>"></p>
    </form>
    
    <?php
      pg_close();
    ?>
    <p><a href = "index.php">Вернуться на главную страницу</a></p>
  </body>
</html>
