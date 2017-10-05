<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>PHP first form</title>
</head>
<body>
<h1>A simple form</h1>

<form action="showIt.php" method="post">
    Name <input type="text" name="name"/>
    <br/>
    Age <input type="number" name='age'/>
    <input type="submit"/>
</form>

<h2>Another form</h2>
Input is only allowed inside a form element.
<form action="showhello.php" method="get">
    Message <input type="text" name="message"/>
    <br/>
    How many <input type="number" name="howmany"/>
    <input type="submit">
</form>
</body>
</html>
