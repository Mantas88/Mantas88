<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$vardas=isset($_POST['Vardas']);
$pavarde=isset($_POST['Pavarde']);
$pat=isset($_POST['pat']);
$ar = array($vardas, $pavarde, $pat);
file_put_contents('tekstas.txt',implode(',', $ar) . "\n",  FILE_APPEND);
?>
<a href="form-post.html">111</a>
</body>
</html>
