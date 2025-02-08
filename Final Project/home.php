<?php 
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Management System - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Navbar -->
<?php include('header.php'); ?>


<!-- Content Section -->
<div class="container mt-5 pt-5">
  <h1 class="display-4 mt-5">Welcome to Our School Management System</h1>
  <p class="lead mt-3">Empowering education with technology. Manage admissions, fees, and more!</p>

  <!-- Section for More Info -->
  <div class="mt-4">
    <h3>Our Features</h3>
    <ul>
      <li>Easy Admission Process</li>
      <li>Manage Student Records</li>
      <li>Track Fees and Payments</li>
      <li>Access Student Profiles</li>
    </ul>
  </div>

  <!-- Call to Action Button -->
  <div class="mt-4">
    <a href="apply-admission.php" class="btn btn-primary">Apply for Admission</a>
  </div>
</div>

<!-- Footer Section -->
<footer class="bg-dark text-white mt-5 py-4">
  <div class="container text-center">
    <p>Contact us at: <strong>+123 456 7890</strong> or email us at: <strong>admissions@school.com</strong></p>
    <p>&copy; 2025 School Management System. All Rights Reserved.</p>
  </div>
</footer>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
