<?php
$webtitle = 'Blogs';
require_once('./inc/top.php');

// Get the id from the URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Prepare and execute the SQL query
$sql = "SELECT `id`, `image`, `image2`, `image3`, `image4`, `image5`, `img_caption`, `date`, `categories`, `categories_id`, `first_title`, `second_title`, `third_title`, `author`, `video`, `blog_data`, `blog_data2` FROM `blogs` WHERE `id` = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

// Check if a blog post was found
if ($stmt->rowCount() > 0) {
    // Fetch the data
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $blogFirstTitle = $row['first_title'];
    $blogSecondTitle = $row['second_title'];
    $blogThirdTitle = $row['third_title'];
    $blogDate = $row['date'];
    $coverImage = $row['image'];
    $blogContent = $row['blog_data'];
    $blogContent2 = $row['blog_data2'];
    $author = $row['author'];
    $categories = $row['categories'];
} else {
    // If no post found, redirect or show an error message
    echo "<p>Blog post not found.</p>";
    exit();
}
?>

<section class="px-12 py-10">
    <!-- Blog Heading -->
    <h1 class="uppercase herofont font-extrabold text-[#004890] lg:text-6xl md:text-4xl text-2xl text-left mb-4"><?php echo htmlspecialchars($blogFirstTitle); ?></h1>
    
    <!-- Blog Data Section -->
    <div class="text-lg md:text-xl mb-8">
        <p>
            Date: <?php echo date("F d, Y", strtotime($blogDate)); ?>
        </p>
        <p>
            Author: <?php echo htmlspecialchars($author); ?>
        </p>
        <p>
            Categories: <?php echo htmlspecialchars($categories); ?>
        </p>
    </div>

    <!-- Jumbotron Section -->
    <div class="relative bg-cover bg-center h-[600px]" style="background-image: url('<?php echo htmlspecialchars($coverImage); ?>');">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative z-10 text-white p-4">
            <h2 class="text-2xl">Welcome to Our Blog</h2>
        </div>
    </div>
    
    <p class="text-lg md:text-xl mt-4">
        <?php echo nl2br(htmlspecialchars($blogContent)); ?>
    </p>
    <p class="text-lg md:text-xl mt-4">
        <?php echo nl2br(htmlspecialchars($blogContent2)); ?>
    </p>
</section>

<section class="flex flex-col md:flex-row lg:mt-10 md:mt-10 mt-0" data-aos="fade-up">
    <!-- Left Div with Image -->
    <div class="w-full md:w-1/2 h-full flex items-center justify-center p-6 lg:p-12" data-aos="flip-left">
        <img src="<?php echo htmlspecialchars($row['image2']); ?>" alt="Description of the image" class="object-cover w-full h-full" />
    </div>

    <!-- Right Div with Heading and Paragraphs -->
    <div class="w-full md:w-1/2 flex flex-col justify-center p-6 lg:p-12 space-y-8" data-aos="flip-right">
        <h1 class="uppercase herofont font-extrabold text-[#004890] lg:text-6xl md:text-4xl text-2xl text-left mb-4">
            <?php echo htmlspecialchars($blogSecondTitle); ?>
        </h1>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-[#444444] leading-relaxed secondaryfont mb-4">
            Fit-outs and Interior Concepts. Design visionaries. Event innovators. Production specialists. For more than two decades, Dynamic Motion has been helping world-leading brands and businesses successfully connect with their target audience.
        </p>
    </div>
</section>

<section class="px-12 py-10 bg-gray-100">
    <!-- Section Heading -->
    <h2 class="uppercase herofont font-extrabold text-[#004890] lg:text-6xl md:text-4xl text-2xl text-left mb-4">
        <?php echo htmlspecialchars($blogThirdTitle); ?>
    </h2>
    
    <!-- Paragraphs -->
    <div class="text-lg md:text-xl">
        <p class="mb-4 text-[#444444] secondaryfont">
            From intimate VIP dinners to large-scale global events, we are constantly pushing the boundaries of creativity. We integrate cutting-edge technology, interactive elements, and memorable design to deliver experiences that captivate attendees and amplify your brand’s message. Our global perspective allows us to incorporate trends and ideas from around the world, ensuring your event feels fresh and on the pulse of what’s current.
        </p>
        <p class="mb-4 text-[#444444] secondaryfont">
            Global Expertise, Local Precision With over two decades of experience and a presence in multiple countries, Dynamic Motion brings a global mindset to every project. Our expert teams work across continents, delivering events that cater to diverse markets and cultural nuances. This global expertise, combined with our attention to detail, ensures that no matter where your event takes place, it will have a local touch that feels authentic and impactful.
        </p>
    </div>
</section>

<?php
require_once('./inc/bottom.php');
?>
