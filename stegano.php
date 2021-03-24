
<!--
Hello, world! I am a comment and I am
displayed in multiple lines!
<form action="stegano.php" method="POST">
  Text: <input type="text" name="texttohide">
  <input type="submit">
</form>
-->
<?php
$currentDirectory = getcwd();
$uploadDirectory = "/imagesuploaded/";

if(isset($_POST['field1'])) {
    $data = $_POST['field1'] . "\r\n";
    $filename = "mydata.txt";
    $uploadPath = $currentDirectory . $uploadDirectory;
    $ret = file_put_contents($uploadPath."mydata.txt", $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}
