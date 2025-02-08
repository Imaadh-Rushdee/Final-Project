<?php session_start(); ?>
<?php
// Database connection
$host = "localhost";
$user = "root";
$password = "";
$dbname = "school_management_system";
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch pending admission requests
$pendingRequestsQuery = "SELECT COUNT(*) AS pending_count FROM admission_requests WHERE status = 'Pending'";
$result = $conn->query($pendingRequestsQuery);
$row = $result->fetch_assoc();
$pendingCount = $row['pending_count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Director Dashboard</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

  <!-- Navbar -->

  <!-- Sidebar -->


  <div class="start">
    <!-- Main Content -->
    <div class="content p-3">
      <h1>Director Dashboard</h1>

      <!-- KPI Cards -->
      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card text-white bg-primary">
            <div class="card-body">
              <h5 class="card-title">Total Students</h5>
              <p class="card-text">250</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-success">
            <div class="card-body">
              <h5 class="card-title">Total Staff</h5>
              <p class="card-text">30</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-warning">
            <div class="card-body">
              <h5 class="card-title">Attendance Rate</h5>
              <p class="card-text">88%</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Admission Requests Table -->
      <div class="management-section">
        <h2>Admission Requests</h2>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Child Name</th>
              <th>Grade</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $admissionQuery = "SELECT * FROM admission_requests WHERE status = 'Pending'";
            $requests = $conn->query($admissionQuery);

            while ($row = $requests->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['child_name']}</td>
                        <td>{$row['grade']}</td>
                        <td>{$row['status']}</td>
                        <td>
                          <a href='approve_admission.php?id={$row['id']}' class='btn btn-success btn-sm'>Approve</a>
                          <a href='reject_admission.php?id={$row['id']}' class='btn btn-danger btn-sm'>Reject</a>
                        </td>
                      </tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
