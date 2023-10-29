

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
<body>

    <div class="container mt-5">
            <h1 class="mb-4">User Accounts</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>institution</th>
                            <th>programs</th>
                            <th>courses</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include('../backend-php/connect.php');
                        $sql = "SELECT * FROM college_details";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo '<tr>';
                            echo '<td>' . $row['institution'] . '</td>';
                            echo '<td>' . $row['programs'] . '</td>';
                            echo '<td>' . $row['course'] . '</td>';
                            echo '</tr>';
                        } else {
                            echo '<tr>';
                            echo '<td>No data found</td>';
                            echo '<td>No data found</td>';
                            echo  '<td>No data found</td>';
                        }
                    ?>
                    </tbody>
                </table>
            </form>
        </div>

    <!-- ... (your other scripts) ... -->
</body>

</html>
