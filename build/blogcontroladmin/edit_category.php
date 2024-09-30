<?php
require_once('./inc/db.php');

// Check if the ID is passed in the URL
if (isset($_GET['id'])) {
    $cate_id = $_GET['id'];

    // Fetch the category details
    $query = "SELECT * FROM categories WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $cate_id);
    $stmt->execute();
    $category = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($category) {
        $cate_name = $category['category'];
    } else {
        echo "Category not found!";
        exit;
    }
}

// Handle form submission to update the category
if (isset($_POST['update'])) {
    $new_category_name = trim($_POST['category']);
    
    if (!empty($new_category_name)) {
        $update_query = "UPDATE categories SET category = :category WHERE id = :id";
        $stmt = $conn->prepare($update_query);
        $stmt->bindParam(':category', $new_category_name);
        $stmt->bindParam(':id', $cate_id);
        
        if ($stmt->execute()) {
            header("Location: ./addcategory.php?msg=Category updated successfully");
            exit();
        } else {
            echo "Error updating category!";
        }
    } else {
        echo "Category name cannot be empty!";
    }
}
require_once('./inc/authentication.php');
$web_title = "Edit Category";
require_once('./sidenav.php');?>  
  <!-- Main content -->
  <div class="flex-1 min-h-screen  p-10">
        <!-- Content -->
        <div id="main-content">
           
        <div class="container mx-auto mt-10">
        <div class="bg-white p-6 rounded-lg shadow-md">

        <div class="md:col-span-2">
        <h1 class="text-3xl font-bold flex items-center"><?php echo $web_title?> </h1>
        <hr class="my-4 border-t-2 border-gray-300" />

        <form action="" method="POST">
    <label for="category">Category Name:</label>
    <input type="text" name="category" value="<?php echo htmlspecialchars($cate_name); ?>" required />
    <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 mt-3" type="submit" name="update">Update Category</button>
    </form>
    </div>
    



        </div>
        </div>

    </div>
</div>
<?php require_once('./inc/foot.php');?>
