<?php
require_once('./inc/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $blog_id = $_POST['id'];

    // Prepare the SQL query to delete the blog by ID
    $stmt = $conn->prepare("DELETE FROM blogs WHERE id = :id");
    $stmt->bindParam(':id', $blog_id);

    // Execute the query
    if ($stmt->execute()) {
        // Return a success message as JSON
        echo json_encode(['success' => true, 'message' => 'Blog deleted successfully.']);
    } else {
        // Return an error message as JSON
        echo json_encode(['success' => false, 'message' => 'Failed to delete the blog.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
}
?>
