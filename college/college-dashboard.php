<?php 
    if (!isset($_COOKIE['cid'])) {
        header('Location: ../home.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCl | Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../images/note.png">
</head>
<body>
    <!-- Navigation Bar -->
    <header>
        <div class="navbar">
            <div class="user-info">Logged in as: <span id="username">John Doe</span></div>
            <div class="nav-buttons">
                <button id="logoutButton">Logout</button>
                <label class="switch">
                    <input type="checkbox" id="darkModeToggle">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Sidebar -->
        <aside>
            <div class="sidebar">
                <h2>Menu</h2>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </div>
        </aside>

        <!-- Content Area -->
        <section class="content">
            <!-- Your content goes here -->
        </section>
    </main>
    <script>
        // Get elements
const darkModeToggle = document.getElementById('darkModeToggle');
const body = document.body;
const username = document.getElementById('username');
const logoutButton = document.getElementById('logoutButton');

// Event listeners
darkModeToggle.addEventListener('change', () => {
    if (darkModeToggle.checked) {
        body.classList.add('dark-mode');
    } else {
        body.classList.remove('dark-mode');
    }
});

logoutButton.addEventListener('click', () => {
    // Implement logout functionality here
    alert('Logged out'); // Replace with actual logout code
});

    </script>
</body>
</html>
