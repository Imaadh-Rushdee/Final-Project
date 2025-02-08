<?php
// Start session
session_start();

// Redirect to login page if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');  // Redirect to login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apply for Admission</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
  <!-- Include the header (navbar) from another file -->
  <?php include('header.php'); ?>

  <div class="container mt-5">
    <h2>Apply for Admission</h2>

    <!-- Admission Form -->
    <form action="submit-admission.php" method="POST">
      <div class="mb-3">
        <label for="student_name" class="form-label">Child's Name</label>
        <input type="text" class="form-control" id="student_name" name="student_name" required>
      </div>

      <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" required>
      </div>

      <div class="mb-3">
        <label for="grade" class="form-label">Grade to be Admitted</label>
        <input type="text" class="form-control" id="grade" name="grade" required>
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" required>
      </div>

      <div class="mb-3">
        <label for="contact_number" class="form-label">Contact Number</label>
        <input type="text" class="form-control" id="contact_number" name="contact_number" required>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary">Submit Application</button>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
