
<?php
require_once("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $amount = $_POST["amount"];
    $category = $_POST["category"];
    $date = $_POST["date"];
    $note = $_POST["note"];

    if(empty($amount) || empty($category) || empty($date) || empty($note) ){
        echo "All fields are required!";
    }else{
        if(!is_numeric($amount)){
            echo "Amount must be Numeric!";
        }

        $sql = "INSERT INTO expenses (amount, category, laDate, note) VALUES (?, ?, ?, ?)";
        $stm = $cnx -> prepare($sql);
        $stm->execute([$amount, $category, $date, $note]);
        echo "Successfuly to Add Expense";

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Saisir Amount : <input type="number" name="amount"> <br>
        Saisir category : <input type="text" name="category"><br>
        Saisir La Date : <input type="date" name="date"><br>
        Saisir Note : <input type="text" name="note"><br>
        <button type="submit">Add</button><br>
        <a href="list_expenses.php">Go Back</a>

    </form>
</body>
</html>