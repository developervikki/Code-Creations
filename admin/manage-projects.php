<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit();
}
include '../includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Projects</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>.project-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

.project-table th,
.project-table td {
  border: 1px solid #ddd;
  padding: 10px;
  text-align: left;
  vertical-align: middle;
}

.project-table th {
  background-color: #3f51b5;
  color: white;
}

.project-table tr:nth-child(even) {
  background-color: #f9f9f9;
}

.project-table img {
  border-radius: 4px;
}
</style>
</head>
<body>
<div class="dashboard-container">
    <h2>📂 Manage All Projects</h2>
    <a href="dashboard.php" style="display:inline-block; margin-bottom: 20px;">🔙 Back to Dashboard</a>

    <?php
    $query = "SELECT id, title, technology, image FROM projects ORDER BY created_at DESC";
    $result = $conn->query($query);

    if ($result->num_rows > 0): ?>
        <table class="project-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Technology</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td>
                        <?php if (!empty($row['image'])): ?>
                            <img src="../uploads/<?= htmlspecialchars($row['image']) ?>" alt="project" width="60" height="40" style="object-fit: cover;">
                        <?php else: ?>
                            No image
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($row['title']) ?></td>
                    <td><?= htmlspecialchars($row['technology']) ?></td>
                    <td>
                        <a href="edit-project.php?id=<?= $row['id'] ?>">✏️ Edit</a> |
                        <a href="delete-project.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this project?')">❌ Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No projects found.</p>
    <?php endif; ?>
</div>
</body>
</html>
