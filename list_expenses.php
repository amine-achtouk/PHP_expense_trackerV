<?php
require_once("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Amount</th>
            <th>Category</th>
            <th>Date</th>
            <th>Note</th>
        </tr>
        <?php
        $sql = "SELECT * FROM expenses";
        $stm = $cnx -> query($sql);
        while($row = $stm -> fetch(PDO::FETCH_BOTH)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                echo "<td>" . $row['category'] . "</td>";
                echo "<td>" . $row['laDate'] . "</td>";
                echo "<td>" . $row['note'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
<a href="add.php">Add Expense</a> <br>

</body>
</html>