<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit();
}

include '../includes/db.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    die("❌ Invalid project ID");
}

// Fetch existing project data
$stmt = $conn->prepare("SELECT * FROM projects WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$project = $result->fetch_assoc();
$stmt->close();

if (!$project) {
    die("❌ Project not found");
}

$success = $error = "";

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $about = $_POST['about'];
    $technology = $_POST['technology'];
    $link = $_POST['link'];

    // Image update (optional)
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        $targetPath = "../uploads/" . basename($image);
        move_uploaded_file($tmp, $targetPath);
    } else {
        $image = $project['image'];
    }

    $stmt = $conn->prepare("UPDATE projects SET title=?, description=?, technology=?, link=?, image=? WHERE id=?");
    $stmt->bind_param("sssssi", $title, $about, $technology, $link, $image, $id);

    if ($stmt->execute()) {
        $success = "✅ Project updated successfully!";
    } else {
        $error = "❌ Failed to update project.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Project</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        /* === Edit/Add Project Form Styling (shared) === */
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

.form-container img {
  display: block;
  margin: 10px 0;
  max-width: 100%;
  height: auto;
  border-radius: 6px;
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.1);
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

/* ✅ Message styling */
.form-container p {
  font-size: 1rem;
  font-weight: 500;
  margin-bottom: 15px;
}

    </style>
</head>
<body>
<div class="form-container">
    <h2>✏️ Edit Project</h2>

    <?php if ($success): ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php elseif ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data">
        <label>Project Name:</label><br>
        <input type="text" name="title" value="<?= htmlspecialchars($project['title']) ?>" required><br><br>

        <label>About Project:</label><br>
        <textarea name="about" rows="4" required><?= htmlspecialchars($project['description']) ?></textarea><br><br>

        <label>Technology Used:</label><br>
        <input type="text" name="technology" value="<?= htmlspecialchars($project['technology']) ?>" required><br><br>

        <label>Live Link (if any):</label><br>
        <input type="url" name="link" value="<?= htmlspecialchars($project['link']) ?>"><br><br>

        <label>Current Image:</label><br>
        <?php if ($project['image']): ?>
            <img src="../uploads/<?= htmlspecialchars($project['image']) ?>" width="200" style="margin-bottom: 10px;"><br>
        <?php endif; ?>

        <label>Change Image (optional):</label><br>
        <input type="file" name="image" accept="image/*"><br><br>

        <button type="submit" name="update">Update Project</button>
    </form>

    <p><a href="manage-projects.php">🔙 Back to Manage Projects</a></p>
</div>
</body>
</html>
