<?php
include_once "class/DBConnect.php";
include_once "class/Student.php";
include_once "class/StudentManager.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <td style="width: 200px">ID</td>
        <td style="width: 200px">Name</td>
        <td style="width: 200px">Phone Number</td>
    </tr>

    <?php
    $manager = new StudentManager();
    $students = $manager->getAll();
    foreach ($students as $key => $student): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $student->name; ?></td>
            <td><?php echo $student->phone; ?></td>
        </tr>
    <?php endforeach; ?>

</table>
</form>
</body>
</html>

