<?php
if(isset($_POST['submit'])){
$firstName = "firstname:".$_POST['firstName']."
";
$lastName = "lastname:".$_POST['lastName']."
";
$file=fopen("file.txt", "a");
fwrite($file, $firstName);
fwrite($file, $lastName);
fclose($file);
}
?>
