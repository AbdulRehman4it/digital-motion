<?php

require_once('./db.php');
require_once('./authentication.php');

if (isset($_POST['toggle_status']) && isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    try {
       

        // Fetch the current status
        $query = "SELECT verify_status FROM users WHERE id = :user_id";
        $stmt = $conn->prepare($query);
        $stmt->execute(['user_id' => $user_id]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $current_status = $user['verify_status'];

            // Toggle the status
            $new_status = ($current_status === 'Approved') ? 'Disabled' : 'Approved';

            // Update the status in the database
            $update_query = "UPDATE users SET verify_status = :new_status WHERE id = :user_id";
            $update_stmt = $conn->prepare($update_query);
            $update_stmt->execute(['new_status' => $new_status, 'user_id' => $user_id]);

            // Redirect back to the table page after update
            header("Location: ../adduser.php"); // Replace 'your_table_page.php' with the correct file name
            exit();
        } else {
            echo "User not found!";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
 // Handle deletion of categories
 if (isset($_POST['delete'])) {
    $delete_id = $_POST['delete'];
    $delete_query = "DELETE FROM users WHERE id = :id";
    $stmt = $conn->prepare($delete_query);
    $stmt->bindParam(':id', $delete_id);
    if ($stmt->execute()) {
        $msg = "User Deleted Successfully";
    } else {
        $error_msg = "Error Deleting user";
    }
    header("Location: ../adduser.php");
}
?>
