<?php session_start(); 
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admissions - School Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  
  <!-- Custom Styling for Rich Content -->
  <style>
    .carousel-item img {
      object-fit: cover;
      height: 600px;
    }

    .carousel-caption {
      background-color: rgba(0, 0, 0, 0.5);
      padding: 20px;
      border-radius: 5px;
    }

    .carousel-caption h5 {
      font-size: 2.5rem;
      font-weight: bold;
    }

    .carousel-caption p {
      font-size: 1.2rem;
    }

    .how-to-apply ul {
      list-style-type: none;
      padding-left: 0;
    }

    .how-to-apply li {
      background-color: #f8f9fa;
      border: 1px solid #dee2e6;
      margin: 5px 0;
      padding: 10px;
      border-radius: 5px;
    }

    .table {
      background-color: #f8f9fa;
      border-radius: 10px;
    }

    footer {
      background-color: #343a40;
      color: white;
      padding: 20px 0;
    }

    .footer-links a {
      color: white;
      margin: 0 10px;
      font-size: 1.5rem;
    }

    .footer-links a:hover {
      color: #007bff;
    }
  </style>
</head>
<body>

<!-- Header include for consistent Navbar -->
<?php include('header.php'); ?>

<!-- Carousel Section -->
<div id="carouselExampleCaptions" class="carousel slide mt-5 pt-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4" class="d-block w-100" alt="School Campus">
      <div class="carousel-caption d-none d-md-block">
        <h5>Welcome to Our School</h5>
        <p>We provide quality education and holistic development.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1534291398191-4c2379b276a9" class="d-block w-100" alt="Admission Open">
      <div class="carousel-caption d-none d-md-block">
        <h5>Admission Open</h5>
        <p>Start your child’s journey with us today!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1561948950-39b6a181c7f3" class="d-block w-100" alt="School Community">
      <div class="carousel-caption d-none d-md-block">
        <h5>Join Our School Community</h5>
        <p>Explore our rich curriculum and extracurricular activities.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- How to Apply Section -->
<div class="container mt-5 how-to-apply">
  <h2 class="text-center">How to Apply for Admission</h2>
  <p class="text-center">Follow these simple steps to apply for admission:</p>
  <ul class="mx-auto">
    <li>Visit our <strong>Admission Form</strong> page and fill in the necessary details about your child.</li>
    <li>Submit your application and await approval.</li>
    <li>Once approved, you will be contacted for the interview schedule.</li>
    <li>Final step: Join our school community!</li>
  </ul>
  <div class="text-center mt-4">
    <a href="apply-admission.php" class="btn btn-primary">Apply for Admission</a>
  </div>
</div>

<!-- Fee Structure Section -->
<div class="container mt-5">
  <h2 class="text-center">Fee Structure</h2>
  <p class="text-center">Here is the detailed fee structure for various grades:</p>

  <!-- Fee Table -->
  <div class="table-responsive">
    <table class="table table-striped table-bordered mt-4">
      <thead>
        <tr>
          <th>Grade</th>
          <th>Monthly Fees</th>
          <th>Annual Fees</th>
          <th>Book Fees</th>
          <th>Other Fees</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Grade 1</td>
          <td>$300</td>
          <td>$3000</td>
          <td>$50</td>
          <td>$100</td>
        </tr>
        <tr>
          <td>Grade 2</td>
          <td>$350</td>
          <td>$3500</td>
          <td>$50</td>
          <td>$120</td>
        </tr>
        <tr>
          <td>Grade 3</td>
          <td>$400</td>
          <td>$4000</td>
          <td>$60</td>
          <td>$150</td>
        </tr>
        <tr>
          <td>Grade 4</td>
          <td>$450</td>
          <td>$4500</td>
          <td>$60</td>
          <td>$180</td>
        </tr>
        <tr>
          <td>Grade 5</td>
          <td>$500</td>
          <td>$5000</td>
          <td>$70</td>
          <td>$200</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="text-center mt-4">
    <a href="apply-admission.php" class="btn btn-primary">Apply for Admission</a>
  </div>
</div>

<!-- Footer Section -->
<footer class="bg-dark text-white mt-5 py-4">
  <div class="container text-center">
    <p>Contact us at: <strong>+123 456 7890</strong> or email us at: <strong>admissions@school.com</strong></p>
    <p>&copy; 2025 School Management System. All Rights Reserved.</p>
    <div class="footer-links">
      <a href="#" class="text-white mx-2"><i class="bi bi-facebook"></i></a>
      <a href="#" class="text-white mx-2"><i class="bi bi-twitter"></i></a>
      <a href="#" class="text-white mx-2"><i class="bi bi-instagram"></i></a>
    </div>
  </div>
</footer>

<!-- Bootstrap JS (bundle includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
