<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
   <style>/* Reset some default styles */
/* Reset some default styles */
body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

/* Style the navigation bar */
header {
    background-color: #007BFF;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
}

.user-info {
    font-weight: bold;
}

/* Style the sidebar */
aside {
    background-color: #333;
    color: #fff;
    width: 250px;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    padding: 20px;
    box-shadow: 2px 0px 4px rgba(0, 0, 0, 0.2);
}

.sidebar h2 {
    margin-bottom: 20px;
    font-size: 20px;
    color: #1E90FF; /* Dodger Blue color */
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar li {
    margin-bottom: 10px;
}

.sidebar a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 16px;
    transition: color 0.3s;
}

.sidebar a:hover {
    color: #F00; /* Red color on hover */
}

/* Style the main content area */
.content {
    margin-left: 270px;
    padding: 20px;
}



</style>
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
