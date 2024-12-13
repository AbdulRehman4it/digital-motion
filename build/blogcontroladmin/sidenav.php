<?php require_once('./inc/top.php'); ?>
<?php require_once('./inc/authentication.php'); ?>
<body class="loginbg">
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

</body>
