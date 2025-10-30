<?php include '../backend/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Item - V_Store</title>
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
    <h2>Add New Item</h2>
    <form action="../backend/add_item.php" method="POST">
      <div class="form-group">
        <label>Item Code:</label>
        <input type="text" name="item_code" required pattern="[A-Za-z0-9]+">
      </div>

      <div class="form-group">
        <label>Item Name:</label>
        <input type="text" name="item_name" required pattern="[A-Za-z0-9\s]+">
      </div>

      <div class="form-group">
        <label>Quantity:</label>
        <input type="number" step="0.01" name="quantity" required>
      </div>

      <div class="form-group">
        <label>Expired Date:</label>
        <input type="date" name="expired_date" required>
      </div>

      <div class="form-group">
        <label>Note:</label>
        <input type="text" name="note">
      </div>

      <div class="btn-row">
        <button type="submit" class="btn-orange">Save</button>
        <a href="index.php" class="btn-orange btn-cancel">Cancel</a>
      </div>
    </form>
  </div>

</body>
</html>
