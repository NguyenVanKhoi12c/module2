<?php
$customer_list = array(
    "1" => array("name" => "lê Duy Dương", "day_of_birth" => "1983/08/20", "address" => "Hà Nội", "profile" => ""),
    "2" =>array("name" => "Nguyễn Văn Khơi", "day_of_birth" => "1983/08/21", "address" => "Hải Dương", "profile" => ""),
    "3" =>array("name" => "lê tiến Đạt", "day_of_birth" => "1983/08/22", "address" => "Thanh Hóa", "profile" => ""),
    "4" =>array("name" => "Trần Đăng Khoa", "day_of_birth" => "1983/08/17", "address" => "Hải Phòng", "profile" => ""),
    "5" =>array("name" => "Nguyễn Đình Thi", "day_of_birth" => "1983/08/19", "address" => "Nghệ An", "profile" => "")
);
function searchByDate($customers, $from_date, $to_date) {
    if(empty($from_date) && empty($to_date)){
        return $customers;
    }
    $filtered_customers = [];
    foreach($customers as $customer){
        if(!empty($from_date) && (strtotime($customer['day_of_birth']) < strtotime($from_date)))
            continue;
        if(!empty($to_date) && (strtotime($customer['day_of_birth']) > strtotime($to_date)))
            continue;
        $filtered_customers[] = $customer;
    }
    return $filtered_customers;
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>

<?php
$from_date = NULL;
$to_date = NULL;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from_date = $_POST["from"];
    $to_date = $_POST["to"];
}
//truyền mảng $customer_list cho san vào hàm thay cho $customer
$filtered_customers = searchByDate($customer_list, $from_date, $to_date);
?>

<form method="post">
    Từ: <input id = "from" type="text" name="from" placeholder="yyyyy/mm/dd" value="<?php echo isset($from_date)?$from_date:''; ?>"/>
    Đến: <input id = "to" type="text" name="to" placeholder="yyyy/mm/dd" value="<?php echo isset($to_date)?$to_date:''; ?>"/>
    <input type = "submit" id = "submit" value = "Lọc"/>
</form>

<table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>

    <?php foreach($filtered_customers as $index => $customer): ?>

        <tr>
            <td><?php echo $index + 1;?></td>
            <td><?php echo $customer['name'];?></td>
            <td><?php echo $customer['day_of_birth'];?></td>
            <td><?php echo $customer['address'];?></td>
            <td><div class="profile"><img src="<?php echo $customer['profile'];?>"/></div> </td>
        </tr>

    <?php endforeach; ?>

</table>
</body>
</html>