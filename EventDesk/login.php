<?php
session_start();
include 'db/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_password = $_POST['password'];

    // Fetch the stored password from the 'owners' table
    $sql = "SELECT * FROM owners WHERE username = 'admin' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $owner = $result->fetch_assoc();

        // Verify the entered password with the stored hashed password
        if (password_verify($input_password, $owner['password'])) {
            $_SESSION['admin_logged_in'] = true;
            header('Location: addEvent.php');
            exit();
        } else {
            $error_message = "Incorrect password!";
        }
    } else {
        $error_message = "Admin not found!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="container mt-5">
        <h2>Admin Login</h2>
        <?php if (isset($error_message)): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error_message); ?></div>
        <?php endif; ?>
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="password">Enter Admin Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
