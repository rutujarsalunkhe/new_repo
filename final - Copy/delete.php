<?php include 'in.php'; ?>
<?php
$id = $_GET['id'];
$sql = "DELETE FROM student2 WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Student deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

