<!-- add blog form php start-->
<!--  -->
<!--  -->
<?php
    if (isset($_POST['add-blog'])) {
    // Get form data
    $date = $_POST['date'];
    $first_title = $_POST['first_title'];
    $second_title = $_POST['second_title'];
    $third_title = $_POST['third_title'];
    $author = $_POST['author'];
    $categories = $_POST['categories']; // Category name and ID
    list($category_id, $category_name) = explode('|', $categories); // Separate category ID and name
    $blog_data = $_POST['blog_data'];
    $blog_data2 = $_POST['blog_data2'];

    // File upload logic for images and video
    // Adjust paths and filenames accordingly
    $image1 = $_FILES['image1']['name'];
    $video = $_FILES['video']['name'];
    
    // Directory where files will be uploaded
    $target_dir = "uploads/";
    
    // Path to upload images and videos
    $image1_path = $target_dir . basename($image1);
    $video_path = $target_dir . basename($video);
    
    // Move uploaded files to target directory
    move_uploaded_file($_FILES['image1']['tmp_name'], $image1_path);
    move_uploaded_file($_FILES['video']['tmp_name'], $video_path);

    // Insert blog data into the database
    $sql = "INSERT INTO blogs (date, first_title, second_title, third_title, author, category_id, category_name, blog_data, blog_data2, image1, video) 
            VALUES (:date, :first_title, :second_title, :third_title, :author, :category_id, :category_name, :blog_data, :blog_data2, :image1, :video)";

    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':first_title', $first_title);
    $stmt->bindParam(':second_title', $second_title);
    $stmt->bindParam(':third_title', $third_title);
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':category_id', $category_id);
    $stmt->bindParam(':category_name', $category_name);
    $stmt->bindParam(':blog_data', $blog_data);
    $stmt->bindParam(':blog_data2', $blog_data2);
    $stmt->bindParam(':image1', $image1);
    $stmt->bindParam(':video', $video);

    // Execute and handle errors
    if ($stmt->execute()) {
        $msg = "Blog added successfully";
    } else {
        $error_msg = "Error adding blog.";
    }

    }
    ?>
<!--  -->
<!--  -->
<!-- add blog form php end -->