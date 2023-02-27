<?php


// Include the Person class definition
include 'assignment5_2.php';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the name and email from the form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Create a new instance of the Person class
    $person = new Person();

    // Set the name and email properties of the person object
    $person->setName($name);
    $person->setEmail($email);

    // Display the name and email on the webpage
    echo "<p>Name: " . $person->getName() . "</p>";
    echo "<p>Email: " . $person->getEmail() . "</p>";
}