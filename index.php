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
    session_start();
    // include_once './store.php';
    $students = $_SESSION['students'] ?? [];
?>


    <?php 

        if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
        echo $_SESSION['message'] ?? null;
    ?>
<a href="./create.php">Create</a>
    <table border="1" style="width: 100%;" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <div>
                
            </div>
        
            <?php
                foreach($students as $student){?>
                <tr>
                    <td><?php echo $student['id']?></td>
                    <td><?php echo $student['name']?></td>
                    <td>
                        <!-- <a href="#">Edit</a>| -->
                        <a href="show.php?id=<?=$student['id']?>">Show</a>|
                        <a href="edit.php?id=<?=$student['id']?>">Edit</a>|
                        <a href="delete.php?id=<?=$student['id']?>" onclick="return confirm('Are you sure that you want to delete?')">Delete</a>
                    </td>
                </tr>

                <?php }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>