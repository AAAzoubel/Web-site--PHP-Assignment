<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Add Student</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="index.php">Add</a>
                </li>
                <li>
                    <a href="view_result.php">View</a>
                </li>
            </ul>
        </nav>
        <h1>View Student Record</h1>
    </header>
<div class="tr">
    <?php

include ('database.php');
$sql = "SELECT name, id, course, grade FROM students_detailed";
$res = mysqli_query($con, $sql);

if ($res && mysqli_num_rows($res) > 0) {
    echo "<table class='table table-striped'>";
    echo "<thead><tr>
            <th>Name</th>
            <th>ID</th>
            <th>Course</th>
            <th>Grade</th>
          </tr></thead><tbody>";
while($row = mysqli_fetch_assoc($res)){
    echo "<tr>
    <td>" . htmlspecialchars($row['name']) . "</td>
    <td>" . htmlspecialchars($row['id']) . "</td>
    <td>" . htmlspecialchars($row['course']) . "</td>
    <td>" . htmlspecialchars($row['grade']) . "</td>
  </tr>";
}
echo "</tbody></table>";
} else {
    echo "<p>No records found.</p>";
}

mysqli_close($con);
?>
</div>
    <footer>
        <p>© 2024 Dynamic Web Development</p>
    </footer>
</body>
</html>

