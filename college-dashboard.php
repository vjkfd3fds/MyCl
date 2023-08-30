<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moving Navbar</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar li {
            flex: 1;
            text-align: center;
        }

        .navbar a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .section {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
        }

        /* Highlight the current section in the navbar */
        .navbar a.active {
            background-color: #666;
        }

    </style>
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    
    <div id="home" class="section">Home Section</div>
    <div id="about" class="section">About Section</div>
    <div id="services" class="section">Services Section</div>
    <div id="contact" class="section">Contact Section</div>
</body>
</html>
