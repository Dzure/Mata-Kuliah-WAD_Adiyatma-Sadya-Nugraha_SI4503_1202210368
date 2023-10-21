<!DOCTYPE html>
<html>
<head>
<title>AKN Bojonegoro</title>
</head>
<body>
<?php
function myTest() {
static $x = 0;
echo $x;
$x++;
}
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?>
</body>
</html>