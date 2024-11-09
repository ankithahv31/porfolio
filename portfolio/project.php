<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RESUMEWEBSITE</title>
  <link rel="stylesheet" href="style.css">
  <style>
   header {
  overflow: hidden;
  background-color: lightblue;
  color: black;
  text-align: left;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
}

.center {
  text-align: center;
  margin-bottom: 20px;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav ul li {
  margin-right: 20px;
}

nav ul li a {
  text-decoration: none;
  color: black;
  padding: 10px 20px;
}

.skills-container {
  display: flex;
  justify-content: center; /* Center align items horizontally */
  flex-wrap: wrap;
  padding: 20px;
}
.skills-container {
  display: flex;
  justify-content: center; /* Center align items horizontally */
  flex-wrap: wrap;
  padding: 20px;
}

.skill {
  text-align: center;
  margin: 10px;
  width: 180px; /* Adjusted width for square appearance */
  height: auto; /* Let height adjust based on content */
  border: 1px solid #ccc; /* Add a border for better visual separation */
  padding: 10px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  transition: transform 0.3s ease; /* Optional: Add transition for hover effect */
}

.skill:hover {
  transform: scale(1.1); /* Optional: Scale up on hover for a subtle effect */
}

.skill img {
  max-width: 80px;
  max-height: 80px;
}

.skill p {
  margin-top: 10px;
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
        <li><a href="recommendation.php">RECOMMENDATIONS</a></li>
      </ul>
    </nav>
  </header>

  <section class="skills-container">
    <!-- Existing Skills -->
    <div class="skill">
      <img src="img/madarasaproject.png" alt="MADARASA MANAGEMENT Logo">
      <p>MADARASA MANAGEMENT</p>
      <p>Systematized website where we have Digitilized Attendence System of Madarasa School<p>
        <p>LANGUAGE USED
            1.Frontend : PHP,CSS,JavaScript

            2.Backend  : MYSQL
    </div>
    <div class="skill">
      <img src="img/dgradestaff.jpeg" alt="DGRADESTAFF Logo">
      <p>DGRADESTAFF MANAGEMENT</p>
      <p>Digitalizing Dgradestaff of a particular institution by recording their details in this website by admin<p>
        <p>LANGUAGE USED
            1.Frontend : PHP,HTML,CSS,JavaScript

            2.Backend  : MYSQL
    </div>
    <div class="skill">
      <img src="img/resumewebsite.jpeg" alt="RESUME WEBSITE Logo">
      <p>DITITAL RESUME</p>
      <p>Resume through website<p>
      <p>Invividuals can make use of this website to dititailize their resume by hosting through website<p>
        <p>LANGUAGE USED
            1.Frontend : HTML,CSS,JavaScript

            2.Backend  : MYSQL
    </div>

    <!-- New Skills Added Dynamically -->
    <!-- JavaScript will add new skills here -->
  </section>

 
</body>
</html>
