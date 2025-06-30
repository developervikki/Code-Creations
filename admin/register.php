<?php
include '../includes/db.php';

$success = $error = "";

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if ($password !== $confirm) {
        $error = "❌ Passwords do not match.";
    } else {
        // Check if username exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error = "⚠️ Username already exists.";
        } else {
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $insert = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $insert->bind_param("ss", $username, $hashed);

            if ($insert->execute()) {
                $success = "✅ Admin registered successfully!";
            } else {
                $error = "❌ Registration failed.";
            }
            $insert->close();
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-blue-600">Register New Admin</h2>

        <?php if ($success): ?>
            <p class="bg-green-100 text-green-700 p-2 rounded mb-4"><?php echo $success; ?></p>
        <?php elseif ($error): ?>
            <p class="bg-red-100 text-red-700 p-2 rounded mb-4"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST" action="">
            <label class="block mb-2 text-sm font-medium">Username</label>
            <input type="text" name="username" required class="w-full p-2 border rounded mb-4">

            <label class="block mb-2 text-sm font-medium">Password</label>
            <input type="password" name="password" required class="w-full p-2 border rounded mb-4">

            <label class="block mb-2 text-sm font-medium">Confirm Password</label>
            <input type="password" name="confirm_password" required class="w-full p-2 border rounded mb-6">

            <button type="submit" name="register" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Register
            </button>
        </form>

        <p class="text-center mt-4 text-sm">
            Already have an account? <a href="login.php" class="text-blue-600 hover:underline">Login here</a>
        </p>
    </div>
</body>
</html>
