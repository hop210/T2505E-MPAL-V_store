<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "UPDATE item_sale 
            SET item_code=?, item_name=?, quantity=?, expired_date=?, note=? 
            WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['item_code'],
        $_POST['item_name'],
        $_POST['quantity'],
        $_POST['expired_date'],
        $_POST['note'],
        $_POST['id']
    ]);
    header("Location: ../frontend/index.php");
    exit;
}
?>
