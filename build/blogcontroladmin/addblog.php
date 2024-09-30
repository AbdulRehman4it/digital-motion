
<?php
require_once('./inc/authentication.php');
$web_title = "Add Blogs";
require_once('./sidenav.php');?>  

  <!-- Main content -->
  <div class="flex-1 min-h-screen  p-10">
        <!-- Content -->
        <div id="main-content">


        <div class="container mx-auto mt-10">
        <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="container mx-auto p-4">
        <div class="flex">
            

            <div class="w-full">
            <h1 class="text-3xl font-bold flex items-center"><?php echo $web_title?> </h1>
            <hr class="my-4 border-t-2 border-gray-300" />


                <div class="flex justify-center">
                    <div class="w-full">
                       

                        <div class="container mx-auto p-4">
                            <form action="../all-in-one-php.php" class="form-horizontal" method="post" enctype="multipart/form-data">

                                <input type="hidden" name="categories" value="<?php echo $category_name; ?>">

                                <div class="mb-4">
                                    <label class="block text-lg font-semibold" for="date">Date</label>
                                    <input class="mt-2 block w-full border rounded-md p-2" type="date" name="date" id="date" placeholder="Enter Date" value="<?php if (isset($date)) { echo $date; } ?>">
                                </div>

                                <div class="grid grid-cols-3 gap-4">
                                    <div>
                                        <label class="block text-lg font-semibold" for="first_title">First Title</label>
                                        <input class="mt-2 block w-full border rounded-md p-2" type="text" name="first_title" id="first_title" value="<?php if (isset($first_title)) { echo $first_title; } ?>" placeholder="Enter Title">
                                    </div>
                                    <div>
                                        <label class="block text-lg font-semibold" for="second_title">Second Title</label>
                                        <input class="mt-2 block w-full border rounded-md p-2" type="text" name="second_title" id="second_title" value="<?php if (isset($second_title)) { echo $second_title; } ?>" placeholder="Enter Title">
                                    </div>
                                    <div>
                                        <label class="block text-lg font-semibold" for="third_title">Third Title</label>
                                        <input class="mt-2 block w-full border rounded-md p-2" type="text" name="third_title" id="third_title" value="<?php if (isset($third_title)) { echo $third_title; } ?>" placeholder="Enter Title">
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="block text-lg font-semibold" for="author">Author</label>
                                    <input class="mt-2 block w-full border rounded-md p-2" type="text" name="author" id="author" value="<?php if (isset($author)) { echo $author; } ?>" placeholder="Author">
                                </div>

                                <div class="grid grid-cols-1 gap-4">
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <div class="mb-4">
                                        <label class="block text-lg font-semibold" for="image<?php echo $i; ?>">Blog_Image<?php echo $i; ?></label>
                                        <input class="mt-2 block w-full border rounded-md p-2" type="file" name="image<?php echo $i; ?>" id="image<?php echo $i; ?>" required>
                                    </div>
                                    <?php endfor; ?>
                                </div>

                                <div class="mb-4">
    <label class="block text-lg font-semibold" for="categories">Categories</label>
    <select class="mt-2 block w-full border rounded-md p-2" name="categories" id="categories" required>
        <?php
        // Fetch categories from database using PDO
        $query = "SELECT * FROM categories";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($categories) {
            foreach ($categories as $category) {
                $category_id = $category['id'];
                $category_name = $category['category'];
                echo "<option value='$category_id|$category_name'>$category_name</option>";
            }
        } else {
            echo "<option>No categories found</option>";
        }
        ?>
    </select>
</div>


                                <div class="mb-4">
                                    <label class="block text-lg font-semibold" for="video">Blog Video</label>
                                    <input class="mt-2 block w-full border rounded-md p-2" type="file" name="video" id="video" required>
                                </div>

                                <div class="mb-4">
                                    <label class="block text-lg font-semibold" for="blog_data">Blog Data</label>
                                    <textarea name="blog_data" id="blog_data" class="tinymce mt-2 block w-full border rounded-md p-2" placeholder="data here"><?php if (isset($blog_data)) { echo $blog_data; } ?></textarea>
                                </div>

                                <div class="mb-4">
                                    <label class="block text-lg font-semibold" for="blog_data2">Blog Data2</label>
                                    <textarea name="blog_data2" id="blog_data2" class="tinymce mt-2 block w-full border rounded-md p-2" placeholder="data here"><?php if (isset($blog_data2)) { echo $blog_data2; } ?></textarea>
                                </div>

                                <div class="flex justify-end">
                                    <input type="submit" value="Post" name="add-blog" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 mt-3">
                                    <a href="view_posts.php" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 mt-3 ml-2">View All Posts</a>

                                    <?php
                                    if (isset($error_msg)) {
                                        echo "<span class='text-red-500 ml-2'>{$error_msg}</span>";
                                    }
                                    if (isset($msg)) {
                                        echo "<span class='text-green-500 ml-2'>{$msg}</span>";
                                    }
                                    ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


        </div>
        </div>



        </div>
    </div>
    <?php require_once('./inc/foot.php');?>