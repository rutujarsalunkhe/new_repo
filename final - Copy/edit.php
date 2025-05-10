<?php include 'in.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM student2 WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>

        <label>Age:</label><br>
        <input type="number" name="age" value="<?php echo $row['age']; ?>" required><br>

        <label>Class:</label><br>
        <input type="text" name="class" value="<?php echo $row['class']; ?>" required><br>

        <label>Birth date:</label><br>
        <input type="date" name="date" value="<?php echo $row['date']; ?>" required><br>

        <label>Mobile Number:</label><br>
        <input type="number" name="number" value="<?php echo $row['number']; ?>" required><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>

 

        <input type="submit" value="Update Student">
    </form>
    <?php
    } else {
        echo "No student found";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $class = $_POST['class'];
        $date = $_POST['date'];
        $number = $_POST['number'];
        $email = $_POST['email'];

        $sql = "UPDATE student2 SET name='$name', age='$age', class='$class', date='$date', number='$number', email='$email'  WHERE id='$id'";



        if ($conn->query($sql) === TRUE) {
            echo "Student updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
</body>
</html>
