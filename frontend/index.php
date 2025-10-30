<?php include '../backend/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>V Store - Item List</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Danh sách Item</h2>
  <a href="create.php">+ Thêm Item</a>
  <table>
    <tr>
      <th>ID</th><th>Code</th><th>Name</th><th>Qty</th><th>Expired</th><th>Note</th><th>Action</th>
    </tr>
    <?php
    $stmt = $pdo->query("SELECT * FROM item_sale");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
          <td>{$row['id']}</td>
          <td>{$row['item_code']}</td>
          <td>{$row['item_name']}</td>
          <td>{$row['quantity']}</td>
          <td>{$row['expired_date']}</td>
          <td>{$row['note']}</td>
          <td>
            <a href='edit.php?id={$row['id']}'>Sửa</a> |
            <a href='../backend/delete_item.php?id={$row['id']}'
               onclick='return confirm(\"Xóa item này?\")'>Xóa</a>
          </td>
        </tr>";
    }
    ?>
  </table>
</div>
</body>
</html>
