<?php include '../backend/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>V_Store - Items</title>
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


  <div class="container">
    <!-- Title -->
    <div class="page-title">Sale Items</div>

    <!-- Add button -->
    <a href="create.php" class="add-btn">Add New</a>

    <!-- Table -->
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Item Code</th>
          <th>Item Name</th>
          <th>Quantity</th>
          <th>Expired date</th>
          <th>Note</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $stmt = $pdo->query("SELECT * FROM item_sale ORDER BY id ASC");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
        ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= htmlspecialchars($row['item_code']) ?></td>
          <td><?= htmlspecialchars($row['item_name']) ?></td>
          <td><?= htmlspecialchars($row['quantity']) ?></td>
          <td><?= htmlspecialchars($row['expired_date']) ?></td>
          <td><?= htmlspecialchars($row['note']) ?></td>
          <td>
            <div class="action">
              <!-- Edit icon -->
              <a href="edit.php?id=<?= $row['id'] ?>" title="Edit">
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 20h9"></path>
                  <path d="M16.5 3.5l4 4L7 21l-4 1 1-4L16.5 3.5z"></path>
                </svg>
              </a>

              <!-- Delete icon -->
              <a href="../backend/delete_item.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this item ?')" title="Delete">
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="3 6 5 6 21 6"></polyline>
                  <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"></path>
                  <path d="M10 11v6"></path>
                  <path d="M14 11v6"></path>
                  <path d="M9 6V4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2"></path>
                </svg>
              </a>
            </div>
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>

    <!-- Footer -->
    <div class="footer">Số 8, Tôn Thất Thuyết, Cầu Giấy, Hà Nội</div>
  </div>

</body>
</html>
