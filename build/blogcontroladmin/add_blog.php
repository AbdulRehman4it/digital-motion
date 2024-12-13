<?php
require_once('./inc/authentication.php');
$web_title = "Add Blogs";
require_once('./inc/db.php');

session_start();  // Start the session at the beginning of the script

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $first_title = $_POST['first_title'];
    $blog_data = $_POST['blog_data'];
    $date = $_POST['date'];

    // Sanitize the blog_data to remove unwanted HTML tags (e.g., <strong>)
    $blog_data = strip_tags($blog_data, '<p><a><h1><em><u>'); // Keep <p>, <a>, <em>, <u> tags, remove others

    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_path = '../assets/img/' . basename($image_name); // Path to save the uploaded image
        
        // Move uploaded image to the 'uploads' folder
        if (move_uploaded_file($image_tmp, $image_path)) {
            // Image upload success
            $outputpath = "./assets/img/" . basename($image_name);

            // Prepare and execute the SQL query to insert the data into the database
            $stmt = $conn->prepare("INSERT INTO blogs (image, first_title, blog_data, date) VALUES (:image, :first_title, :blog_data, :date)");
            $stmt->bindParam(':image', $outputpath);
            $stmt->bindParam(':first_title', $first_title);
            $stmt->bindParam(':blog_data', $blog_data);
            $stmt->bindParam(':date', $date);

            // Execute the query
            if ($stmt->execute()) {
                // Store success message in session
                $_SESSION['message'] = 'Blog entry added successfully!';
                
                // Redirect to the addblog.php page with the success message
                header('Location: addblog.php');
                exit(); // Ensure no further code is executed
            } else {
                $_SESSION['message'] = 'Error inserting blog data.';
            }
        } else {
            $_SESSION['message'] = 'Error uploading image.';
        }
    } else {
        $_SESSION['message'] = 'Image file is required.';
    }
}
?>
