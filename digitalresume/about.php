<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
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

    .about-section {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 20px;
    }

    .about-section .row {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: flex-start;
      width: 100%;
      max-width: 1200px; /* Max width for content */
    }

    .about-section .image {
      flex: 0 0 45%; /* Take up 45% of the container width */
      max-width: 45%;
      margin-right: 20px; /* Space between image and content */
    }

    .about-section .image img {
      width: 100%; /* Ensure image fills its container */
      height: auto; /* Maintain aspect ratio */
    }

    .about-section .content {
      flex: 0 0 50%; /* Take up 50% of the container width */
      max-width: 50%;
    }

    .about-section h3 {
      color: rgb(21, 23, 23);
    }

    .about-section p {
      margin-top: 10px;
      font-size: 16px;
      line-height: 1.6;
    }
  </style>
</head>
<body>
  <header>
    <h1>ABOUT ME</h1>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="skills.php">SKILLS</a></li>
        <li><a href="project.php">PROJECT</a></li>
        <li><a href="recommendation.php">RECOMMENDATIONS</a></li>
      </ul>
    </nav>
  </header>


  <section class="about-section">
    <div class="row">
      <div class="image">
        <img src="img/profileimg1.webp" alt="College Image">
      </div>
      <div class="content">
        <h1>Hi,I am Tanya Rohini! </h1>
        <p>
        A dedicated Personality with a passion for software development and IT solutions, eager to contribute technical skills within a collaborative team environment. Enthusiastic about coding, exploring new technologies, and contributing to open-source projects. Proficient in conveying ideas clearly and effectively, ensuring seamless communication across diverse stakeholders and facilitating productive exchanges
        </p>
      </div>
    </div>
  </section>


</body>
</html>
