<?php
// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION["username"])) {
  header("Location: index.html");
  exit();
}

echo "Chào mừng " . $_SESSION["username"] . "!";
?>