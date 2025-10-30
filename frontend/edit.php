<?php
include '../backend/db.php';
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM item_sale WHERE id = ?");
$stmt->execute([$id]);
$item = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Update Item</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Update Item</h2>
  <form method="POST" action="../backend/update_item.php">
    <input type="hidden" name="id" value="<?= $item['id'] ?>">
    <label>Item Code:</label><br>
    <input type="text" name="item_code" value="<?= $item['item_code'] ?>" required><br>

    <label>Item Name:</label><br>
    <input type="text" name="item_name" value="<?= $item['item_name'] ?>" required><br>

    <label>Quantity:</label><br>
    <input type="number" step="0.01" name="quantity" value="<?= $item['quantity'] ?>"><br>

    <label>Expired Date:</label><br>
    <input type="date" name="expired_date" value="<?= $item['expired_date'] ?>"><br>

    <label>Note:</label><br>
    <input type="text" name="note" value="<?= $item['note'] ?>"><br><br>

    <button type="submit">Update</button>
  </form>
</div>
</body>
</html>
