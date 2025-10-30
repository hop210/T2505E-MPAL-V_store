<?php include '../backend/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Thêm Item</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Thêm Item mới</h2>
  <form method="POST" action="../backend/add_item.php">
    <label>Item Code:</label><br>
    <input type="text" name="item_code" required pattern="[A-Za-z0-9]+"><br>

    <label>Item Name:</label><br>
    <input type="text" name="item_name" required pattern="[A-Za-z0-9\s]+"><br>

    <label>Quantity:</label><br>
    <input type="number" step="0.01" name="quantity" required><br>

    <label>Expired Date:</label><br>
    <input type="date" name="expired_date" required><br>

    <label>Note:</label><br>
    <input type="text" name="note"><br><br>

    <button type="submit">Lưu</button>
  </form>
</div>
</body>
</html>
