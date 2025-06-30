<?php include 'includes/header.html'; ?>

<section class="py-16 px-4 bg-gray-100 min-h-screen">
  <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-8">
    <h2 class="text-4xl font-bold text-blue-600 mb-6 text-center">My Resume</h2>

    <!-- Download Button -->
    <div class="text-center mb-10">
      <a href="assets/vikash_resume.pdf" download
         class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
        📄 Download PDF
      </a>
    </div>

    <!-- Education -->
    <div class="mb-8">
      <h3 class="text-2xl font-semibold text-gray-800 mb-3">🎓 Education</h3>
      <ul class="list-disc ml-6 text-gray-700">
        <li><strong>B.Tech in Computer Science Engineering</strong> – AKTU Lucknow (2024–2027)</li>
        <li><strong>Diploma in Electronics Engineering</strong> – BTEUP (Completed)</li>
      </ul>
    </div>

    <!-- Experience -->
    <div class="mb-8">
      <h3 class="text-2xl font-semibold text-gray-800 mb-3">💼 Experience</h3>
      <ul class="list-disc ml-6 text-gray-700">
        <li><strong>Web Developer Intern</strong> – CodeSoft (Remote, 2024)</li>
        <li><strong>Project Contributor</strong> – Open-source PHP & Laravel tools</li>
      </ul>
    </div>

    <!-- Skills -->
    <div class="mb-8">
      <h3 class="text-2xl font-semibold text-gray-800 mb-3">🛠 Skills</h3>
      <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 text-gray-700">
        <span>PHP</span>
        <span>MySQL</span>
        <span>JavaScript</span>
        <span>C++</span>
        <span>MATLAB</span>
        <span>HTML/CSS</span>
        <span>Tailwind CSS</span>
        <span>Git & GitHub</span>
      </div>
    </div>

    <!-- Tools & Platforms -->
    <div>
      <h3 class="text-2xl font-semibold text-gray-800 mb-3">🧰 Tools & Platforms</h3>
      <div class="flex flex-wrap gap-3 text-gray-700">
        <span class="bg-gray-200 px-3 py-1 rounded">VS Code</span>
        <span class="bg-gray-200 px-3 py-1 rounded">XAMPP</span>
        <span class="bg-gray-200 px-3 py-1 rounded">Git</span>
        <span class="bg-gray-200 px-3 py-1 rounded">Figma</span>
        <span class="bg-gray-200 px-3 py-1 rounded">Netlify</span>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.html'; ?>
