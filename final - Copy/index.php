<?php include 'in.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <style>
        table {
            border-collapse: black;
            width: 100%;
        }
        th, td {
            border: 5px solid;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        body{
            background-color:#f2f2f2;
            text-align:center;

            
        }
    
    </style>
</head>
<body>
    <h2>Student  College Data</h2>
    <a href="add.php">Add Student information</a>
    <br><br>
    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Age</th>
            <th>Class</th>
            <th>Birth Date</th>
            <th>Mobile Number</th>
            <th>Email ID</th>
            <th>Edit/Delete</th>
        </tr>
        <?php
        $sql = "SELECT * FROM student2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['age']."</td>";
                echo "<td>".$row['class']."</td>";
                echo "<td>".$row['date']."</td>";
                echo "<td>".$row['number']."</td>";
                echo "<td>".$row['email']."</td>";



                echo "<td>
                        <a href='edit.php?id=".$row['id']."'>Upadate data</a> | 
                        <a href='delete.php?id=".$row['id']."'>Delete data</a>
                    </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No records found</td></tr>";
        }

$conn->close();


        ?>
    </table>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>
