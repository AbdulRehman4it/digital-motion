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
                <div class="md:col-span-2">
                    <h1 class="text-3xl font-bold flex items-center mb-6"><?php echo $web_title ?> </h1>
                    <hr class="my-4 border-t-2 border-gray-300" />

                    <?php
                    // Get category name from URL
                    $category_name = isset($_GET['name']) ? $_GET['name'] : '';

                    $stmt = $conn->prepare("SELECT `id`, `first_title`, `date` FROM `blogs` ORDER BY `date` DESC");
                    $stmt->execute();

                    // Fetch all blogs in the specified category
                    $blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    ?>
                    <section class="py-12" data-aos="flip-right">
                        <div class="relative w-full max-w-full mb-8">
                            <input 
                                type="text" 
                                id="search-input" 
                                placeholder="Search..." 
                                class="w-full p-4 pl-12 border border-gray-300 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-[#004890]"
                                oninput="searchBlogs()"
                            >
                            <img src="../assets/img/serach.png" alt="Search" class="absolute top-1/2 left-3 transform -translate-y-1/2 h-6 w-6">
                        </div>

                        <!-- Table Section -->
                        <div id="blog-table" class="overflow-x-auto">
                            <table class="min-w-full table-auto border-collapse">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-4 text-left border-b">Blog Title</th>
                                        <th class="px-6 py-4 text-left border-b">Date</th>
                                        <th class="px-6 py-4 text-left border-b">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Blog Rows will be injected here dynamically -->
                                </tbody>
                            </table>
                        </div>

                        <div id="pagination" class="flex justify-center items-center my-8">
                            <button id="prev-btn" class="px-4 py-2 bg-[#004890] text-white rounded-lg disabled:opacity-50" onclick="changePage(-1)">Previous</button>
                            <span class="mx-4" id="current-page">1</span>
                            <button id="next-btn" class="px-4 py-2 bg-[#004890] text-white rounded-lg" onclick="changePage(1)">Next</button>
                        </div>
                    </section>

                    <script>
                        const blogs = <?php echo json_encode($blogs); ?>; // Passing PHP blogs data to JavaScript
                        const blogsPerPage = 10; // Number of blogs to display per page
                        let currentPage = 1; // Current page
                        let filteredBlogs = blogs; // Blogs to display (default is all blogs)

                        function displayBlogs(blogsToDisplay) {
                            const blogTableBody = document.querySelector('#blog-table tbody');
                            blogTableBody.innerHTML = ''; // Clear existing rows

                            // Calculate start and end indices for pagination
                            const startIndex = (currentPage - 1) * blogsPerPage;
                            const endIndex = startIndex + blogsPerPage;
                            const blogsToShow = blogsToDisplay.slice(startIndex, endIndex); // Get blogs for the current page

                            blogsToShow.forEach(blog => {
                                const row = `
                                    <tr>
                                        <td class="px-6 py-4 border-b">${blog.first_title}</td>
                                        <td class="px-6 py-4 border-b">${blog.date}</td>
                                        <td class="px-6 py-4 border-b text-center">
                                            <a href="../singleblog.php?id=${blog.id}" class="px-4 py-2 bg-blue-500 text-white rounded">View</a>
                                            <a href="editblog.php?id=${blog.id}" class="px-4 py-2 bg-yellow-500 text-white rounded">Edit</a>
                                            <button class="px-4 py-2 bg-red-500 text-white rounded" onclick="deleteBlog(${blog.id})">Delete</button>
                                        </td>
                                    </tr>
                                `;
                                blogTableBody.innerHTML += row; // Append new row
                            });

                            updatePaginationControls(blogsToDisplay.length); // Update pagination controls
                        }

                        function updatePaginationControls(totalBlogs) {
                            const totalPages = Math.ceil(totalBlogs / blogsPerPage);
                            document.getElementById('current-page').innerText = `${currentPage}`;
                            document.getElementById('prev-btn').disabled = currentPage === 1; // Disable previous button on first page
                            document.getElementById('next-btn').disabled = currentPage === totalPages; // Disable next button on last page
                        }

                        function searchBlogs() {
                            const searchTerm = document.getElementById('search-input').value.toLowerCase();
                            filteredBlogs = blogs.filter(blog => blog.first_title.toLowerCase().includes(searchTerm));
                            currentPage = 1; // Reset to first page on search
                            displayBlogs(filteredBlogs); // Display filtered blogs
                        }

                        function changePage(direction) {
                            currentPage += direction; // Update current page
                            displayBlogs(filteredBlogs); // Re-display blogs
                        }

                        // Display all blogs on page load
                        displayBlogs(blogs);
                    </script>

                </div>
            </div>
        </div>
  
<script>
    function deleteBlog(blogId) {
        // Confirm before deleting
        if (confirm("Are you sure you want to delete this blog?")) {
            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Set up the request
            xhr.open("POST", "delete_blog.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            // Handle the response
            xhr.onload = function () {
                if (xhr.status == 200) {
                    // Check the response from the server
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        // On successful deletion, show a message and reload the page
                        alert(response.message);
                        window.location.href = "allblogs.php"; // Redirect to the blogs list
                    } else {
                        // If something goes wrong
                        alert(response.message);
                    }
                } else {
                    alert("Error: Could not delete the blog.");
                }
            };

            // Send the blog ID to the server
            xhr.send("id=" + blogId);
        }
    }
</script>








    
    </div>

</div>
</div>

<?php require_once('./inc/foot.php'); ?>











