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
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MyCompany</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
        <form class="d-flex me-3">
          <input class="form-control search-bar me-2" type="search" placeholder="Search...">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="sidebar d-flex flex-column">
    <div>
      <a href="#">
        <i class="bi bi-house"></i>
        <span>Dashboard</span>
      </a>
      <a href="#">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
      <a href="#">
        <i class="bi bi-bar-chart"></i>
        <span>Reports</span>
      </a>
      <a href="#">
        <i class="bi bi-calendar-event"></i>
        <span>Calendar</span>
      </a>
    </div>
    <a href="#" class="logout-btn d-flex align-items-center text-white">
      <i class="bi bi-box-arrow-right"></i>
      <span>Logout</span>
    </a>
  </div>
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
        <!-- Attendance Charts -->
           <div class="row">
             <div class="col-md-5">
               <h2>Student Attendance</h2>
               <canvas id="studentAttendanceChart"></canvas>
              </div>
              <div class="col-md-5">
                <h2>Staff Attendance</h2>
                <canvas id="staffAttendanceChart"></canvas>
              </div>
          </div>

    <!-- Announcements Section -->
    <div class="row">
      <div class="col-md-6">
        <h2>Announcements</h2>
        <div class="list-group" style="max-height: 200px; overflow-y: scroll;">
          <a href="#" class="list-group-item list-group-item-action">Holiday on Friday</a>
          <a href="#" class="list-group-item list-group-item-action">Parent-Teacher Meeting Next Week</a>
          <a href="#" class="list-group-item list-group-item-action">New Staff Orientation</a>
        </div>
      </div>

      <!-- Calendar Placeholder -->
      <div class="col-md-6">
        <h2>Upcoming Events</h2>
        <div class="bg-light p-3 rounded">
          <p>Feb 10: Science Exhibition</p>
          <p>Feb 15: Sports Day</p>
        </div>
      </div>
    </div>
    
    
  </div>
</div>
  
  <script>
    // Student Attendance Chart Data
    const studentAttendanceData = {
      labels: ['Grade 1', 'Grade 2', 'Grade 3', 'Grade 4'],
      datasets: [{
        label: 'Attendance (%)',
        data: [90, 85, 80, 95],
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
      }]
    };

    const studentAttendanceConfig = {
      type: 'bar',
      data: studentAttendanceData,
      options: { responsive: true, scales: { y: { beginAtZero: true } } }
    };

    new Chart(
      document.getElementById('studentAttendanceChart').getContext('2d'),
      studentAttendanceConfig
    );

    // Staff Attendance Chart Data
    const staffAttendanceData = {
      labels: ['Staff A', 'Staff B', 'Staff C'],
      datasets: [{
        label: 'Attendance (%)',
        data: [88, 92, 85],
        backgroundColor: 'rgba(153, 102, 255, 0.2)',
        borderColor: 'rgba(153, 102, 255, 1)',
        borderWidth: 1
      }]
    };

    const staffAttendanceConfig = {
      type: 'bar',
      data: staffAttendanceData,
      options: { responsive: true, scales: { y: { beginAtZero: true } } }
    };

    new Chart(
      document.getElementById('staffAttendanceChart').getContext('2d'),
      staffAttendanceConfig
    );
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
