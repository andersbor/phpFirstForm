<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Early PHP example 2</title>
</head>
<body>
<h1>Hellos</h1>
<?php
$message = $_GET["message"];
// Avoid Cross-Site Scripting: The form input includes HTML elements, CSS,  or JavaScript
// Try name like <img src="http://anbo-easj.dk/cv/andersBorjesson.jpg" />
// or <script>window.alert("I rule")</script>
//$message = htmlspecialchars($message);

$howmany = $_GET["howmany"];
echo "<ol>";
for ($i = 0; $i < $howmany; $i++) {
    echo "<li>" . $message . "</li>";
}
echo "</ol>";
?>

</body>
</html>