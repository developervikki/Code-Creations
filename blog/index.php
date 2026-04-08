<?php include '../includes/header.html'; ?>

<section class="py-16 px-4 bg-gray-50 min-h-screen">
  <div class="max-w-5xl mx-auto space-y-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
      <img src="image.png" alt="AI Agent controlling desktop apps" class="w-full h-64 object-cover">

      <div class="p-6">
        <span class="inline-block text-xs font-semibold uppercase tracking-wide text-blue-600 bg-blue-50 px-3 py-1 rounded-full mb-4">New Tutorial</span>
        <h1 class="text-3xl font-bold text-blue-600 mb-3">Build a GUI Agent with a Local LLM to Control Your Computer</h1>
        <p class="text-sm text-gray-500 mb-4">Published on February 22, 2026 • 12 min read</p>

        <p class="text-gray-700 leading-relaxed mb-4">
          Want to run an AI assistant that can <strong>see your screen</strong>, <strong>decide what to do next</strong>, and
          <strong>click/type on your behalf</strong> — all while keeping everything local? In this guide, I show a practical path
          for building a desktop GUI agent powered by a local LLM.
        </p>

        <p class="text-gray-700 leading-relaxed mb-6">
          We will cover architecture, tools, prompts, guardrails, and a working Python skeleton you can extend for your own
          workflows like email triage, spreadsheet updates, and repetitive admin tasks.
        </p>

        <a href="post1.php" class="inline-block px-5 py-2.5 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
          Read Full Guide →
        </a>
      </div>
    </div>

    <div class="bg-white shadow-sm rounded-lg p-6 border border-gray-100">
      <h2 class="text-xl font-semibold text-gray-800 mb-3">What you'll learn</h2>
      <ul class="list-disc pl-6 text-gray-700 space-y-2">
        <li>How to choose a local LLM that is fast enough for agent loops.</li>
        <li>How to connect screen capture + OCR + action execution.</li>
        <li>How to design a safe planner-executor loop with confirmations.</li>
        <li>How to add logs, replay, and stop buttons for reliability.</li>
      </ul>
    </div>
  </div>
</section>

<?php include '../includes/footer.html'; ?>
