<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <h1>Student List</h1>

    <?php
    if ($DBGetListReturn->num_rows > 0) {
        echo "<table border='5'><tr>
                <th>Student Name</th>
                <th>Age</th>
                <th>Course</th>
              </tr>";

        while ($row = $DBGetListReturn->fetch_assoc()) {
            echo "<tr>
                    <td>{$row["name"]}</td>
                    <td>{$row["age"]}</td>
                    <td>{$row["course"]}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No records found"; // You can customize this message
    }
    ?>
</body>
</html>
