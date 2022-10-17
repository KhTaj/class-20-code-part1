<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include_once './vendor/autoload.php';
use Project\Controllers\Student;
$student = new Student();
$studentInfo = $student->details($_GET['id']);
print_r($studentInfo);

?>
    
<div style="width: 500px; margin: 0 auto">

<form action="./update.php?id=<?= $studentInfo['id']?>"  method="post">
 <input name="id" value="<?= $studentInfo['id']?>" type="text" placeholder="Enter your ID"></br>
 <input name="name" value="<?= $studentInfo['name']?>" type="text" placeholder="Enter your name"></br>
 <button>Update</button>
</form>
    

</body>
</html>

  


