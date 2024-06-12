<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Add Student</title>
    <link rel="stylesheet" href="css/style.css">
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
        >
    </header>
        <div class="container">
        <h1>New Student Record</h1>
        <form action="students_detailed.php" class="form-action" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required><br><br>

            <label for="course">Course:</label>
            <input type="text" id="course" name="course" required><br><br>

            <label for="grade">Grade:</label>
            <input type="text" id="grade" name="grade" required><br><br>

            <input type="submit" value="Submit">
        </form>
        </div>
    <footer>
        <p>PHP Dynamic Website</p>
    </footer>
</body>
</html>

