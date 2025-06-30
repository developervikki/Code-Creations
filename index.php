<?php include 'includes/header.html'; ?>
<?php include 'includes/preload.html'; ?>

<!-- Hero Section -->
<section class="min-h-screen flex flex-col-reverse md:flex-row justify-center items-center gap-10 bg-gray-100 px-6 py-12 text-center md:text-left">
  <!-- Text Content -->
  <div class="max-w-xl margin-top: 1px;">
    <h1 class="text-4xl md:text-5xl font-extrabold text-blue-600">Hi, I'm Vikash Yadav (IIIT Delhi)</h1>
    <p class="mt-4 text-lg md:text-xl text-gray-700">
      Computer Science Engineering Student | Web Developer | Tech Enthusiast | AI/ML Learner
    </p>
    <p></p>
    <a href="projects.php" class="mt-6 inline-block px-6 py-3 bg-gray-300 text-Black font-medium rounded-lg shadow hover:bg-blue-700 transition">
       Projects
    </a>
    <a href="contact.php" class="mt-6 inline-block px-6 py-3 bg-gray-300 text-Black font-medium rounded-lg shadow hover:bg-blue-700 transition">
       Get in Touch
    </a>
  </div>

  <!-- Profile Image -->
  <div>
    <img src="./assets/img/4.jpeg" alt="Vikash Yadav" class="w-80 h-80 rounded-full shadow-lg object-cover border-4 border-blue-200">
  </div>
</section>


<!-- Skills Preview -->
<section class="py-16 bg-white px-4" id="skills">
  <div class="max-w-5xl mx-auto text-center">
    <h2 class="text-3xl font-bold mb-6">My Skills</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-sm">
      <div class="bg-gray-100 p-4 rounded shadow">HTML</div>
      <div class="bg-gray-100 p-4 rounded shadow">CSS / Tailwind</div>
      <div class="bg-gray-100 p-4 rounded shadow">PHP</div>
      <div class="bg-gray-100 p-4 rounded shadow">MySQL</div>
      <div class="bg-gray-100 p-4 rounded shadow">JavaScript</div>
      <div class="bg-gray-100 p-4 rounded shadow">Git</div>
      <div class="bg-gray-100 p-4 rounded shadow">C / C++</div>
      <div class="bg-gray-100 p-4 rounded shadow">MATLAB</div>
    </div>
    <a href="about.php" class="inline-block mt-6 text-blue-600 hover:underline">Learn More</a>
  </div>
</section>
<!-- Section Wrapper with Alternating Backgrounds -->
<section class="py-16 bg-white px-4">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Explore My Work</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Card 1 -->
      <div class="bg-gray-50 rounded-xl shadow-md p-6 hover:shadow-lg transition">
        <h3 class="text-xl font-semibold text-gray-800 mb-3">📁 Projects</h3>
        <p class="text-gray-600 mb-4">A glimpse of what I've built — frontend, backend, and full-stack apps.</p>
        <a href="projects.php" class="inline-block text-blue-600 hover:underline font-medium">View All Projects →</a>
      </div>

      <!-- Card 2 -->
      <div class="bg-gray-50 rounded-xl shadow-md p-6 hover:shadow-lg transition">
        <h3 class="text-xl font-semibold text-gray-800 mb-3">💼 Experience</h3>
        <p class="text-gray-600 mb-4">Internships & practical exposure gained during my learning journey.</p>
        <a href="experience/experience.php" class="inline-block text-blue-600 hover:underline font-medium">See My Experience →</a>
      </div>

      <!-- Card 3 -->
      <div class="bg-gray-50 rounded-xl shadow-md p-6 hover:shadow-lg transition">
        <h3 class="text-xl font-semibold text-gray-800 mb-3">🎓 Education</h3>
        <p class="text-gray-600 mb-4">My academic background and institutions I studied at.</p>
        <a href="education/education.php" class="inline-block text-blue-600 hover:underline font-medium">View Education →</a>
      </div>

      <!-- Card 4 -->
      <div class="bg-gray-50 rounded-xl shadow-md p-6 hover:shadow-lg transition">
        <h3 class="text-xl font-semibold text-gray-800 mb-3">📜 Certificates</h3>
        <p class="text-gray-600 mb-4">My verified courses, internships & achievements.</p>
        <a href="certificates/certificates.php" class="inline-block text-blue-600 hover:underline font-medium">Show Certificates →</a>
      </div>

      <!-- Card 5 -->
      <div class="bg-gray-50 rounded-xl shadow-md p-6 hover:shadow-lg transition">
        <h3 class="text-xl font-semibold text-gray-800 mb-3">🏆 Achievements</h3>
        <p class="text-gray-600 mb-4">Awards and milestones that reflect my dedication and passion.</p>
        <a href="achievements/achievements.php" class="inline-block text-blue-600 hover:underline font-medium">Explore Achievements →</a>
      </div>

      <!-- Card 6 -->
      <div class="bg-gray-50 rounded-xl shadow-md p-6 hover:shadow-lg transition">
        <h3 class="text-xl font-semibold text-gray-800 mb-3">💬 Testimonials</h3>
        <p class="text-gray-600 mb-4">What others say about me — feedback from mentors and peers.</p>
        <a href="testimonials/testimonials.php" class="inline-block text-blue-600 hover:underline font-medium">Read Testimonials →</a>
      </div>

      <!-- Card 7 -->
      <div class="bg-gray-50 rounded-xl shadow-md p-6 hover:shadow-lg transition">
        <h3 class="text-xl font-semibold text-gray-800 mb-3">📝 Blog</h3>
        <p class="text-gray-600 mb-4">Read my thoughts, tutorials, and insights on tech and learning.</p>
        <a href="blog/index.php" class="inline-block text-blue-600 hover:underline font-medium">Visit Blog →</a>
      </div>
    </div>
  </div>
</section>




<!-- Contact CTA -->
<section class="py-12 bg-blue-50 text-center px-4">
  <h2 class="text-2xl font-semibold mb-4">Want to collaborate or hire me?</h2>
  <a href="contact.php" class="inline-block px-6 py-3 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
    Get In Touch
  </a>
</section>

<?php include 'includes/footer.html'; ?>
