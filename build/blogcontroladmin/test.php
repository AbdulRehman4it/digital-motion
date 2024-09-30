<?php
require_once('./inc/db.php'); 

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Line Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<canvas id="visitsChart" width="400" height="200"></canvas>



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

</body>
</html>
