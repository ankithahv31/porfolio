<?php
require('config.php');

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        
        // Prepare the SQL statement for insertion
        $sql = "INSERT INTO recommendation (name, description) VALUES (?, ?)";
        $stmt = $con->prepare($sql);

        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($con->error));
        }

        $stmt->bind_param('ss', $name, $description);
        $stmt->execute();
        $stmt->close();
    }

    if (isset($_POST['delete'])) {
        $name = $_POST['recommendation_name']; // Using name as the unique identifier
        
        // Prepare the SQL statement for deletion
        $sql = "DELETE FROM recommendation WHERE name=?";
        $stmt = $con->prepare($sql);

        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($con->error));
        }

        $stmt->bind_param('s', $name);
        $stmt->execute();
        $stmt->close();
    }
}

// Fetch recommendations
$recommendation = $con->query("SELECT * FROM recommendation");
if ($recommendation === false) {
    die('Query failed: ' . htmlspecialchars($con->error));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ABC Consultant</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      overflow: hidden; /* Clear floats */
      background-color: lightblue;
      color: black;
      text-align: left; /* Align content inside header to left */
      display: flex;
      justify-content: space-between; /* Align items with space between them */
      align-items: center; /* Center align vertically */
      padding: 10px 20px; /* Add padding to header */
    }

    .center {
      text-align: center;
      margin-bottom: 20px; /* Add margin bottom for spacing */
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex; /* Use flexbox for navigation items */
    }

    nav ul li {
      margin-right: 20px;
    }

    nav ul li a {
      text-decoration: none;
      color: black;
      padding: 10px 20px;
    }

    .container {
      text-align: center;
      margin: 20px auto;
    }

    .container form {
      display: inline-block;
      text-align: left;
    }

    .container table {
      margin: 0 auto;
      width: 100%;
      max-width: 600px;
    }

    .container table input[type="text"],
    .container table textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    .container input[type="submit"] {
      background-color: green;
      color: white;
      padding: 10px 160px;
      border: none;
      cursor: pointer;
    }

    .container input[type="submit"]:hover {
      background-color: #555;
    }

    .recommendations {
      margin: 20px auto;
      width: 80%;
      max-width: 800px;
      text-align: left;
    }

    .recommendation-item {
      border: 1px solid #ddd;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
      position: relative;
    }

    .recommendation-item h3 {
      margin: 0;
    }

    .delete-button {
      position: absolute;
      top: 10px;
      right: 10px;
      background-color: red;
      color: white;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
    }

    .delete-button:hover {
      background-color: darkred;
    }
  </style>
</head>
<body>
  <header>
    <div>
      <h1 class="styled-name">Tanya Rohini</h1>
      <h2>Email: tanyarohini31@gmail.com</h2>
      <h2>Phone: 21345678</h2>
    </div>
    <nav>
      <ul>
      <li><a href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT ME</a></li>
        <li><a href="skills.php">SKILLS</a></li>
        <li><a href="project.php">PROJECT</a></li>
        
      </ul>
    </nav>
  </header>
  <div class="container">
    <h2>Add NEW RECOMMENDATION</h2>
    <form method="POST" enctype="multipart/form-data">
        <table border="1">
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Description:</td>
                <td><textarea name="description" required></textarea></td>
            </tr>
        </table>
        <input type="submit" name="add" value="Add Recommendation">
    </form>
  </div>
  <div class="recommendations">
    <h2>Existing Recommendations</h2>
    <?php if ($recommendation->num_rows > 0): ?>
        <?php while($row = $recommendation->fetch_assoc()): ?>
            <div class="recommendation-item">
                <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                <p><?php echo htmlspecialchars($row['description']); ?></p>
                <form method="POST" style="display: inline;">
                    <input type="hidden" name="recommendation_name" value="<?php echo htmlspecialchars($row['name']); ?>"> <!-- Adjust column name here -->
                    <input type="submit" name="delete" value="Delete" class="delete-button">
                </form>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No recommendations found.</p>
    <?php endif; ?>
  </div>
</body>
</html>
