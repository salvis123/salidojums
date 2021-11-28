<?php
if(isset($_POST['submit'])){
$firstName = "firstName:".$_POST['firstName']."
";
$lastName = "lastName:".$_POST['lastName']."
";
$file=fopen("file.txt", "a");
fwrite($file, $firstName);
fwrite($file, $lastName);
fclose($file);
}
?>