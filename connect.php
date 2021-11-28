<html>
  <body>
    

<?php
$fname = htmlspecialchars($fname);
?>

Welcome <?php echo $_POST["firstname"]; ?>!<br>
You are <?php echo (int)$_POST['age']; ?> years old.
    </body>
</html>