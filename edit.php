<?php include 'config.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    mysqli_query($conn, "UPDATE students SET name='$name', email='$email', course='$course' WHERE id=$id");
    echo "Student updated!";
}
?>

<form method="POST">
    Name: <input type="text" name="name" value="<?= $row['name'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $row['email'] ?>"><br>
    Course: <input type="text" name="course" value="<?= $row['course'] ?>"><br>
    <button type="submit" name="update">Update</button>
</form>
