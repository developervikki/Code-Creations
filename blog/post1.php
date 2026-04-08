<?php include '../includes/header.html'; ?>

<section class="py-16 px-4 bg-white">
  <article class="max-w-4xl mx-auto">
    <header class="mb-10">
      <p class="text-sm text-blue-600 font-semibold uppercase tracking-wide">AI Automation Tutorial</p>
      <h1 class="text-4xl font-bold text-gray-900 mt-2 mb-3">Build a GUI Agent with a Local LLM to Control Your Computer</h1>
      <p class="text-gray-500">A practical blueprint for creating a safe desktop automation assistant that runs fully on your machine.</p>
    </header>

    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
      <h2>1) What is a GUI Agent?</h2>
      <p>
        A GUI agent is an AI system that observes your desktop interface (screenshots + OCR), reasons about the next action,
        and performs actions such as mouse clicks, keyboard input, scrolling, and app switching.
      </p>

      <h2>2) Why use a local LLM?</h2>
      <ul>
        <li>Better privacy for sensitive workflows.</li>
        <li>No per-request API costs.</li>
        <li>Lower latency for iterative control loops.</li>
        <li>Works even when internet is unstable.</li>
      </ul>

      <h2>3) Recommended stack</h2>
      <ul>
        <li><strong>Model runtime:</strong> Ollama or LM Studio</li>
        <li><strong>LLM:</strong> Qwen2.5, Llama 3.1 Instruct, or Mistral class model</li>
        <li><strong>Automation:</strong> Python + PyAutoGUI + keyboard</li>
        <li><strong>Vision:</strong> mss/Pillow screenshots + pytesseract OCR</li>
        <li><strong>Safety:</strong> allow-list apps, confidence thresholds, emergency hotkey</li>
      </ul>

      <h2>4) Agent architecture</h2>
      <p>Use a planner-executor loop:</p>
      <ol>
        <li>Capture current screen.</li>
        <li>Extract visible text/anchors via OCR.</li>
        <li>Send compressed context + goal to the local LLM.</li>
        <li>Receive a structured command (JSON).</li>
        <li>Validate command with safety rules.</li>
        <li>Execute action and log result.</li>
      </ol>

      <h2>5) Example command schema</h2>
      <pre><code>{
  "action": "click",
  "target": "Send button",
  "x": 1420,
  "y": 910,
  "reason": "Send the drafted email",
  "needs_confirmation": true
}</code></pre>

      <h2>6) Minimal Python skeleton</h2>
      <pre><code>while True:
    frame = capture_screen()
    ocr_text = run_ocr(frame)

    prompt = build_prompt(goal, ocr_text, recent_actions)
    plan = local_llm_json(prompt)

    if not safety_check(plan):
        alert_user(plan)
        continue

    if plan["needs_confirmation"]:
        if not confirm_from_user(plan):
            continue

    execute(plan)
    append_log(plan)</code></pre>

      <h2>7) Prompting tips for reliable actions</h2>
      <ul>
        <li>Force JSON-only output with strict keys.</li>
        <li>Instruct model to act only on visible elements.</li>
        <li>Require fallback strategy when confidence is low.</li>
        <li>Add explicit stop conditions.</li>
      </ul>

      <h2>8) Safety checklist (must-have)</h2>
      <ul>
        <li>Global kill switch (e.g., press <code>Ctrl + Shift + X</code>).</li>
        <li>Never allow hidden/background actions.</li>
        <li>Confirm before destructive actions (delete, pay, submit).</li>
        <li>Store action logs with timestamps.</li>
      </ul>

      <h2>9) Real-world use cases</h2>
      <ul>
        <li>Filling repetitive internal forms.</li>
        <li>Summarizing and sorting inbox tasks.</li>
        <li>Moving data from emails to spreadsheets.</li>
        <li>Generating first drafts for CRM updates.</li>
      </ul>

      <h2>10) Next improvements</h2>
      <p>
        Once your prototype works, add memory (task history), a visual element detector, and multi-step planning.
        You can also expose a simple web dashboard to start/stop tasks and inspect logs.
      </p>

      <p>
        Building this locally gives you privacy, control, and a deep understanding of how agentic systems work in practice.
        Start small, keep safety first, and iterate with measurable tasks.
      </p>
    </div>

    <div class="mt-10 p-5 bg-blue-50 rounded-lg border border-blue-100">
      <p class="text-blue-800">
        Want a full production template with folder structure, prompt files, and a working starter script?
        I can publish it as the next post.
      </p>
    </div>
  </article>
</section>

<?php include '../includes/footer.html'; ?>
