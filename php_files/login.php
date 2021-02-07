<?php
require_once "config.php";
if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['login'])) {
    $email = for_sql($_POST['email']);
    $password = md5($_POST['password']);
    
    $check_if_account_exist = $connect_to_db->query("SELECT email, password FROM users WHERE email = '$email' && password = '$password' ");
    if (mysqli_num_rows($check_if_account_exist)) {
        echo "You are logged in";
    } else {
        echo "there isn't account";
    }
}
