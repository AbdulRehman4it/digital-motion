<?php
require_once('./inc/authentication.php');
$web_title = "Home";
require_once('./sidenav.php');
require_once('./inc/db.php');
// Get the current date
$current_date = date('Y-m-d');
// Check if there's an entry for today's date
$query_check = "SELECT * FROM visit_statistics WHERE visit_date = :visit_date";
$stmt_check = $conn->prepare($query_check);
$stmt_check->execute(['visit_date' => $current_date]);
if ($stmt_check->rowCount() > 0) {
    // If an entry exists, update the visit count
    $query_update = "UPDATE visit_statistics SET visit_count = visit_count + 1 WHERE visit_date = :visit_date";
    $stmt_update = $conn->prepare($query_update);
    $stmt_update->execute(['visit_date' => $current_date]);
} else {
    // If no entry exists, insert a new row
    $query_insert = "INSERT INTO visit_statistics (visit_date, visit_count) VALUES (:visit_date, 1)";
    $stmt_insert = $conn->prepare($query_insert);
    $stmt_insert->execute(['visit_date' => $current_date]);
}

?>


  <!-- Main content -->
  <div class="flex-1 min-h-screen  p-10">
        <div id="main-content">
        <div class="container mx-auto mt-10">
        <div class="bg-white p-6 rounded-lg shadow-md">       
      
<?php
require_once('./inc/db.php'); // Ensure this is where your PDO connection is

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
// Query to count the total number of visits from today
$query_visits_today = "SELECT SUM(visit_count) as total_visits FROM visit_statistics WHERE visit_date = CURDATE()";
$stmt_visits_today = $conn->query($query_visits_today);
if ($stmt_visits_today) {
    $row_visits_today = $stmt_visits_today->fetch(PDO::FETCH_ASSOC);
    $total_visits_today = $row_visits_today['total_visits'] ? $row_visits_today['total_visits'] : 0; // Default to 0 if no visits
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
            <!-- Today Vistors -->
              <div class="bg-white text-black p-6 rounded-lg shadow-md text-center">
                <h2 class="text-2xl font-bold">Total Visitor Today</h2>
                <p class="text-4xl mt-4"><?= $total_visits_today ?></p>
            </div>
        </div>
    </div>



    <?php
    try {
   
      // Prepare SQL statement to fetch last 7 days of data
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

    <?php require_once('./inc/foot.php');?>


