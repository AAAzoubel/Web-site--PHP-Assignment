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
        <h1>Add Student Record</h1>
    </header>
    <div>
        <?php
        include('database.php');
        $name=$_POST['name'];
        $id=$_POST['id'];
        $course=$_POST['course'];
        $grade=$_POST['grade'];

        function validate_input($data) {
            return trim($data);
        }
        $errors = [];

        if (empty($name)) {
            $errors[] = "Name is required.";
        }
    
        if (empty($id)) {
            $errors[] = "ID is required.";
        }
    
        if (empty($course)) {
            $errors[] = "Course is required.";
        }
    
        if (empty($grade)) {
            $errors[] = "Grade is required.";
        }
    
    
        
        $sql = "INSERT INTO students_detailed(name, id, course, grade) VALUES ('$name', '$id', '$course', '$grade')";

        if(mysqli_query($con, $sql)){
            echo "Registered";
        } else {
            echo "Error: " . mysqli_error($con);
        }

        mysqli_close($con)

        
        ?>
    </div>
</body>
</html>
