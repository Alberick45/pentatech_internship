<?php 

$name = "";
$age = "";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
}
echo "<h1>My name is Charles</h1>";


echo "My name is ".$name.". I am ".$age." years old.";
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Hello <?php echo $name; ?></h1>


    <form action="" method="post">
        <label for="name">
            Name
            <input type="text" name="name" id="name">
        </label>
        <label for="age">
            Age
            <input type="number" name="age" id="age">
        </label>
        <input type="submit" name="submit" id="">
    </form>
</body>
</html>