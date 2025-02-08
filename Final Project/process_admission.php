<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "school_management_system";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $child_name = $_POST['child_name'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $grade = $_POST['grade'];
    $mother_name = $_POST['mother_name'];
    $father_guardian_name = $_POST['father_guardian_name'];
    $contact_mother = $_POST['contact_mother'];
    $contact_father_guardian = $_POST['contact_father_guardian'];
    $city = $_POST['city'];
    $lane = $_POST['lane'];
    $house_number = $_POST['house_number'];
    $additional_info = $_POST['additional_info'];
    $parent_email = $_POST['parent_email'];

    $sql = "INSERT INTO admission_requests (child_name, dob, age, grade, mother_name, 
            father_guardian_name, contact_mother, contact_father_guardian, city, lane, 
            house_number, additional_info, parent_email)
            VALUES ('$child_name', '$dob', '$age', '$grade', '$mother_name', 
            '$father_guardian_name', '$contact_mother', '$contact_father_guardian', 
            '$city', '$lane', '$house_number', '$additional_info', '$parent_email')";

    if ($conn->query($sql) === TRUE) {
        header('Location: success.html');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
