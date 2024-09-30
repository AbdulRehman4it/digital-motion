<?php require_once('./inc/top.php');
require_once('./inc/authentication.php');
?>
<body class="loginbg">
<div class="flex">
      <!-- Toggle Button -->
      <button id="menu-btn" class=" w-20 p-2 bg-gray-900 text-white focus:outline-none">
            ☰
        </button>
    <!-- Sidebar -->
    <div id="sidebar" class="fixed inset-y-0 left-0 w-64 bg-gray-900 text-white transform -translate-x-full z-40">
        <div class="flex items-center justify-between h-16 border-b border-gray-700">
            <h1 class="text-lg font-bold">Blog Control Panel</h1>
            <button id="close-btn" class="text-white p-2 focus:outline-none">×</button>
        </div>
        <ul class="mt-4">
            <li class="px-6 py-3 hover:bg-gray-700 transition-colors">
                <a href="index.php">Home</a>
            </li>
            <li class="px-6 py-3 hover:bg-gray-700 transition-colors">
                <a href="adduser.php">Add User</a>
            </li>
            <li class="px-6 py-3 hover:bg-gray-700 transition-colors">
                <a href="addcategory.php">Add Category</a>
            </li>
            <li class="px-6 py-3 hover:bg-gray-700 transition-colors">
                <a href="addblog.php">Add Blog</a>
            </li>
            <li class="px-6 py-3 hover:bg-gray-700 transition-colors">
                <a href="allblogs.php">All BLogs</a>
            </li>
            <li class="border-t border-gray-700 my-2"></li>
            <li class="px-6 py-3 hover:bg-gray-700 transition-colors">
                <a href="logout.php">Logout</a>
            </li>
            
            <li class="border-t border-gray-700 my-2"></li>
            <li class="px-6 py-3"><strong>© Digital Motion</strong></li>
        </ul>
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

    
