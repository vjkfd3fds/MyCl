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
</body>
</html>
