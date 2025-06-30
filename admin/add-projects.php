<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit();
}

include '../includes/db.php';

$success = $error = "";

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $about = $_POST['about'];
    $technology = $_POST['technology'];
    $link = $_POST['link'];

    // Image handling
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $targetPath = "../uploads/" . basename($image);

    if (move_uploaded_file($tmp, $targetPath)) {
        $stmt = $conn->prepare("INSERT INTO projects (title, description, technology, link, image) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $title, $about, $technology, $link, $image);

        if ($stmt->execute()) {
            $success = "✅ Project added successfully!";
        } else {
            $error = "❌ Error adding project.";
        }
        $stmt->close();
    } else {
        $error = "❌ Failed to upload image.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Project</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>/* === Add Project Form === */
.form-container {
  max-width: 600px;
  margin: 40px auto;
  background: #ffffff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
}

.form-container h2 {
  text-align: center;
  margin-bottom: 25px;
  color: #3f51b5;
}

.form-container label {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
  color: #333;
}

.form-container input[type="text"],
.form-container input[type="url"],
.form-container input[type="file"],
.form-container textarea {
  width: 100%;
  padding: 10px;
  font-size: 1rem;
  border: 1px solid #ccc;
  border-radius: 6px;
  margin-bottom: 16px;
  transition: border-color 0.2s ease;
}

.form-container input:focus,
.form-container textarea:focus {
  border-color: #3f51b5;
  outline: none;
}

.form-container button[type="submit"] {
  background-color: #3f51b5;
  color: #fff;
  padding: 10px 16px;
  font-size: 1rem;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.form-container button[type="submit"]:hover {
  background-color: #2c3e90;
}

.form-container p a {
  display: inline-block;
  margin-top: 20px;
  color: #3f51b5;
  text-decoration: none;
}

.form-container p a:hover {
  text-decoration: underline;
}

/* ✅ Optional: Styling for success/error messages */
.form-container p {
  font-size: 1rem;
  font-weight: 500;
  margin-bottom: 15px;
}
</style>
</head>
<body>
    <div class="form-container">
        <h2>➕ Add New Project</h2>

        <?php if ($success): ?>
            <p style="color: green;"><?php echo $success; ?></p>
        <?php elseif ($error): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST" enctype="multipart/form-data" action="">
            <label>Project Name:</label><br>
            <input type="text" name="title" required><br><br>

            <label>About Project:</label><br>
            <textarea name="about" rows="4" required></textarea><br><br>

            <label>Technology Used:</label><br>
            <input type="text" name="technology" placeholder="PHP, MySQL, Bootstrap" required><br><br>

            <label>Live Link (if any):</label><br>
            <input type="url" name="link" placeholder="https://"><br><br>

            <label>Project Image:</label><br>
            <input type="file" name="image" accept="image/*" required><br><br>

            <button type="submit" name="submit">Submit Project</button>
        </form>

        <p><a href="dashboard.php">🔙 Back to Dashboard</a></p>
    </div>
</body>
</html>
