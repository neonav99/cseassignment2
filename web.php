<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Steganography-Website</title>
</head>
<body>
    <form action="uploads.php" method="post" enctype="multipart/form-data">
        Upload a File:
        <input type="file" name="the_file" id="fileToUpload">
        <input type="submit" name="submit" value="Start Upload">
    </form>
    <form action="stegano.php" method="POST">
      Provide Text to Hide:
    <input name="field1" type="text" />
    <input type="submit" name="submit" value="Save Data">
    </form>
</body>
</html>
