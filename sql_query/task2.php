<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-2</title>
    <?php include("bootstrap.php") ?>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Order Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total Ammount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("database.php");
                $sql = "SELECT a.`order_id`,b.`quantity` ,c.`name`,d.`total_amount`from `orders` a 
                LEFT JOIN `order_items` b ON a.`order_id`=b.`order_id`
                LEFT JOIN `products` c ON  b.`product_id`=c.`product_id`
                LEFT JOIN `orders` d  ON d.`order_id`=a.`order_id`";
                $result = $conn->query($sql);
                while ($row = $result->fetch_array()) {
                    $order_id = $row[0];
                    $name = $row[2];
                    $quantity = $row[1];
                    $total_ammount = $row[3];
                    echo "<tr>
                    <th scope='row'>" . $order_id . "</th>
                    <td>" . $name . "</td>
                    <td>" . $quantity . "</td>
                    <td>" . $total_ammount . " </td>
                    </tr>"; 
                }
                ?>
            </tbody>
        </table>
        <h2><a href="index.php" style="text-decoration: none;" ><--back</a></h2>
    </div>

</body>

</html>