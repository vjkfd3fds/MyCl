<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Table Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Product Catalog</h1>
        <form action="process_form.php" method="post">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Product Image</th>
                        <th>Institution Name</th>
                        <th>Description</th>
                        <th>University</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td><img src="product2.jpg" alt="Product 2" width="100"></td>
                        <td>Product 2</td>
                        <td>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                        <td>$29.99</td>
                        <td>
                            <input type="text" name="action2" placeholder="Enter the ID" class="form-control">
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            <button type="submit" class="btn btn-success">Accept</button>
            <button type="submit" class="btn btn-danger">Reject</button>
        </form>
    </div>

    <!-- Include Bootstrap JavaScript and jQuery if needed -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
