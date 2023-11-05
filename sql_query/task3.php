<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-1</title>
    <?php include("bootstrap.php") ?>
</head>

<body>
    <div class="container">
        <h1 class="text-center " style="margin: 20px 0;">Task-3</h1>
        <hr style="margin-bottom: 80px;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"> Id</th>
                    <th scope="col">Categori</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Unit price</th>
                    <th scope="col">Total revenue</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("database.php");
                $sql = " SELECT c.`category_id`,c.`name`,b.`name`,a.`quantity`,a.`unit_price`, SUM(a.`unit_price` * a.`quantity`)  as total  FROM `order_items` a
                    INNER JOIN `products` b ON a.`product_id`=b.`product_id`
                    INNER JOIN `categories` c ON b.catagory_id=c.`category_id`
                    GROUP BY a.`order_id` ORDER BY total DESC";
                $result = $conn->query($sql);
                while ($row = $result->fetch_array()) {
                    $id = $row[0];
                    $categori = $row[1];
                    $name = $row[2];
                    $unit_p = $row[3];
                    $quantity = $row[4];
                    $price = $row[5];
                    echo "<tr>
      <th scope='row'>" . $id . "</th>
      <td>" . $categori . "</td>
      <td>" . $name . "</td>
      <td>" . $unit_p . "</td>
      <td>" . $quantity . " </td>
      <td>" . $price . " </td>
    </tr>";
                }
                ?>
            </tbody>
        </table>
        <h2><a href="index.php" style="text-decoration: none; padding:0 20px" class=" border "> <--back </a></h2>
    </div>
</body>

</html>