<?php

if(isset($_POST["submit"]))  //check submit button is pressed
{

$name = $_POST["name"];  // get name from URL

echo($name);  //Print Name

$file = Fopen("db.txt","a+"); //create a file if not exists

fwrite($file,"\n".$name); // fwrite(file_object, data to store);

}
?>