
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ABC Consultant</title>
  <link rel="stylesheet" href="style.css">
  <style>
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
        <li><a href="about.php">ABOUT ME</a></li>
        <li><a href="skills.php">SKILLS</a></li>
        <li><a href="project.php">PROJECT</a></li>
        <li><a href="recommendation.php">RECOMMENDATIONS</a></li>
      </ul>
    </nav>
  </header>

  
</body>
</html>

