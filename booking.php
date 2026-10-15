<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book a Repair | AmielTech</title>
  <link rel="icon" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" sizes="16x16" href="images/favicon-16x16.png">
  <link rel="stylesheet" href="style.css?v=20261015-theme-fix">
  <script src="script.js?v=20261015-theme-fix" defer></script>
</head>
<body>
<div class="page">
  <button class="nav-toggle" id="nav-toggle" type="button" aria-controls="site-nav" aria-expanded="false" aria-label="Open navigation"><span></span><span></span><span></span></button>
  <button class="theme-toggle" id="theme-toggle" type="button" aria-label="Switch to light mode" title="Toggle light and dark mode"><span class="theme-icon">☼</span></button>
  <aside class="side" id="site-nav">
    <a class="logo" href="index.php">Amiel<span>Tech</span><b>.</b></a>
    <p class="side-label">PERSONAL WEBSITE</p>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="booking.php">Repair Service</a></li>
      <li><a href="about.php">About Me</a></li>
      <li><a href="skills.php">Skills</a></li>
      <li><a href="projects.php">Projects</a></li>
    </ul>
    <div class="side-bottom">
      <span class="status-dot"></span>
      <span>ONLINE / AMIELTECH</span>
    </div>
    <a class="secret-download" href="downloads.php" title="Downloads" aria-label="Downloads">↓</a>
  </aside>
  <main class="details">
    <section class="page-heading"><p class="eyebrow">SERVICE REQUEST / 005</p><h1>Book a <span>repair.</span></h1><p>Tell me about your device and the issue you're experiencing.</p></section>
    <section class="form-panel">
      <?php if (!empty($_SESSION['booking_msg'])): ?>
        <div class="booking-message"><?= htmlspecialchars($_SESSION['booking_msg'], ENT_QUOTES, 'UTF-8'); ?></div>
        <?php unset($_SESSION['booking_msg']); ?>
      <?php endif; ?>
      <form class="booking-form" action="send-booking.php" method="POST">
        <div class="form-grid">
          <div class="form-group"><label for="gadget">Gadget type</label><select name="gadget" id="gadget" required><option value="">-- Select gadget --</option><option>Phone</option><option>Desktop</option><option>Laptop</option><option>Tablet</option><option>Camera</option></select></div>
          <div class="form-group"><label for="brand">Brand</label><input type="text" name="brand" id="brand" required></div>
          <div class="form-group"><label for="model">Model</label><input type="text" name="model" id="model" required></div>
          <div class="form-group"><label for="name">Your name</label><input type="text" name="name" id="name" required></div>
          <div class="form-group full-width"><label for="email">Email address</label><input type="email" name="email" id="email" required></div>
          <div class="form-group full-width"><label for="message">Describe the issue (optional)</label><textarea name="message" id="message" rows="5" placeholder="Tell me what happened to your device..."></textarea></div>
        </div>
        <button type="submit" class="book-btn">Submit repair request <span>↗</span></button>
      </form>
    </section>
    <footer class="footer">
      <div class="footer-copy">
        <span>© 2026 AmielTech</span>
        <span>Built by Amiel <b>◆</b></span>
      </div>
      <div class="footer-contact" id="contact">
        <a href="mailto:admin@amieltech.uk">Email</a>
        <a href="https://github.com/eimyaa" target="_blank" rel="noopener noreferrer">GitHub</a>
        <a href="https://www.instagram.com/amieltech/" target="_blank" rel="noopener noreferrer">Instagram</a>
      </div>
    </footer>
  </main>
</div>
</body>
</html>
