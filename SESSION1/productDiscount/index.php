<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tinh phan tram</title>
</head>
<body>
<form method="post" action="productDiscount.php">
    <div>
        <label>Mô tả Sản phẩm: </label>
        <input type="text" name="description">
        <label>Giá sản phẩm : </label>
        <input type="text" name="price">
        <label>Phần trăm chiết khấu: </label>
        <input type="text" name="discount">
    </div>
    &nbsp;
    <div id="buttons">
        <input type="submit" value="CalculateDiscount"/>
    </div>
</form>
</body>
</html>
