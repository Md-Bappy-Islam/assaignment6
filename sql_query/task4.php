<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-4</title>
    <?php include("bootstrap.php") ?>
</head>

<body>
    <div class="container">
        <h1 class="text-center " style="margin: 20px 0;">Task-4</h1>
        <hr style="margin-bottom: 80px;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Customer Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Total Purches Ammount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("database.php");
                $sql = "SELECT a.`customer_id` ,a.`name`,b.`total_amount` from `customers` a LEFT JOIN `orders` b ON a.`customer_id`=b.`customer_id` ORDER BY`total_amount` DESC LIMIT 5";
                $result = $conn->query($sql);
                while ($row = $result->fetch_row()) {
                    $id = $row[0];
                    $name = $row[1];
                    $total = $row[2];
                    echo "<tr>
      <th scope='row'>" . $id . "</th>
      <td>" . $name . "</td>
      <td>" . $total . " </td>
    </tr>";
                }
                ?>
            </tbody>
        </table>
        <h2><a href="index.php" style="text-decoration: none; padding:0 20px" class=" border "> <--back </a></h2>
    </div>
</body>

</html>