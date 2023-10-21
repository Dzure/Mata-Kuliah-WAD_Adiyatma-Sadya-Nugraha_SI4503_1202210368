<!DOCTYPE html>
<html>
<head>

<title>AKN Bojonegoro</title>
<style>

h1{backgroud-color:#F9A145}

</style>
<script>
function myFunction() {

var x = document.getElementById("demo");
x.style.fontSize = "25px";
x.style.color = "red";

}
</script>

</head>
<body>

Percobaan
<h1>My first PHP page</h1>
<?php

$hello="Hello World";
echo "<p id='demo'>".$hello."</p>";

?>
<button type="button" onclick="myFunction()">Click Me!</button>

</body>
</html>