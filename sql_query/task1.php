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
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Customer Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">E_mail</th>
                    <th scope="col">Location</th>
                    <th scope="col">Total Order</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("database.php");
                $sql = "SELECT a.`customer_id` ,a.`name`, a.`email`,a.`location`,b.`total_amount` from `customers` a INNER JOIN `orders` b ON a.`customer_id`=b.`customer_id`";
                $result = $conn->query($sql);
                while ($row = $result->fetch_array()) {
                    $id = $row[0];
                    $name = $row[1];
                    $email = $row[2];
                    $location = $row[3];
                    $total = $row[4];
                    echo "<tr>
      <th scope='row'>" . $id . "</th>
      <td>" . $name . "</td>
      <td>" . $email . "</td>
      <td>" . $location . " </td>
      <td>" . $total . " </td>
    </tr>";
                }
                ?>
            </tbody>
        </table>
        <h2><a href="index.php" style="text-decoration: none;"> <--back </a></h2>
    </div>
</body>

</html>