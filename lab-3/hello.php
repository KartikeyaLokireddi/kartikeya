<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hello.php" method="get">
        <label >username:</label><br>
        <input type="text" name="username">
        <label >password:</label><br>
        <input type="password" name="password"><br> 
        <button>Submit</button>
    </form>
</body>
<?php    
    echo $_GET["username"]."<br>";
    echo $_GET["password"]."<br>";
 ?>
</html>