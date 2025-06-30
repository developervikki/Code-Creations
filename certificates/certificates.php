<?php include '../includes/header.html'; ?>

<section class="py-16 px-4 bg-gray-50 min-h-screen">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-4xl font-bold text-blue-600 text-center mb-10">Certificates</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <?php
      $certDir = __DIR__ . '/assets/';
      $certPath = 'assets/';
      $certificates = array_diff(scandir($certDir), array('.', '..'));

      if (count($certificates) > 0) {
        foreach ($certificates as $cert) {
          $ext = pathinfo($cert, PATHINFO_EXTENSION);
          $isImage = in_array(strtolower($ext), ['jpg', 'jpeg', 'png', 'webp']);
          $isPDF = strtolower($ext) === 'pdf';
          $name = pathinfo($cert, PATHINFO_FILENAME);

          echo '<div class="bg-white shadow-md rounded-lg p-4 text-center">';
          if ($isImage) {
            echo "<img src='$certPath$cert' alt='$name' class='w-full h-48 object-cover mb-3 rounded'>";
          } elseif ($isPDF) {
            echo "<div class='h-48 flex items-center justify-center bg-gray-100 mb-3 rounded'>
                    <span class='text-2xl text-gray-600'>📄</span>
                  </div>";
          }
          echo "<p class='font-semibold mb-2'>" . ucfirst($name) . "</p>";
          echo "<a href='$certPath$cert' target='_blank' class='text-blue-600 hover:underline'>View Certificate</a>";
          echo '</div>';
        }
      } else {
        echo "<p class='text-center text-gray-500'>No certificates uploaded yet.</p>";
      }
      ?>
    </div>
  </div>
</section>

<?php include '../includes/footer.html'; ?>
