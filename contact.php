<?php include 'includes/header.html'; ?>

<section class="py-16 px-4 bg-gray-50 min-h-screen">
  <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-lg p-8">
    <h2 class="text-3xl font-bold text-center text-blue-600 mb-6">Contact Me</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);

        $to = "typhonya@gmail.com"; // Change to your email
        $subject = "New Contact Message from Portfolio";
        $headers = "From: $email";

        if (mail($to, $subject, $message, $headers)) {
            echo '<p class="text-green-600 mb-4">Message sent successfully!</p>';
        } else {
            echo '<p class="text-red-600 mb-4">Message failed to send. Please try again.</p>';
        }
    }
    ?>

    <form method="POST" action="">
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
        <input type="text" name="name" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" />
      </div>

      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" name="email" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" />
      </div>

      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
        <textarea name="message" rows="5" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300"></textarea>
      </div>

      <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
        Send Message
      </button>
    </form>
  </div>
</section>

<?php include 'includes/footer.html'; ?>
