<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sample.php" method="post">
        <input type="checkbox" name="food[]" value="Pizza" >
        Pizza<br>
        <input type="checkbox" name="food[]" value="Hamburger" >
        Hamburger<br>
        <input type="checkbox" name="food[]" value="Hotdog" >
        Hotdog<br>
        <input type="checkbox" name="food[]" value="Taco" >
        Taco<br>
        <button name="submit" value="Submit">Submit</button>
    </form>
</body>
</html>
<?php 
   $foods=$_POST["food"];
   foreach($foods as $food){
    echo $food."<br>";
   }
?>