<html>
  <head>
  </head>
  <body>
  
    <?php
      $table = "news";
      $sql = "select * from $table order by id asc";
      include 'connect.php';    
          
      while ($row = pg_fetch_row($result)) {
        echo "№: $row[0]"; ?> 
        <a href = "topic.php?id= <?php echo $row[0]; ?>"> <?php echo "Новость: $row[1]";?> </a> 
        <?php echo "<br>";
      }
      pg_close();
    ?>
    
    <form action = add_news.php method = "post">
      <p><input type = "text" name = "str"></p>
      <p><input type = "submit" value = "Добавить новость"></p>
    </form>
    
  </body>
</html>
