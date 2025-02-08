<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">School Management System</a>
    
    <!-- Admissions Link -->
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="Admission.php">Admissions</a>
      </li>
    </ul>

    <!-- Right-aligned Login and Sign Up or User Dropdown if logged in -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
      <ul class="navbar-nav">
        <?php if (isset($_SESSION['user_name'])): ?>
          <!-- Show logged-in user's name and dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo htmlspecialchars($_SESSION['user_name']); ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="profile.php">Look My Profile</a></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>
        <?php else: ?>
          <!-- Show Login and Sign Up links if not logged in -->
          <li class="nav-item">
            <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php"><i class="bi bi-person-plus"></i> Sign Up</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>