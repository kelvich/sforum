<?php
  $resulta = pg_query($dbconn, "$sqla");
  
  if (!$resulta) {
    echo "Произошла ошибка.\n";
    echo "<br />\n";
    exit;
    ?> <p><a href = "index.php">Вернуться на главную страницу</a></p> <?php }
?>
