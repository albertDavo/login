<?php
// Inluding configuration , connecting to db
require_once "config.php" ;


if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['registration'])) {
    $first_name = for_sql($_POST['first_name']);
    $last_name = for_sql($_POST['last_name']);
    $date = for_sql($_POST['date']);
    $email = for_sql($_POST['email']);
    $password = md5($_POST['password']);

    // Check if there is email with this name in db
    $check_if_email_exist = $connect_to_db->query("SELECT email FROM users WHERE email = '$email' ");
    if (mysqli_num_rows($check_if_email_exist) == 1) {
        echo "There is account with this email";
    } else {
        $connect_to_db->query("INSERT INTO users(first_name, last_name, birthday, email, password) VALUES ('$first_name','$last_name','$date','$email','$password')");
        echo "Congratulations, You are registered!!";
    }
}
