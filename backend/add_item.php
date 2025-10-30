<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_code = $_POST['item_code'];
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $expired_date = $_POST['expired_date'];
    $note = $_POST['note'];

    $sql = "INSERT INTO item_sale (item_code, item_name, quantity, expired_date, note)
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$item_code, $item_name, $quantity, $expired_date, $note]);

    header("Location: ../frontend/index.php");
    exit;
}
?>
