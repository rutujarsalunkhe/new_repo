<?php include 'in.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h2>Add Student</h2>
    <form action="" method="post">
        <label>Full Name:</label><br>
        <input type="text" name="name" required><br><br>
        <label>Age:</label><br>
        <input type="number" name="age" required><br><br>
        <label>class:</label><br>
        <input type="text" name="class" required><br><br>
        <label>Birth date:</label><br>
        <input type="date" name="date" required><br><br>
        <label>Mobile Number:</label><br>
        <input type="number" name="number" required><br><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        
        <input type="submit" value="Add Student">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $class = $_POST['class'];
        $date = $_POST['date'];
        $number = $_POST['number'];
        $email = $_POST['email'];



        

        $sql = "INSERT INTO student2 ( name ,age, class,date,number,email) VALUES ('$name', '$age', ' $class', ' $date', ' $number', ' $email')";

        if ($conn->query($sql) === TRUE) {
            echo "Student added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
</body>
</html>
