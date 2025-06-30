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
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
      display: flex;
    }

    .sidebar {
      width: 240px;
      height: 100vh;
      background-color: #3f51b5;
      color: white;
      display: flex;
      flex-direction: column;
      padding: 20px;
      position: fixed;
      left: 0;
      top: 0;
    }

    .sidebar h2 {
      margin-bottom: 30px;
      font-size: 22px;
      text-align: center;
    }

    .sidebar a {
      color: white;
      text-decoration: none;
      margin: 10px 0;
      padding: 12px 16px;
      border-radius: 6px;
      transition: background 0.3s;
    }

    .sidebar a:hover {
      background-color: #2c3e90;
    }

    .dashboard-content {
      margin-left: 240px;
      padding: 40px;
      flex: 1;
    }

    h3 {
      font-size: 1.5rem;
      margin-bottom: 20px;
      color: #222;
    }

    .project-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .project-card {
      background: white;
      padding: 16px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    .project-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 12px;
    }

    .project-card h4 {
      margin-bottom: 8px;
      font-size: 18px;
      color: #333;
    }

    .project-card p {
      font-size: 14px;
      color: #666;
      margin-bottom: 12px;
    }

    .project-actions {
      margin-top: auto;
      display: flex;
      justify-content: space-between;
      gap: 10px;
    }

    .project-actions a {
      flex: 1;
      text-align: center;
      padding: 10px;
      border-radius: 6px;
      text-decoration: none;
      font-size: 14px;
      color: white;
    }

    .edit-btn {
      background-color: #4caf50;
    }

    .delete-btn {
      background-color: #f44336;
    }

    .edit-btn:hover {
      background-color: #388e3c;
    }

    .delete-btn:hover {
      background-color: #d32f2f;
    }

    @media (max-width: 768px) {
      .sidebar {
        position: relative;
        width: 100%;
        height: auto;
      }

      .dashboard-content {
        margin-left: 0;
        padding: 20px;
      }
    }
  </style>
</head>
<body>

<div class="sidebar">
  <h2>Admin Panel</h2>
  <a href="add-projects.php">➕ Add New Project</a>
  <a href="manage-projects.php">📂 Manage Projects</a>
  <a href="logout.php" onclick="return confirm('Logout now?')">🚪 Logout</a>
</div>

<div class="dashboard-content">
  <h3>📋 Posted Projects</h3>

  <?php
  $query = "SELECT id, title, created_at, image FROM projects ORDER BY created_at DESC";
  $result = $conn->query($query);

  if ($result->num_rows > 0):
      echo "<div class='project-grid'>";
      while ($row = $result->fetch_assoc()):
          $imgPath = !empty($row['image']) ? "../uploads/" . $row['image'] : "../assets/img/default.jpg";
          ?>
          <div class="project-card">
              <img src="<?php echo htmlspecialchars($imgPath); ?>" alt="Project Image">
              <h4><?php echo htmlspecialchars($row['title']); ?></h4>
              <p>📅 <?php echo $row['created_at']; ?></p>
              <div class="project-actions">
                  <a class="edit-btn" href="edit-project.php?id=<?php echo $row['id']; ?>">✏️ Edit</a>
                  <a class="delete-btn" href="delete-project.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this project?')">❌ Delete</a>
              </div>
          </div>
          <?php
      endwhile;
      echo "</div>";
  else:
      echo "<p>No projects found.</p>";
  endif;
  ?>
</div>

</body>
</html>
