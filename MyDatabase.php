<?php

// Function to establish database connection
function connectDB() {
    $servername = "localhost";
    $username = "student"; //Replace with username
    $password = "student123"; //Replace with password
    $dbname = "School"; //Replace with database
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// Function to fetch all students
function getAllStudents() {
    $conn = connectDB();
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);
    $students = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $students[] = $row;
        }
    }
    $conn->close();
    return array("success" => true, "requestTime" => round(microtime(true) * 1000), "students" => $students);
}

// Function to add a new user
function addUser($name, $age) {
    $conn = connectDB();
    $sql = "INSERT INTO students (name, age) VALUES ('$name', '$age')";
    if ($conn->query($sql) === TRUE) {
        $response = array("success" => true, "requestTime" => round(microtime(true) * 1000), "message" => "New record created successfully");
    } else {
        $response = array("success" => false, "requestTime" => round(microtime(true) * 1000), "message" => "Error: " . $sql . "<br>" . $conn->error);
    }
    $conn->close();
    return $response;
}

// Function to edit a user by ID
function editUser($id, $name, $age) {
    $conn = connectDB();
    $sql = "UPDATE students SET name='$name', age='$age' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        $response = array("success" => true, "requestTime" => round(microtime(true) * 1000), "message" => "Record updated successfully");
    } else {
        $response = array("success" => false, "requestTime" => round(microtime(true) * 1000), "message" => "Error: " . $sql . "<br>" . $conn->error);
    }
    $conn->close();
    return $response;
}

// Function to delete a user by ID
function deleteUser($id) {
    $conn = connectDB();
    $sql = "DELETE FROM students WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        $response = array("success" => true, "requestTime" => round(microtime(true) * 1000), "message" => "Record deleted successfully");
    } else {
        $response = array("success" => false, "requestTime" => round(microtime(true) * 1000), "message" => "Error: " . $sql . "<br>" . $conn->error);
    }
    $conn->close();
    return $response;
}

// Perform the API call based on the function name provided
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action === 'getAllStudents') {
        header('Content-Type: application/json');
        echo json_encode(getAllStudents());
    } elseif ($action === 'addUser' && isset($_GET['name']) && isset($_GET['age'])) {
        header('Content-Type: application/json');
        echo json_encode(addUser($_GET['name'], $_GET['age']));
    } elseif ($action === 'editUser' && isset($_GET['id']) && isset($_GET['name']) && isset($_GET['age'])) {
        header('Content-Type: application/json');
        echo json_encode(editUser($_GET['id'], $_GET['name'], $_GET['age']));
    } elseif ($action === 'deleteUser' && isset($_GET['id'])) {
        header('Content-Type: application/json');
        echo json_encode(deleteUser($_GET['id']));
    } else {
        $response = array("success" => false, "requestTime" => round(microtime(true) * 1000), "message" => "Invalid action");
        header('Content-Type: application/json');
        echo json_encode($response);
    }
} else {
    $response = array("success" => false, "requestTime" => round(microtime(true) * 1000), "message" => "No action specified");
    header('Content-Type: application/json');
    echo json_encode($response);
}

?>
