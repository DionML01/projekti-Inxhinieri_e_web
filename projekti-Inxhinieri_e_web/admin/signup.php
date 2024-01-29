<?php
session_start();
require '../includes/dbconnect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $message = '';

    $sql = 'INSERT INTO users(username, name, surname, email, password) VALUES (:username, :name, :surname, :email, :password)';
    $query = $pdo->prepare($sql);
    if (empty($username)) {
        $message = "Username is requried";
    } else {
        $query->bindParam('username', $username);
    }

    if (empty($name)) {
        $message = "Name is requried";
    } else {
        $query->bindParam('name', $name);
    }

    if (empty($surname)) {
        $message = "Surname is requried";
    } else {
        $query->bindParam('surname', $surname);
    }

    if (empty($email)) {
        $message = "Email is requried";
    } else {
        $query->bindParam('email', $email);
    }

    if (empty($password)) {
        $message = "Password is requried";
    } else {
        $query->bindParam('password', $password);
    }

    if ($query->execute()) {
        $message = "Successfully created your account!";
    } else {
        $message = "A problem accured creating your account!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php if (!empty($message)) : ?>
            <div class="alert alert-primary">
                <?php echo $message ?>
            </div>
        <?php endif; ?>
        <div class="card" style="width: 500px; margin: 0 auto;">
            <div class="card-header">
                Register
            </div>
            <form action="signup.php" method="post" class="p-1">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" class="form-control" required minlength="4">
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required minlength="4">
                </div>
                <div class="form-group">
                    <label for="surname">Surname:</label>
                    <input type="text" name="surname" id="surname" class="form-control" required minlength="4">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" required minlength="6">
                </div>
                <input type="submit" name="submit" value="Register" class="btn btn-primary">
                <p>Are you a member? <a href="login.php">Login</a></p>
            </form>
        </div>
    </div>
</body>

</html>