<?php
$name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
$email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
$phone = isset($_POST["phone"]) ? trim($_POST["phone"]) : "";
$project = isset($_POST["project"]) ? trim($_POST["project"]) : "";
$submitted = ($_SERVER["REQUEST_METHOD"] === "POST" && ($name !== "" || $email !== ""));
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Kaizen Construction | Consultation Request Received</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <header>
    <h1>Kaizen Construction</h1>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main class="contact-main">
    <section>
      <?php if ($submitted): ?>
        <h2>Thank You — Your Request Was Submitted</h2>
        <p>We have received your consultation request and will follow up as soon as possible.</p>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email, ENT_QUOTES, "UTF-8"); ?></p>
        <?php if ($phone !== ""): ?>
          <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone, ENT_QUOTES, "UTF-8"); ?></p>
        <?php endif; ?>
        <?php if ($project !== ""): ?>
          <p><strong>Project Details:</strong> <?php echo htmlspecialchars($project, ENT_QUOTES, "UTF-8"); ?></p>
        <?php endif; ?>
      <?php else: ?>
        <h2>Consultation Request</h2>
        <p>No form data was submitted yet. Please visit the <a href="contact.html">Contact page</a> to submit your project details.</p>
      <?php endif; ?>
      <p><a href="index.html" class="cta-button">Return to Home</a></p>
    </section>
  </main>

  <footer>
    <p>&copy; 2026 Kaizen Construction LLC. All rights reserved.</p>
  </footer>
</body>

</html>
