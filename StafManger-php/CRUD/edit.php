<?php
include_once '../class/StudentManager.php';
include_once '../class/Student.php';
include_once '../class/DBConnect.php';

$manager = new StudentManager();
$index = $_GET['id'];
$stmt = $manager->findStudentById($index);
$name = $stmt['name'];
$phone = $stmt['phone'];
$image = $stmt['image']
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
   <form action="UPDATE.php" method="post" enctype="multipart/form-data">
       <table>
           <tr style="display: none">
               <td><input type="text" name="id" value="<?php echo $index ?>"></td>
           </tr>
           <tr>
               <td>Name:</td>
               <td><input type="text" name="name" value="<?php echo $name ?>"></td>
           </tr>
           <tr>
               <td>Phone Number:</td>
               <td><input type="text" name="phone" value="<?php echo $phone ?>"></td>
           </tr>
           <tr>
               <td>image</td>
               <td><img src="../upload/<?php echo $image?>" alt="<?php echo $id ?>"><input type="file" name="image">
               </td>
           </tr>
           <tr>
               <td>
                   <input type="submit" value="update">
               </td>
           </tr>
       </table>
   </form>


</body>
</html>