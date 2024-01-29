<?php
session_start();

session_unset();
session_destroy();

session_start();

require '../includes/dbconnect.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $message = '';

    $query = $pdo->prepare('SELECT * FROM users WHERE username = :username');
    $query->bindParam(':username', $username);
    $query->execute();

    $user = $query->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['surname'] = $user['surname'];
        $_SESSION['permission'] = $user['permission'];

        header("Location: index.php");
        exit();
    } else {
        $message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php if (!empty($message)) : ?>
        <div class="alert alert-primary">
            <?php echo $message ?>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="card" style="width: 500px; margin: 0 auto;">
            <div class="card-header">
                Login
            </div>
            <form action="login.php" method="post" class="p-1">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <input type="submit" name="submit" value="Log in" class="btn btn-primary">
                <p>Not a member yet? <a href="signup.php">Sign up</a></p>
            </form>
        </div>
    </div>
</body>

</html>