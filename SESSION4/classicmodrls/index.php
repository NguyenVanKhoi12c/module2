<?php
$managerOrder = new OrderManager();
$pagition = new Pagination();
$total_pages = $pagition->getTotalPages();
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
};
$start = ($page - 1) * $pagition->limit;
$orders = $managerOrder->getOrderLimitPage($start, $pagition->limit);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        table, td {
            border: 1px solid black;
        }

        td {
            width: 150px;
            text-align: center;
        }
    </style>
    <title>Document</title>
</head>
<body>
<h1>Danh sách đơn hàng</h1>
<table>
    <tr>
        <td>STT</td>
        <td>Mã đơn hàng</td>
        <td>Ngày đặt</td>
        <td>Ngày Giao</td>
        <td>Trạng thái</td>
    </tr>
    <?php foreach ($orders as $key => $order): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><a href="order_detail.php?id=<?php echo $order->code ?>"><?php echo $order->code ?></a></td>
            <td><?php echo $order->orderDate ?></td>
            <td><?php echo $order->shipDate ?></td>
            <td><?php echo $order->status ?></td>
            <td><a href="CRUD/del.php?id=<?php echo $order->code ?>"
                   onclick="return confirm('bạn muốn xóa không ?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php
$pagLink = "<ul class='pagination'>";
for ($i = 1; $i <= $total_pages; $i++) {
    $pagLink .= "<li class='page-item'><a class='page-link' href='Create_object.php?page=" . $i . "'>" . $i . "</a></li>";
}
echo $pagLink . "</ul>";
?>
</body>
</html>
