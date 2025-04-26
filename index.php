<?php include 'db.php'; ?>


<html>
<head>
     <title>Student Database System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Student Database System</h2>
    <form action="insert.php" method="POST">

	 <label for="roll">Roll:</label>
        <input type="number" name="roll_no" required><br><br>


        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

         <label for="department">Department:</label>
        <input type="text" name="department" required><br><br>
        <label for="gender">Gender:</label> <br> <br>
<select id="gender" name="gender" required> 
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
	<br><br>   

 <label for="dob"> Date Of Birth: </label>
        <input type="date" name="dob" required><br>

       <button type="submit">Add Student</button>
    </form>

    <br>
    <a href="display.php">View Student Records</a>
</body>
</html>