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
        <li><a href="project.php">PROJECT</a></li>
        <li><a href="recommendation.php">RECOMMENDATIONS</a></li>
      </ul>
    </nav>
  </header>

  <section class="skills-container">
    <!-- Existing Skills -->
    <div class="skill">
      <img src="img/Logo HTML5.JPG" alt="HTML Logo">
      <p>HTML</p>
    </div>
    <div class="skill">
      <img src="img/css.jpeg" alt="CSS Logo">
      <p>CSS</p>
    </div>
    <div class="skill">
      <img src="img/javascript.jpeg" alt="JavaScript Logo">
      <p>JavaScript</p>
    </div>

    <!-- New Skills Added Dynamically -->
    <!-- JavaScript will add new skills here -->
  </section>

  <script>
    // JavaScript for adding new skills
    document.addEventListener('DOMContentLoaded', function() {
      var newSkills = [
        { logo: 'img/php.jpeg', text: 'PHP' },
        { logo: 'img/python.jpeg', text: 'Python' },
        { logo: 'img/sql.jpeg', text: 'SQL' }
      ];

      var skillsContainer = document.querySelector('.skills-container');

      newSkills.forEach(function(skill) {
        var skillHTML = `
          <div class="skill">
            <img src="${skill.logo}" alt="${skill.text} Logo">
            <p>${skill.text}</p>
          </div>
        `;
        skillsContainer.insertAdjacentHTML('beforeend', skillHTML);
      });
    });
  </script>
</body>
</html>
