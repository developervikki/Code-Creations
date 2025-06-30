<?php
// Dynamically get path to root for href/src usage
$rootPath = dirname($_SERVER['SCRIPT_NAME']);
$base = ($rootPath === '/' ? '' : $rootPath);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vikash Yadav | Portfolio</title>

  <!-- Dynamic Paths -->
  <link rel="stylesheet" href="<?= $base ?>/assets/css/style.css" />
  <link rel="stylesheet" href="<?= $base ?>/assets/css/tailwind.css" />
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

<header class="bg-white shadow-md sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
  <a href="index.php" class="flex items-center space-x-3">
  <img src="./assets/img/vikky.png" alt="Vikash Yadav Logo" class="h-12 w-12 rounded-full shadow-md border-2 border-blue-500 object-cover">
  <span class="text-xl font-bold text-blue-600">An Enginner</span>
</a>




    <nav class="space-x-4 hidden md:flex">
      <a href="<?= $base ?>/index.php" class="hover:text-blue-600">Home</a>
      <a href="<?= $base ?>/about.php" class="hover:text-blue-600">About</a>
      <a href="<?= $base ?>/projects.php" class="hover:text-blue-600">Projects</a>
      <a href="<?= $base ?>/resume.php" class="hover:text-blue-600">Resume</a>
     
      <a href="<?= $base ?>./contact.php" class="hover:text-blue-600">Contact</a>
    </nav>

    <div class="md:hidden">
      <button onclick="toggleMenu()" class="text-blue-600 focus:outline-none text-2xl">
        ☰
      </button>
    </div>
  </div>

  <div id="mobileMenu" class="hidden md:hidden px-4 pb-4 space-y-1">
    <a href="<?= $base ?>/index.php" class="block">Home</a>
    <a href="<?= $base ?>/about.php" class="block">About</a>
    <a href="<?= $base ?>/projects.php" class="block">Projects</a>
    <a href="<?= $base ?>/resume.php" class="block">Resume</a>
    <a href="<?= $base ?>/blog/index.php" class="block">Blog</a>
    <a href="<?= $base ?>../testimonials/index.php" class="block">Testimonials</a>
    <a href="<?= $base ?>/certificates/index.php" class="block">Certificates</a>
    <a href="<?= $base ?>/education/index.php" class="block">Education</a>
    <a href="<?= $base ?>/achievements/index.php" class="block">Achievements</a>
    <a href="<?= $base ?>/experience/index.php" class="block">Experience</a>
    <a href="<?= $base ?>/contact.php" class="block">Contact</a>
  </div>
</header>

<script>
function toggleMenu() {
  document.getElementById("mobileMenu").classList.toggle("hidden");
}
</script>
