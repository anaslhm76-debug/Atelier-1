```html
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Portfolio Pro</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

<style>
body {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  transition: 0.3s;
}

/* Light Mode */
body.light {
  background: linear-gradient(135deg, #1e3a8a, #3b82f6);
  color: white;
}

/* Dark Mode */
body.dark {
  background: #0f172a;
  color: white;
}

/* Header */
header {
  text-align: center;
  padding: 20px;
  background: rgba(0,0,0,0.2);
}

/* Profile */
.profile {
  text-align: center;
  margin: 20px;
}

.profile h2 {
  margin: 5px;
}

/* Skills */
.skills {
  display: flex;
  justify-content: center;
  gap: 15px;
  flex-wrap: wrap;
}

.skill {
  background: white;
  color: #1e3a8a;
  padding: 8px 15px;
  border-radius: 20px;
  font-size: 14px;
}

/* Buttons */
.buttons {
  text-align: center;
  margin: 20px;
}

button {
  padding: 10px 20px;
  margin: 5px;
  border-radius: 20px;
  border: none;
  cursor: pointer;
}

/* Cards */
.container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px,1fr));
  gap: 20px;
  padding: 20px;
}

.card {
  background: white;
  color: #1f2937;
  padding: 20px;
  border-radius: 15px;
  text-align: center;
  cursor: pointer;
  transition: 0.3s;
}

.card:hover {
  transform: scale(1.05);
}

.icon {
  font-size: 30px;
}

/* Toggle */
.toggle {
  position: absolute;
  top: 20px;
  right: 20px;
}

/* Animation */
.fade {
  animation: fade 0.5s;
}

@keyframes fade {
  from {opacity:0;}
  to {opacity:1;}
}
</style>

</head>

<body class="light">

<button class="toggle" onclick="toggleMode()">🌙</button>

<header>🎓 Mon Portfolio</header>

<div class="profile">
  <h2>Anass Lahmar</h2>
  <p>Développeur Web</p>
</div>


<div class="buttons">
  <button onclick="showAtelier(1)">Atelier 1</button>
  <button onclick="showAtelier(2)">Atelier 2</button>
</div>

<div id="content" class="container"></div>

<script>
function showAtelier(num) {
  let content = document.getElementById("content");

  if (num === 1) {
    content.innerHTML = `
      <div class="card fade" ">
        <a href="seance1_ex2_etoile.php" target="_blank">📘</a>
        Exercice 1
      </div>
      <div class="card fade">
        <div class="icon">📄</div>
        Rapport 1
      </div>
      <div class="card fade" ">
        <a href="seance1_ex1.php" target="_blank">📘</a>
        Exercice 2
      </div>
      <div class="card fade" onclick="openFile('rapport exercice 1.pdf')">
        <div class="icon">📄</div>
        Rapport 2
      </div>
    `;
  } else {
    content.innerHTML = `
      <div class="card fade" ">
        <div class="icon">📘</div>
        Exercice 3
      </div>
      <div class="card fade" onclick="openFile('#')">
        <div class="icon">📄</div>
        Rapport 3
      </div>
      <div class="card fade" onclick="openFile('#')">
        <div class="icon">📘</div>
        Exercice 4
      </div>
      <div class="card fade" onclick="openFile('#')">
        <div class="icon">📄</div>
        Rapport 4
      </div>
    `;
  }
}

/* Open file (PDF link later) */
function openFile(link) {
  alert("Hna t9dar t7et lien dyal PDF");
}

/* Dark Mode */
function toggleMode() {
  document.body.classList.toggle("dark");
  document.body.classList.toggle("light");
}

/* Default */
window.onload = () => showAtelier(1);
</script>

</body>
</html>
```
