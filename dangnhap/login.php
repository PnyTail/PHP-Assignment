<?php
include 'db_connect.php';
session_start();

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM TaiKhoan WHERE Email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['MatKhau'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['success_message'] = "Đăng nhập thành công!";
            header('Location: dashboard.php');
            exit();
        } else {
            $message = "<div class='alert alert-danger'>Invalid email or password</div>";
        }
    } else {
        $message = "<div class='alert alert-danger'>Invalid email or password</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <div class="form-container">
            <h2>Login</h2>
            <?php echo $message; ?>
            <form action="login.php" method="post" class="mt-3">
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <input type="submit" value="Login" class="btn btn-primary">
            </form>
            <div class="mt-3">
                Don't have an account? <a href="register.php">Register here</a>.
            </div>
        </div>
    </div>
</body>
</html>
