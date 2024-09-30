<?php
require_once('./inc/authentication.php');
$web_title = "Add User";
require_once('./sidenav.php');
require_once('./inc/db.php'); // Ensure this is where your PDO connection is

// Initialize variables for feedback
$error_msg = '';
$success_msg = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $verify_status = 0; // Default to not verified
    $verify_token = bin2hex(random_bytes(16)); // Generate a random verification token

    // Validate input
    if (empty($name) || empty($phone) || empty($email) || empty($_POST['password'])) {
        $error_msg = "All fields are required.";
    } else {
        // Prepare and execute the insert query
        $query = "INSERT INTO users (name, phone, email, password, verify_status, verify_token) VALUES (:name, :phone, :email, :password, :verify_status, :verify_token)";
        $stmt = $conn->prepare($query);
        
        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':verify_status', $verify_status);
        $stmt->bindParam(':verify_token', $verify_token);
        
        // Execute the statement
        if ($stmt->execute()) {
            $success_msg = "User added successfully.";
            // Clear the form fields
            $name = $phone = $email = '';
        } else {
            $error_msg = "Failed to add user.";
        }
    }
}
?>
  <!-- Main content -->
  <div class="flex-1 min-h-screen  p-10">
        <!-- Content -->
        <div id="main-content">
            <div class="container mx-auto mt-10">
                <div class="bg-white p-6 rounded-lg shadow-md">
                <h1 class="text-3xl font-bold flex items-center"><?php echo $web_title?> </h1>
                <hr class="my-4 border-t-2 border-gray-300" />
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">    
                <!-- Add User Input Start Here -->
                <div>
                   
            
                    <?php if ($error_msg): ?>
                    <div class="bg-red-200 text-red-700 p-2 rounded mb-4"><?= $error_msg ?></div>
                    <?php endif; ?>
                    <?php if ($success_msg): ?>
                    <div class="bg-green-200 text-green-700 p-2 rounded mb-4"><?= $success_msg ?></div>
                    <?php endif; ?>

                    <form action="" method="POST">
                    <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                    <input type="text" name="name" id="name" value="<?= htmlspecialchars($name ?? '') ?>" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone:</label>
                    <input type="text" name="phone" id="phone" value="<?= htmlspecialchars($phone ?? '') ?>" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                    <input type="email" name="email" id="email" value="<?= htmlspecialchars($email ?? '') ?>" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                    <input type="password" name="password" id="password" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div>
                    <input type="submit" value="Add User" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                    </div>
                    </form>
                    </div>
                    <!-- Users list start here -->
                    <div>
                    <table class="min-w-full bg-white border border-gray-300">
    <thead>
        <tr class="border-b bg-gray-100">
            <th class="py-2 px-4 text-left text-gray-600">Name</th>
            <th class="py-2 px-4 text-left text-gray-600">Email</th>
            <th class="py-2 px-4 text-left text-gray-600">Status</th>
            <th class="py-2 px-4 text-left text-gray-600">Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $user_query = "SELECT * FROM users ORDER BY id DESC";
    $stmt = $conn->prepare($user_query);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user_row) {
        $user_id = $user_row['id'];
        $user_name = $user_row['name'];
        $user_email = $user_row['email'];
        $user_status = $user_row['verify_status'];
    ?>
        <tr class="border-b">
            <td class="py-2 px-4"><?php echo htmlspecialchars($user_name); ?></td>
            <td class="py-2 px-4"><?php echo htmlspecialchars($user_email); ?></td>
            <td class="py-2 px-4">
                <form action="./inc/toggleuser.php" method="POST">
                    <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user_id); ?>">
                    <button type="submit" name="toggle_status" class="py-1 px-2 bg-blue-500 text-white rounded">
                        <?php echo $user_status === 'Approved' ? 'Approved' : 'Disabled'; ?>
                    </button>
                </form>
            </td>
            <td class="py-2 px-4">
                <form action="./inc/toggleuser.php" method="POST">
                    <button type="submit" name="delete" value="<?php echo htmlspecialchars($user_id); ?>" class="text-red-500">
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
                    

<?php require_once('./inc/foot.php');?>





























