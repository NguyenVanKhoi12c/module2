<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["inputSTN"];
    $num2 = $_POST["inputSTH"];
    switch ($_POST["calculation"]) {
        case "cong":
            $result = $num1 + $num2;
            break;
        case "tru":
            $result = $num1 - $num2;
            break;
        case "nhan":
            $result = $num1 * $num2;
            break;
        case "chia":
            if ($num2 !== 0) {
                $result = $num1 / $num2;
                break;
            } else {
                echo "loi";
            }
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>May tinh bang</title>
</head>
<body>
<form method="post">
    <div>
        <label>So thu nhat</label>
        <input type="text" name="inputSTN">
        <label>So thu hai</label>
        <input type="text" name="inputSTH">

        <label>Phep toan</label>
        <input type="submit" value="cong" name="calculation">
        <input type="submit" value="tru" name="calculation">
        <input type="submit" value="nhan" name="calculation">
        <input type="submit" value="chia" name="calculation">
    </div>
</form>
<?php echo "Ket qua la : " . $result ?>
</body>
</html>
