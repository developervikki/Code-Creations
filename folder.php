<?php
$folders = [
    "assets/css",
    "assets/js",
    "assets/img",
    "assets/icons",
    "includes",
    "data",
    "blog",
    "testimonials",
    "certificates/assets",
    "achievements",
    "experience",
    "education"
];

$files = [
    "index.php",
    "about.php",
    "projects.php",
    "resume.php",
    "contact.php",
    "assets/css/style.css",
    "assets/css/tailwind.css",
    "assets/js/main.js",
    "assets/js/animation.js",
    "includes/header.html",
    "includes/footer.html",
    "includes/preload.html",
    "data/projects.json",
    "data/skills.json",
    "blog/index.php",
    "blog/post1.php",
    "blog/post2.php",
    "testimonials/index.php",
    "certificates/index.php",
    "achievements/index.php",
    "experience/index.php",
    "education/index.php",
    "404.php",
    "README.md",
    "CNAME",
    ".gitignore"
];

// Create folders
foreach ($folders as $folder) {
    if (!is_dir($folder)) {
        mkdir($folder, 0755, true);
        echo "✅ Folder created: $folder<br>";
    }
}

// Create empty files
foreach ($files as $file) {
    if (!file_exists($file)) {
        file_put_contents($file, "");
        echo "📄 File created: $file<br>";
    }
}

echo "<br><strong>🎉 Portfolio structure successfully created!</strong>";
?>
