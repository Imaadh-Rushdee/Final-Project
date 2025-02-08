<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    // Redirect to login page if user is not logged in
    header("Location: login.php");
    exit();
}

// You can fetch user data from the database here using $_SESSION['user_id'] if needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Profile - School Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include('header.php'); ?>

<div class="container mt-5">
  <h2>Welcome, <?php echo $_SESSION['user_name']; ?>!</h2>
  <p>Here is your profile information.</p>
  <!-- Display user profile details here -->

  <div class="mt-4">
    <a href="edit-profile.php" class="btn btn-primary">Edit Profile</a>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
