<?php
require_once 'vendor/autoload.php';
require_once 'config.php'; // Include the database connection

session_start();

// Initialize configuration
$clientID = '184304627918-ucejito0g3knjl1elmk77h95d36grodv.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/web/home.html';

// Create a client request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    // Get profile info
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    $google_id = $google_account_info->id;
    $email = $google_account_info->email;
    $name = $google_account_info->name;

    // Check if the user exists in the database
    $sql_check = "SELECT * FROM users WHERE google_id = ? OR email = ?";
    if ($stmt_check = $conn->prepare($sql_check)) {
        $stmt_check->bind_param("ss", $google_id, $email);
        $stmt_check->execute();
        $result = $stmt_check->get_result();

        if ($result->num_rows > 0) {
            // User exists, start session
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $name;
            $_SESSION['user_email'] = $email;

            // Redirect with SweetAlert2
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
            echo '<script>
                    Swal.fire({
                        title: "Login Successful!",
                        text: "Welcome back, ' . $name . '!",
                        icon: "success",
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        window.location.href = "home.html?login=success";
                    });
                  </script>';
            exit();
        } else {
            // New user, insert into the database
            $sql_insert = "INSERT INTO users (name, email, google_id) VALUES (?, ?, ?)";
            if ($stmt_insert = $conn->prepare($sql_insert)) {
                $stmt_insert->bind_param("sss", $name, $email, $google_id);

                if ($stmt_insert->execute()) {
                    // Start session for the new user
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $name;
                    $_SESSION['user_email'] = $email;

                    // Redirect with SweetAlert2
                    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
                    echo '<script>
                            Swal.fire({
                                title: "Registration Successful!",
                                text: "Welcome, ' . $name . '!",
                                icon: "success",
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                window.location.href = "home.html?login=success";
                            });
                          </script>';
                    exit();
                } else {
                    die("Error during registration: " . $stmt_insert->error);
                }
            } else {
                die("Error preparing SQL statement for user insertion: " . $conn->error);
            }
        }

        $stmt_check->close();
    } else {
        die("Error preparing SQL statement for user check: " . $conn->error);
    }
} else {
    // Redirect directly to Google login
    header('Location: ' . $client->createAuthUrl());
    exit();
}
?>
