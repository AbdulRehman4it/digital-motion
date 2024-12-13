<?php
require_once('./inc/db.php');
require_once('./inc/authentication.php');
$web_title = "Add Blog";
 require_once('./inc/top.php'); 
 if (isset($_SESSION['message'])) {
    // Display the message using JavaScript alert
    echo "<script>alert('".$_SESSION['message']."');</script>";

    // Clear the session message after it's displayed
    unset($_SESSION['message']);
}
?>  
<!-- Sidebar -->
<div class="sidenav bg-gray-800 text-white">
<div class="flex">
    <!-- Toggle Button -->
    <button id="menu-btn" class="lg:hidden w-20 p-2 bg-gray-900 text-white focus:outline-none">
        ☰
    </button>

    <!-- Sidebar -->
    <div id="sidebar" class="fixed inset-y-0 left-0 w-64 bg-gray-900 text-white transform -translate-x-full z-40 transition-transform duration-300 lg:translate-x-0 lg:w-64">
        <div class="flex items-center justify-between h-16 border-b border-gray-700 px-4">
            <h1 class="text-lg font-bold">Blog Control Panel</h1>
            <button id="close-btn" class="text-white p-2 focus:outline-none lg:hidden">×</button>
        </div>
        <ul class="mt-4">
            <li class="px-6 py-3 hover:bg-gray-700 transition-colors">
                <a href="index.php">Home</a>
            </li>
            <li class="px-6 py-3 hover:bg-gray-700 transition-colors">
                <a href="addblog.php">Add Blog</a>
            </li>
            <li class="px-6 py-3 hover:bg-gray-700 transition-colors">
                <a href="allblogs.php">All Blogs</a>
            </li>
            <li class="border-t border-gray-700 my-2"></li>
            <li class="px-6 py-3 hover:bg-gray-700 transition-colors">
                <a href="logout.php">Logout</a>
            </li>
            <li class="border-t border-gray-700 my-2"></li>
            <li class="px-6 py-3"><strong>© Digital Motion</strong></li>
        </ul>
    </div>

    <!-- Main Content Area -->
    <div class="flex-1 min-h-screen p-10">
        <!-- Your main content goes here -->
    </div>

</div>

<script>
    const sidebar = document.getElementById('sidebar');
    const menuBtn = document.getElementById('menu-btn');
    const closeBtn = document.getElementById('close-btn');

    // Open sidebar
    menuBtn.addEventListener('click', () => {
        sidebar.classList.remove('-translate-x-full');
    });

    // Close sidebar
    closeBtn.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
    });
</script>
</div>

<!-- Main content -->
<div class="main-content flex-1 min-h-screen p-10 ml-[250px]">
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
                        <form action="add_blog.php" method="POST" enctype="multipart/form-data">
            <!-- Image Field -->
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" id="image" name="image" class="mt-1 block w-full text-gray-700" required>
            </div>
            <!-- Title Field -->
            <div class="mb-4">
                <label for="first_title" class="block text-sm font-medium text-gray-700">Blog Title</label>
                <input type="text" id="first_title" name="first_title" class="mt-1 block w-full text-gray-700" required>
            </div>
            <!-- Blog Content Field -->
            <div class="mb-4">
                <label for="blog_data" class="block text-sm font-medium text-gray-700">Blog Content</label>
                <textarea id="blog_data" name="blog_data" class="mt-1 block w-full text-gray-700" required></textarea>
            </div>
            <!-- Date Field -->
            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                <input type="datetime-local" id="date" name="date" class="mt-1 block w-full text-gray-700" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded">Submit</button>
        </form>
        <script>
        // Initialize CKEditor for the 'blog_data' textarea
        CKEDITOR.replace('blog_data');
    </script>
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
</div>

<?php require_once('./inc/foot.php'); ?>


