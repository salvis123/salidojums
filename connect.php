<html>
  <body>
    

<?php
$firstname = htmlspecialchars($firstname);
?>

Labdien, <?php echo $_GET["firstname"]; ?>!<br>
Tu esi <?php echo (int)$_GET['age']; ?> gadus jauns.

    </body>
</html>