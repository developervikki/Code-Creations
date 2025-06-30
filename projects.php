<?php
require_once 'includes/db.php';

$query = "SELECT title, description, link, image FROM projects ORDER BY id DESC";
$result = $conn->query($query);
?>

<?php include 'includes/preload.html'; ?>
<?php include 'includes/header.html'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projects | Vikash Yadav</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <style>
    body {
  font-family: 'Segoe UI', sans-serif;
  background: #f5f5f5;
  margin: 0;
  padding: 0;
}

.section {
  padding: 40px 20px;
  max-width: 1200px;
  margin: auto;
}

.section-title {
  font-size: 2em;
  text-align: center;
  margin-bottom: 30px;
}

.project-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  gap: 20px;
}

.project-card {
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
  transition: transform 0.3s ease;
  display: flex;
  flex-direction: column;
}

.project-card:hover {
  transform: translateY(-6px);
}

.project-image {
  width: 100%;
  height: 180px;
  object-fit: cover;
}

.card-content {
  padding: 16px;
  flex-grow: 1;
}

.card-content h3 {
  margin: 0 0 10px;
  font-size: 1.25rem;
}

.card-content p {
  font-size: 0.95rem;
  color: #555;
}

.btn-view {
  display: inline-block;
  margin-top: 12px;
  padding: 8px 14px;
  background-color: #3f51b5;
  color: #fff;
  border-radius: 6px;
  text-decoration: none;
  font-size: 0.9rem;
  transition: background 0.3s ease;
}

.btn-view:hover {
  background-color: #2c3e90;
}

  </style>
</head>
<body>

<section class="section">
  <h1 class="section-title">💼 My Projects</h1>
  <div class="project-grid">
    <?php if ($result && $result->num_rows > 0): ?>
      <?php while ($project = $result->fetch_assoc()): ?>
        <div class="project-card">
          <?php if (!empty($project['image'])): ?>
            <img src="uploads/<?= htmlspecialchars($project['image']) ?>" alt="<?= htmlspecialchars($project['title']) ?>" class="project-image" />
          <?php endif; ?>
          <div class="card-content">
            <h3><?= htmlspecialchars($project['title']) ?></h3>
            <p><?= htmlspecialchars($project['description']) ?></p>
            <a href="<?= htmlspecialchars($project['link']) ?>" target="_blank" class="btn-view">🔗 View Project</a>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p>No projects available.</p>
    <?php endif; ?>
  </div>
</section>

<?php include 'includes/footer.html'; ?>
<script src="assets/js/main.js"></script>
</body>
</html>
