<html>
<i><h2> Here is The info about the investigated company:</h2></i>
<?php
session_start();
include 'database2.php';
$img=$_SESSION['img'];
$des=$_SESSION['des'];
echo "<h2>About Company:$des</h2><br>";
echo "<img src='$img'><br>";
readfile($_SESSION['info']);
?>
</html>
