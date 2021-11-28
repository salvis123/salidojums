<?php
error_reporting(E_ALL);
?>
Hi <?php $fname = htmlspecialchars( $fname ); echo $_POST['firstname']; ?>.
You are <?php echo $_POST['age']; ?> years old.