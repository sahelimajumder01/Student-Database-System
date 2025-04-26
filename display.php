<?php
include 'db.php';

$sql = "SELECT * FROM student";
$result = $conn->query($sql);
?>

<html>
<head>
     <title>Student Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Student Records</h2>
    <table border="1">
        <tr>
            <th>Roll_No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
	    <th>Gender</th>
	     <th>DOB</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['roll_no']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['department']; ?></td>
		<td><?php echo $row['gender']; ?></td>
		<td><?php echo $row['dob']; ?></td>

            </tr>
        <?php } ?>
    </table>

    <br>
    <a href="index.php">Add New Students</a>
</body>
</html>

<?php $conn->close(); ?>