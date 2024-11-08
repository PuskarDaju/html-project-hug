<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2Ansatte</title>
</head>
<body>

    <header>
        <h1>2Ansatte</h1>
    </header>

    <section>
        <?php
            // Database connection parameters
            $host = "localhost";
            $username ="root";
            $password ="";
            $database ="open_source";

            // Create a connection to the database
            $conn = new mysqli($host, $username, $password, $database);

            // Check the connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to retrieve data (replace 'your_table' with your actual table name)
            $sql = "SELECT * FROM employees";
            $result = $conn->query($sql);

            // Display the data
            if ($result->num_rows > 0) {
                echo "<h2>Employee Data:</h2>";
                echo "<ul>";
                while ($row = $result->fetch_assoc()) {
                    echo "<li>{$row['employee_name']}</li>";
                    // Add more fields as needed
                }
                echo "</ul>";
            } else {
                echo "No data found.";
            }

            // Close the database connection
            $conn->close();
        ?>
    </section>

    <footer>
        <p>&copy; 2023 2Ansatte</p>
    </footer>

</body>
</html>
