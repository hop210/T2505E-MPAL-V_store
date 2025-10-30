CREATE DATABASE IF NOT EXISTS v_store;
USE v_store;

CREATE TABLE item_sale (
  id INT AUTO_INCREMENT PRIMARY KEY,
  item_code NVARCHAR(6) NOT NULL,
  item_name NVARCHAR(50) NOT NULL,
  quantity DECIMAL(10,2),
  expired_date DATE,
  note NVARCHAR(60)
);
