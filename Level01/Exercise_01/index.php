<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $age = $_POST['age'] ?? '';

    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;

    echo "<h2>Form submitted successfully!</h2>";
    echo "Username: " . $username . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Age: " . $age . "<br>";

    echo "<h3>Values stored:</h3>";
    echo "Username: " . $_SESSION['username'] . "<br>";
    echo "Email: " . $_SESSION['email'] . "<br>";

    echo '<br><a href="form.php">Submit again</a>';
} else {
    echo "<h2>Please submit the form first.</h2>";
    echo '<a href="form.php">Go to form</a>';
}
