<?php
require_once('./inc/authentication.php');
$web_title = "Add Category";
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

    <!-- Form for Adding Category -->
    <?php
   require_once('./inc/db.php');
   
    if (isset($_POST['submit'])) {
        $cate_name = trim($_POST['category']);
        if (empty($cate_name)) {
            $error_msg = "All (*) fields are Required";
        } else {
            $cate_query = "INSERT INTO `categories` (`category`) VALUES (:category)";
            $stmt = $conn->prepare($cate_query);
            $stmt->bindParam(':category', $cate_name);
            try {
                $stmt->execute();
                $msg = "Category Submitted";
                $cate_name = "";
            } catch (PDOException $e) {
                $error_msg = "Error: " . $e->getMessage();
            }
        }
    }

    // Handle deletion of categories
    if (isset($_POST['delete'])) {
        $delete_id = $_POST['delete'];
        $delete_query = "DELETE FROM categories WHERE id = :id";
        $stmt = $conn->prepare($delete_query);
        $stmt->bindParam(':id', $delete_id);
        if ($stmt->execute()) {
            $msg = "Category Deleted Successfully";
        } else {
            $error_msg = "Error Deleting Category";
        }
    }
    ?>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Add Category Form -->
        <div>
            <form action="#" method="post">
                <div class="mb-4">
                    <label for="category" class="block text-sm font-medium text-gray-700">Category Name*:</label>
                    <input type="text" value="<?php if (isset($cate_name)) { echo htmlspecialchars($cate_name); } ?>" placeholder="Category Name"
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                           name="category" />
                </div>
                <input type="submit" value="Add Category" name="submit"
                       class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 mt-3" />
                <?php  
                if (isset($error_msg)) {
                    echo "<span class='text-red-500 block mt-2'>$error_msg</span>";
                }
                if (isset($msg)) {
                    echo "<span class='text-green-500 block mt-2'>$msg</span>";
                }
                ?>
            </form>
        </div>

        <!-- Category Table -->
        <div>
        <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="border-b bg-gray-100">
                <th class="py-2 px-4 text-left text-gray-600">Sr #</th>
                <th class="py-2 px-4 text-left text-gray-600">Category Name</th>
                <th class="py-2 px-4 text-left text-gray-600">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $cate_query = "SELECT * FROM categories ORDER BY id DESC";
        $stmt = $conn->prepare($cate_query);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($categories as $cate_row) {
            $cate_id = $cate_row['id'];
            $cate_category = $cate_row['category'];
        ?>
            <tr class="border-b">
                <td class="py-2 px-4"><?php echo htmlspecialchars($cate_id); ?></td>
                <td class="py-2 px-4"><?php echo htmlspecialchars($cate_category); ?></td>
                <td class="py-2 px-4 flex space-x-4">
                    <!-- Edit Button -->
                    <form action="./edit_category.php" method="GET">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($cate_id); ?>" />
                        <button type="submit" class="text-blue-500">Edit</button>
                    </form>

                    <!-- Delete Button -->
                    <form action="" method="POST">
                        <button type="submit" name="delete" value="<?php echo htmlspecialchars($cate_id); ?>" class="text-red-500">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

        </div>
    </div>
</div>
    



                </div>
                </div>

    </div>
</div>
<?php require_once('./inc/foot.php');?>