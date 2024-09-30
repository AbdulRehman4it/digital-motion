<?php
require_once('./inc/authentication.php');
$web_title = "All Blogs";
require_once('./sidenav.php');?>





  <!-- Main content -->
  <div class="flex-1 min-h-screen  p-10">
        <!-- Content -->
        <div id="main-content ">
            
        <div class="container mx-auto mt-10">
        <div class="bg-white p-6 rounded-lg shadow-md ">


        <div class="md:col-span-2 ">
        <h1 class="text-3xl font-bold flex items-center"><?php echo $web_title?> </h1>
        <hr class="my-4 border-t-2 border-gray-300" />


    <?php
require_once('./inc/db.php'); // Ensure this is where your PDO connection is

// Set the number of items per page
$items_per_page = 1;

// Get the current page from the URL, default to 1
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$current_page = max($current_page, 1); // Ensure the page is at least 1

// Calculate the offset for the SQL query
$offset = ($current_page - 1) * $items_per_page;

// Fetch the total number of blogs
$total_blogs_query = "SELECT COUNT(*) FROM blogs";
$total_blogs_stmt = $conn->query($total_blogs_query);
$total_blogs = $total_blogs_stmt->fetchColumn();
$total_pages = ceil($total_blogs / $items_per_page);

// Fetch the blogs for the current page
$query = "SELECT * FROM blogs LIMIT :offset, :items_per_page";
$stmt = $conn->prepare($query);
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->bindParam(':items_per_page', $items_per_page, PDO::PARAM_INT);
$stmt->execute();
$blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Check if any blogs were found
if (count($blogs) > 0) {
    foreach ($blogs as $blog) {
        $date = $blog['date'];
        $first_title = $blog['first_title'];
        $second_title = $blog['second_title'];
        $third_title = $blog['third_title'];
        $author = $blog['author'];
        $image = $blog['image'];
        $video = $blog['video'];
        $blog_data = $blog['blog_data'];
        $blog_data2 = $blog['blog_data2'];

        // Output the blog data in a Tailwind styled format
        echo "
        
        <div class='bg-white  shadow-md rounded-lg p-6 mb-4'>
            <h2 class='text-xl font-bold'>$first_title</h2>
            <p class='text-gray-600'>$date</p>
            <p class='text-gray-800'>$second_title</p>
            <p class='text-gray-800'>$third_title</p>
            <p class='text-gray-700'>Author: $author</p>
            <img src='../assets/imgs/$image' alt='$first_title' class='w-full rounded-md mb-4'>
            <p class='text-gray-700'>$blog_data</p>
            <p class='text-gray-700'>$blog_data2</p>
            <video controls class='w-full h-60 rounded-md'>
                <source src='../assets/imgs/$video' type='video/mp4'>
                Your browser does not support the video tag.
            </video>
        </div>
        ";
    }
} else {
    echo "<p class='text-gray-500'>No blogs found.</p>";
}

// Pagination links
echo "<div class='flex justify-center mt-4'>";
$r = 5; // Base number of pagination buttons
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page from query string
$total_pages = 10; // Total number of pages (update as necessary)

if ($current_page > 1) {
    echo "<a href='?page=" . ($current_page - 1) . "' class='px-4 py-2 bg-blue-500 text-white rounded-l-md'>Previous</a>";
}

$start_page = max(1, $current_page - floor($r / 2)); // Start page for displaying pagination
$end_page = min($total_pages, $start_page + $r - 1); // End page based on total pages

// Adjust start_page if it goes below 1
if ($end_page - $start_page < $r - 1) {
    $start_page = max(1, $end_page - $r + 1);
}

for ($i = $start_page; $i <= $end_page; $i++) {
    if ($i == $current_page) {
        echo "<span class='px-4 py-2 bg-gray-300 text-gray-700 rounded-md'>$i</span>";
    } else {
        echo "<a href='?page=$i' class='px-4 py-2 bg-blue-500 text-white rounded-md'>$i</a>";
    }
}

if ($current_page < $total_pages) {
    echo "<a href='?page=" . ($current_page + 1) . "' class='px-4 py-2 bg-blue-500 text-white rounded-r-md'>Next</a>";
}

echo "</div>";
?>

</div>

</div>
</div>
    
        </div>
    </div>



<?php require_once('./inc/foot.php');?>

