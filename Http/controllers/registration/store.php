<?php
use Core\Database;
use Core\App;
use Core\Validator;

// 1. Initialize variables to prevent "Undefined variable" errors
// $errors = [];
// $userTypes = ['admin', 'regular']; // You likely fetch this from DB or Config, defined here for safety.
// $email = $_POST['email'] ?? '';
// $username = $_POST['username'] ?? '';
// $user_type = $_POST['user_type'] ?? '';

$userTypes = $db->query("SELECT * FROM user_types")->get();

// 3. Initialize variables
$errors = [];
$email = $_POST['email'] ?? '';
$username = $_POST['username'] ?? '';
$user_type = $_POST['user_type'] ?? ''; // This will be the ID (e.g., 1, 2)

// 4. Process the Form ONLY if it is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $password = $_POST["password"];

    // Validation
    if (! Validator::email($email)) {
        $errors['email'] = 'Please provide a valid email address.';
    }

    if (! Validator::string($password, 7, 255)) {
        $errors['password'] = 'Please provide a valid password with at least seven characters.';
    }

    if (! Validator::string($username, 3, 255)) {
        $errors['username'] = 'Please provide a valid username.';
    }

    // UPDATED: Changed min length to 1, because an ID like "1" is valid.
    if (! Validator::string($user_type, 1, 255)) {
        $errors['user_type'] = 'Please select a valid user type.';
    }

    // Only proceed if there are no validation errors
    if (empty($errors)) {
        // Check if the account already exists
        $user = $db->query('SELECT * FROM users WHERE email = :email', [
            'email' => $email
        ])->find();

        if ($user) {
            header('Location: /login');
            exit();
        } else {
            // Save new user to the database
            $db->query(
                "INSERT INTO users (email, password, username, user_type) 
                 VALUES (:email, :password, :username, :user_type)",
                [
                    'email' => $email,
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                    'username' => $username,
                    'user_type' => $user_type // This stores the ID (e.g., 1)
                ]
            );

            login([
                'email' => $email,
                'username' => $username,
                'user_type' => $user_type
            ]);

            header('Location: /');
            exit();
        }
    }
}