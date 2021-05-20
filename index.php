<!DOCTYPE html>
<html>
<head>
<title>Scanner.php | Scan a directory to its internal depth.</title>
</head>
<body>
<h1>Scan a folder to its internal depth</h1>
<?php
include 'scanner.php';
$files = scanner(".",'file'); // dir | file | both
foreach($files as $file){
  echo $file.'<br />';
}

?>
</body>
</html>