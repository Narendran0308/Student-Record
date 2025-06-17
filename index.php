<?php include 'config.php'; ?>
<h2>Student List</h2>
<a href="add.php">Add Student</a>
<table border="1">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Actions</th></tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM students");
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['course']}</td>
        <td>
            <a href='edit.php?id={$row['id']}'>Edit</a> | 
            <a href='delete.php?id={$row['id']}'>Delete</a>
        </td>
    </tr>";
}
?>
</table>
