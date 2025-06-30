<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit();
}

include '../includes/db.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    die("❌ Invalid project ID.");
}

// Fetch project image before deleting
$stmt = $conn->prepare("SELECT image FROM projects WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$project = $result->fetch_assoc();
$stmt->close();

if (!$project) {
    die("❌ Project not found.");
}

// Delete the image file if exists
if (!empty($project['image'])) {
    $imagePath = '../uploads/' . $project['image'];
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }
}

// Delete the project from DB
$stmt = $conn->prepare("DELETE FROM projects WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    $message = "✅ Project deleted successfully.";
} else {
    $message = "❌ Failed to delete project.";
}
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Delete Project</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <style>
    /* Reuse form-container from edit/add */
.form-container {
  max-width: 500px;
  margin: 50px auto;
  background: #ffffff;
  padding: 30px;
  border-radius: 10px;
  text-align: center;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
}

.form-container h2 {
  color: #d32f2f;
  margin-bottom: 20px;
}

.form-container p {
  font-size: 1.1rem;
  margin-bottom: 20px;
}

.btn-view {
  display: inline-block;
  padding: 8px 16px;
  background-color: #3f51b5;
  color: white;
  border-radius: 6px;
  text-decoration: none;
  transition: background 0.3s ease;
}

.btn-view:hover {
  background-color: #2c3e90;
}

  </style>
</head>
<body>
<div class="form-container">
  <h2>🗑️ Delete Project</h2>
  <p><?= $message ?></p>
  <a href="manage-projects.php" class="btn-view">🔙 Back to Manage Projects</a>
</div>
</body>
</html>
