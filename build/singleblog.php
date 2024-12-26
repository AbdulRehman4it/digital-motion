<?php
$webtitle = 'Blogs';
require_once('./inc/top.php');

// Get the id from the URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Prepare and execute the SQL query
$sql = "SELECT `id`, `image`, `first_title`, `blog_data`, `date` FROM `blogs` WHERE `id` = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

// Check if a blog post was found
if ($stmt->rowCount() > 0) {
    // Fetch the data
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $blogFirstTitle = $row['first_title'];
    $blogDate = $row['date'];
    $coverImage = $row['image'];
    $blogContent = $row['blog_data'];
} else {
    // If no post found, redirect or show an error message
    echo "<p>Blog post not found.</p>";
    exit();
}
?>
<!-- Preloader -->
<div id="preloader" class="fixed inset-0 bg-white flex justify-center items-center z-50">
    <img src="./assets/img/video.gif" alt="Loading..." class="w-16 h-16">
</div>
<!-- Blog Section -->
<section class="my-24 px-6 md:px-12 lg:px-24">
    <!-- Blog Heading -->
    <h1 class="herofont uppercase font-extrabold text-center text-[#004890] lg:text-6xl md:text-4xl text-2xl text-left mb-4" data-aos="fade-up">
        <?php echo htmlspecialchars($blogFirstTitle); ?>
    </h1>
    
    <!-- Blog Data Section (Date) -->
    <div class="text-lg md:text-xl mb-8">
        <p class="text-[#888888]">Published on: <?php echo date("F d, Y", strtotime($blogDate)); ?></p>
    </div>

    <!-- Blog Cover Image Section (Jumbotron) -->
    <div class="relative bg-cover bg-center h-[600px]" style="background-image: url('<?php echo htmlspecialchars($coverImage); ?>');">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative z-10 text-white p-4" data-aos="flip-left">
            <!-- You can add extra text or a call-to-action here -->
        </div>
    </div>
    
    <!-- Render Blog Content with Dynamic Styling -->
    <div class="mt-8">
        <div class="blog-content px-4">
            <!-- Apply Tailwind CSS styles to tags inside blog content -->
            <?php 
                // Use a callback function to apply the style for tags
                echo apply_blog_styles($blogContent);
            ?>
        </div>
    </div>
</section>

<?php
require_once('./inc/bottom.php');

// Function to apply Tailwind styles to specific tags within the blog content
function apply_blog_styles($content) {
    // Using regex to find and style HTML tags
    // Apply styling to specific tags
    $content = preg_replace('/<h1(.*?)>(.*?)<\/h1>/is', '<h1 class="text-4xl font-extrabold text-[#004890] mb-6">$2</h1>', $content);
    $content = preg_replace('/<h2(.*?)>(.*?)<\/h2>/is', '<h2 class="text-3xl font-semibold text-[#004890] mb-5">$2</h2>', $content);
    $content = preg_replace('/<h3(.*?)>(.*?)<\/h3>/is', '<h3 class="text-2xl font-semibold text-[#004890] mb-4">$2</h3>', $content);
    $content = preg_replace('/<p(.*?)>(.*?)<\/p>/is', '<p class="text-lg md:text-xl text-black leading-relaxed mb-4">$2</p>', $content);
    $content = preg_replace('/<ul(.*?)>(.*?)<\/ul>/is', '<ul class="list-disc pl-5 mb-4">$2</ul>', $content);
    $content = preg_replace('/<ol(.*?)>(.*?)<\/ol>/is', '<ol class="list-decimal pl-5 mb-4">$2</ol>', $content);
    $content = preg_replace('/<li(.*?)>(.*?)<\/li>/is', '<li class="mb-2">$2</li>', $content);
    $content = preg_replace('/<strong(.*?)>(.*?)<\/strong>/is', '<strong class="font-extrabold text-black">$2</strong>', $content);
    $content = preg_replace('/<em(.*?)>(.*?)<\/em>/is', '<em class="italic">$2</em>', $content);
    $content = preg_replace('/<a(.*?)>(.*?)<\/a>/is', '<a class="text-[#004890] hover:text-[#002f6c] underline">$2</a>', $content);

    // Return the styled content
    return $content;
}
?>
