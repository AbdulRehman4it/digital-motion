<?php
require_once('./inc/authentication.php');
$web_title = "Edit Blog";
require_once('./sidenav.php');
require_once('./inc/db.php');



// Check if a blog ID is passed to edit
if (isset($_GET['id'])) {
    $blog_id = $_GET['id'];

    // Fetch the blog data from the database
    $stmt = $conn->prepare("SELECT * FROM blogs WHERE id = :id");
    $stmt->bindParam(':id', $blog_id);
    $stmt->execute();
    $blog = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$blog) {
        $_SESSION['message'] = 'Blog not found.';
        header('Location: allblogs.php'); // Redirect back to the blog list page if the blog doesn't exist
        exit();
    }
} else {
    $_SESSION['message'] = 'No blog ID specified.';
    header('Location: allblogs.php'); // Redirect if no ID is passed
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect updated form data
    $first_title = $_POST['first_title'];
    $blog_data = $_POST['blog_data'];
    $date = $_POST['date'];

    // Sanitize the blog data
    $blog_data = strip_tags($blog_data, '<p><a><h1><em><u>'); // Allow certain tags only

    // Handle image upload (optional)
    $image_path = $blog['image']; // Default to the current image if no new image is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_path = '../assets/img/' . basename($image_name);

        if (move_uploaded_file($image_tmp, $image_path)) {
            $image_path = "./assets/img/" . basename($image_name); // Update the image path
        } else {
            $_SESSION['message'] = 'Error uploading image.';
        }
    }

    // Update the blog in the database
    $stmt = $conn->prepare("UPDATE blogs SET first_title = :first_title, blog_data = :blog_data, date = :date, image = :image WHERE id = :id");
    $stmt->bindParam(':first_title', $first_title);
    $stmt->bindParam(':blog_data', $blog_data);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':image', $image_path);
    $stmt->bindParam(':id', $blog_id);

    if ($stmt->execute()) {
        $_SESSION['message'] = 'Blog updated successfully!';
        header('Location: allblogs.php'); // Redirect back to allblogs.php after successful update
        exit();
    } else {
        $_SESSION['message'] = 'Error updating blog data.';
    }
}
?>

<!-- Main content -->
<div class="flex-1 min-h-screen p-10">
    <div class="container mx-auto mt-10">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="container mx-auto p-4">
                <form action="editblog.php?id=<?php echo $blog_id; ?>" method="POST" enctype="multipart/form-data">
                    
                    <!-- Title Field -->
                    <div class="mb-4">
                        <label for="first_title" class="block text-sm font-medium text-gray-700">Blog Title</label>
                        <input type="text" id="first_title" name="first_title" value="<?php echo $blog['first_title']; ?>" class="mt-1 block w-full text-gray-700" required>
                    </div>
                    <!-- Blog Content Field -->
                    <div class="mb-4">
                        <label for="blog_data" class="block text-sm font-medium text-gray-700">Blog Content</label>
                        <textarea id="blog_data" name="blog_data" class="mt-1 block w-full text-gray-700" required><?php echo htmlspecialchars($blog['blog_data']); ?></textarea>
                    </div>
                    <!-- Date Field -->
                    <div class="mb-4">
                        <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                        <input type="datetime-local" id="date" name="date" value="<?php echo date('Y-m-d\TH:i', strtotime($blog['date'])); ?>" class="mt-1 block w-full text-gray-700" required>
                    </div>
                    <!-- Image Upload Field (Optional) -->
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">Blog Image</label>
                        <input type="file" id="image" name="image" class="mt-1 block w-full text-gray-700">
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded">Update Blog</button>
                </form>
                <script>
                    // Initialize CKEditor for the 'blog_data' textarea
                    CKEDITOR.replace('blog_data');
                </script>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<?php if (isset($_SESSION['message'])): ?>
    <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="messageModalLabel">Notification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo $_SESSION['message']; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Show the modal after the page loads
        window.onload = function() {
            var modal = new bootstrap.Modal(document.getElementById('messageModal'));
            modal.show();
        };
    </script>
<?php endif; ?>
