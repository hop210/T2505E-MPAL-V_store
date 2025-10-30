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
  <meta charset="utf-8">
  <title>Edit Item - V_Store</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Header -->
  <div class="header-band">
    <div class="header-inner">
      <span>V_Store</span>
      <span>Items</span>
    </div>
  </div>

  <div class="form-container">
    <h2>Edit Item</h2>
    <form action="../backend/update_item.php" method="POST">
      <input type="hidden" name="id" value="<?= $item['id'] ?>">

      <div class="form-group">
        <label>Item Code:</label>
        <input type="text" name="item_code" value="<?= htmlspecialchars($item['item_code']) ?>" required>
      </div>

      <div class="form-group">
        <label>Item Name:</label>
        <input type="text" name="item_name" value="<?= htmlspecialchars($item['item_name']) ?>" required>
      </div>

      <div class="form-group">
        <label>Quantity:</label>
        <input type="number" step="0.01" name="quantity" value="<?= htmlspecialchars($item['quantity']) ?>">
      </div>

      <div class="form-group">
        <label>Expired Date:</label>
        <input type="date" name="expired_date" value="<?= htmlspecialchars($item['expired_date']) ?>">
      </div>

      <div class="form-group">
        <label>Note:</label>
        <input type="text" name="note" value="<?= htmlspecialchars($item['note']) ?>">
      </div>

      <div class="btn-row">
        <button type="submit" class="btn-orange">Update</button>
        <a href="index.php" class="btn-orange btn-cancel">Cancel</a>
      </div>
    </form>
  </div>

</body>
</html>
