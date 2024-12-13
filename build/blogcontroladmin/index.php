<?php
require_once('./inc/db.php');
require_once('./inc/authentication.php');
$web_title = "Home";
 require_once('./inc/top.php'); 

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

            <?php
            require_once('./inc/db.php');

            // Initialize variables for the counts
            $total_users = 0;
            $total_posts = 0;
            $total_categories = 0;

            // Query to count the total number of users
            $query_users = "SELECT COUNT(*) as total_users FROM users";
            $stmt_users = $conn->query($query_users);
            if ($stmt_users) {
                $row_users = $stmt_users->fetch(PDO::FETCH_ASSOC);
                $total_users = $row_users['total_users'];
            }

            // Query to count the total number of posts
            $query_posts = "SELECT COUNT(*) as total_posts FROM blogs";
            $stmt_posts = $conn->query($query_posts);
            if ($stmt_posts) {
                $row_posts = $stmt_posts->fetch(PDO::FETCH_ASSOC);
                $total_posts = $row_posts['total_posts'];
            }

            // Query to count the total number of categories
            $query_categories = "SELECT COUNT(*) as total_categories FROM categories";
            $stmt_categories = $conn->query($query_categories);
            if ($stmt_categories) {
                $row_categories = $stmt_categories->fetch(PDO::FETCH_ASSOC);
                $total_categories = $row_categories['total_categories'];
            }

            // Your existing code for today's visits...
            $query_visits_today = "SELECT SUM(visit_count) as total_visits FROM visit_statistics WHERE visit_date = CURDATE()";
            $stmt_visits_today = $conn->query($query_visits_today);
            if ($stmt_visits_today) {
                $row_visits_today = $stmt_visits_today->fetch(PDO::FETCH_ASSOC);
                $total_visits_today = $row_visits_today['total_visits'] ? $row_visits_today['total_visits'] : 0;
            } else {
                $total_visits_today = 0;
            }

            // Fetching total visits for the last 7 days
            try {
                $stmt = $conn->prepare("SELECT SUM(visit_count) as total_visits FROM visit_statistics WHERE visit_date >= CURDATE() - INTERVAL 7 DAY");
                $stmt->execute();

                // Fetch total visits in last 7 days
                $row_visits_7_days = $stmt->fetch(PDO::FETCH_ASSOC);
                $total_visits_7_days = $row_visits_7_days['total_visits'] ? $row_visits_7_days['total_visits'] : 0;

            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
                exit(); // Exit if there's an error
            }
            ?>

            <div class="container mx-auto mt-10">
                <h1 class="text-3xl font-bold flex items-center"><?php echo $web_title?> </h1>
                <hr class="my-4 border-t-2 border-gray-300" />
                <div class="grid grid-cols-1 sm:grid-cols-4 gap-6">
                    <!-- Users Counter -->
                    <div class="bg-white text-black p-6 rounded-lg shadow-md text-center">
                        <h2 class="text-2xl font-bold">Total Users</h2>
                        <p class="text-4xl mt-4"><?= $total_users ?></p>
                    </div>

                    <!-- Posts Counter -->
                    <div class="bg-white text-black p-6 rounded-lg shadow-md text-center">
                        <h2 class="text-2xl font-bold">Total Posts</h2>
                        <p class="text-4xl mt-4"><?= $total_posts ?></p>
                    </div>

                    <!-- Categories Counter -->
                    <div class="bg-white text-black p-6 rounded-lg shadow-md text-center">
                        <h2 class="text-2xl font-bold">Total Categories</h2>
                        <p class="text-4xl mt-4"><?= $total_categories ?></p>
                    </div>
                    <!-- Today Visitors -->
                    <div class="bg-white text-black p-6 rounded-lg shadow-md text-center">
                        <h2 class="text-2xl font-bold">Total Visitors Today</h2>
                        <p class="text-4xl mt-4"><?= $total_visits_7_days  ?></p>
                    </div>
                </div>
            </div>

            <?php
            try {
                $stmt = $conn->prepare("SELECT visit_date, visit_count FROM visit_statistics WHERE visit_date >= CURDATE() - INTERVAL 7 DAY ORDER BY visit_date");
                $stmt->execute();

                // Fetch data
                $visits = [];
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $visits[$row['visit_date']] = (int)$row['visit_count'];
                }

                // Prepare labels and data for the chart
                $labels = json_encode(array_keys($visits));
                $data = json_encode(array_values($visits));

            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            ?>

            <canvas id="visitsChart" width="400" height="100"></canvas>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const ctx = document.getElementById('visitsChart').getContext('2d');
                    const visitsChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: <?php echo $labels; ?>, // Date labels
                            datasets: [{
                                label: 'Number of Visits',
                                data: <?php echo $data; ?>, // Visit counts
                                borderColor: 'rgba(75, 192, 192, 1)',
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderWidth: 2,
                                fill: true,
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                x: {
                                    title: {
                                        display: true,
                                        text: 'Date'
                                    }
                                },
                                y: {
                                    title: {
                                        display: true,
                                        text: 'Number of Visits'
                                    },
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                });
            </script>

        </div>
    </div>

</div>
</div>

<?php require_once('./inc/foot.php'); ?>
