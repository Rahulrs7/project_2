<?php
$conn = mysqli_connect("localhost", "root", "rahul123", "pglife");

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
