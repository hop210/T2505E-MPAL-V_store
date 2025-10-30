<?php
include 'db.php';
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("DELETE FROM item_sale WHERE id = ?");
    $stmt->execute([$_GET['id']]);
}
header("Location: ../frontend/index.php");
exit;
?>
