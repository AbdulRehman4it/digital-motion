<?php 

session_start();
include('./inc/db.php');

if (isset($_POST['login-btn'])) {
    if (!empty(trim($_POST['email'])) && !empty(trim($_POST['password']))) {
        $email = $_POST['email'];
        $password = $_POST['password']; 
        
        // Hash the password using MD5 (since your database stores MD5 hashes)
        $hashed_password = md5($password);
        
        // Use PDO prepared statements to prevent SQL injection
        $login_query = "SELECT * FROM users WHERE email = :email LIMIT 1";
        $stmt = $conn->prepare($login_query);
        $stmt->execute(['email' => $email]);
        
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Compare the hashed input password with the stored MD5 password
            if ($hashed_password === $row['password']) {
                
                // Check if the user's email is verified
                if ($row['verify_status'] == "Approved") {
                    $_SESSION['authenticated'] = TRUE;
                    $_SESSION['auth_user'] = [
                        'username' => $row['name'],
                        'phone' => $row['phone'],
                        'email' => $row['email']
                    ];
                    $_SESSION['status'] = "You are logged in successfully";
                    header("Location: index.php");
                    exit(0);
                } else {
                    $_SESSION['status'] = "Please verify your email address to login";
                    header("Location: login.php");
                    exit(0);
                }
            } else {
                // Invalid password
                $_SESSION['status'] = "Invalid Email or Password";
                header("Location: login.php");
                exit(0);
            }
        } else {
            // No user found with that email
            $_SESSION['status'] = "Invalid Email or Password";
            header("Location: login.php");
            exit(0);
        }
    } else {
        // All fields are required
        $_SESSION['status'] = "All fields are required";
        header("Location: login.php");
        exit(0);
    }
}
?>
