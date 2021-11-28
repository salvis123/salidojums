< ? php

if (isset($_POST['firstname'])) {
   $data = $_POST['firstname'];

   $fp = fopen('data.txt', 'a');
   fwrite($fp, $data);
   fclose($fp);
} ?
>