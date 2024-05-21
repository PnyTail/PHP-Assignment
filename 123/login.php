<?php
session_start();

// Kết nối database (thay thế thông tin database của bạn)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối database thất bại: " . $conn->connect_error);
}

// Xử lý đăng nhập nếu có dữ liệu được gửi đi từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy thông tin đăng nhập từ form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Truy vấn database để kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Đăng nhập thành công
            $_SESSION["username"] = $username;
            header("Location: welcome.php");
            exit();
        } else {
            // Đăng nhập thất bại
            echo "Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập.";
        }
    }
}

// Đóng kết nối
$conn->close();
?>
