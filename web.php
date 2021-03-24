<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Steganography-Website</title>
</head>
<body>
  <?php
  	if(isset($_FILES['image'])){
  		$file_name = $_FILES['image']['name'];
  		$temp_file_location = $_FILES['image']['tmp_name'];

  		require 'vendor/autoload.php';

  		$s3 = new Aws\S3\S3Client([
  			'region'  => '--us-east-1--',
  			'version' => 'latest',
  			'credentials' => [
  				'key'    => "--AKIA32G24GMXDKRN4SXY--",
  				'secret' => "--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--",
  			]
  		]);

  		$result = $s3->putObject([
  			'Bucket' => '--cseassign2--',
  			'Key'    => $file_name,
  			'SourceFile' => $temp_file_location
  		]);

  		var_dump($result);
  	}
  ?>

  <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
  	<input type="file" name="image" />
  	<input type="submit"/>
  </form>

    <form action="stegano.php" method="POST">
      Provide Text to Hide:
    <input name="field1" type="text" />
    <input type="submit" name="submit" value="Save Data">
    </form>
</body>
</html>
